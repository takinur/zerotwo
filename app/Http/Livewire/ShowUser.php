<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use App\Models\Socials;
use App\Models\LanguageModel;
use App\Models\Experience;
use App\Models\Edu;
use App\Models\skills;
use App\Models\LangProfi;

class ShowUser extends Component
{
    use WithFileUploads;

    Public $state = [];

    Public $lstate = [];
    
    public $avatar;

    public $uid;

    public $lan;

    public $fluency ;

    public $selectedFluency = '';

    public $pid;

    public $lid;

    public $updateMode = false;

    public function render()
    {

        $uid = Auth::user()->id;
        $this->uid = $uid;
            
        $profile= Profile::with('skills')
                ->with('Edu')
                ->with('Experience')
                ->with('Socials')
                ->where('user_id', $uid)
                ->first();
        
        $this->pid = $profile->id;

        $this->lan = DB::table('language')
                ->select('language.id','language.name','langproficiency.pro')
                ->join('langproficiency','language.proficiency_id','=','langproficiency.id')
                ->where('profile_id', $profile->id)
                ->orderBy('language.name', 'ASC')
                ->get();
        
        $this->fluency = LangProfi::get();

        //Retrive Country
        $country = User::find($this->uid)->country;

        return view('livewire.show-user')
                ->with(compact('profile', 'country'))
                ->extends('layouts.app')
                ->section('content');
        
    }

    private function resetInputFields(){
        $this->state = [] ;
        $this->lstate = [] ;
    }

    //SUCCESS MESSAGE
    private function hideModal($msg)
    {
        $this->dispatchBrowserEvent('hide-form');

        session()->flash('message', $msg); 
    }

    //Edit User Profile
    public function editUser($user)
    {
       
        $profile = Profile::where('user_id', $user)
                            ->first();

        $this->userProfile = $profile;
        

        $this->state = [
            'fname' => $profile->user->fname,
            'lname' => $profile->user->lname,
            'address' => $profile->address,
            'phone' => $profile->phone,
            'username' => $profile->username,
            'profession' => $profile->profession,
        ];

        $this->updateMode = true;

        
        
    }
    //Edit Description
    public function editDes($pid)
    {
        $profile = Profile::where('id', $pid)
                            ->first();


        $this->pid = $pid;

        $this->state = [
            'description' => $profile->description,
        ];
        $this->updateMode = true;

    }
    //Edit Language
    public function editLang($lid)
    {
        $lang = LanguageModel::where('id', $lid)
                                ->get();       
      
        $this->lstate = $lang;
        $this->lid = $lid;

        $this->updateMode = true;

    }

    //Close modal and clear filed
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();   

    }

    //Update User Profile
    public function updateUser()
    {
        $validatedData = Validator::make($this->state, [
            'fname' => 'required|max:255|string',
            'lname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'profession' => 'required|string|max:50',
            'username' => 'required|unique:user_profile,username,'.
            $this->pid.'|regex:/^(?=[a-zA-Z0-9._]{4,20}$)(?!.*[_.]{2})[^_.].*[^_.]$/',

        ],
        [   //Custom Message
            'fname.required' => 'Please enter First Name!',
            'fname.string' => 'Please enter valid First Name!',
            'lname.required' => 'Please enter Last Name!',
            'lname.string' => 'Please enter valid Last Name!',
            'phone.required' => 'Please enter Phone Number!',
            'phone.max' => 'Phone Number should lesss than 20!',
            'username.unique' => 'Username is Already taken.',
            'username.regex' => 'Please enter valid Username between 4 and 20 Character.',
        ])->validate();

        User::find($this->uid)
            ->update([
            'fname' => $validatedData['fname'],
            'lname' => $validatedData['lname'],

        ]); 
        Profile::where('user_id' , $this->uid)
            ->update([
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'username' => $validatedData['username'],
            'profession' => $validatedData['profession'],

        ]);
        
        $this->hideModal('Profile Updated Successfully.'); 

        $this->resetInputFields();         
        $this->updateMode = false;

       
    }

    //Update Avatar
    public function addAvatar()
    {

        $this->validate([
            'avatar' => 'required|mimes:jpg,png,jpeg|max:1024', // 1MB Max
        ]);

     
        $img_path = $this->avatar->store("images",'public');
        
        Profile::where('user_id' , $this->uid)
            ->update([
            'image_path' => $img_path,
        ]);
        
        $this->hideModal('Avatar Updated Successfully.'); 

        $this->resetInputFields();         

       
    }

    //Update Description
    public function updateDes()
    {
        $validatedData = Validator::make($this->state, [
            'description' => 'required',

        ],
        [   //Custom Message
            'description.required' => 'Please enter Description Name!',       
        ])->validate();

        Profile::where('id' , $this->pid)
            ->update([
            'description' => $validatedData['description'],

        ]);

        $this->hideModal('Overview Updated Successfully.'); 

        $this->resetInputFields();         
            
        $this->updateMode = false;

       
    }

    //Update Language
    public function updateLang()
    {
      
        if ($this->selectedFluency == "" || $this->selectedFluency == "--Select--") {
            $this->selectedFluency = 1;
        }

        LanguageModel::where('id' , $this->lid)
            ->update([
            'proficiency_id' => $this->selectedFluency,

        ]);

        $this->hideModal('Language Updated Successfully.'); 

        $this->resetInputFields();         
            
        $this->updateMode = false;

       
    }

    //Add new Langugae
    public function storeLang()
    {
        $validatedData = Validator::make($this->lstate, [
            'langname' => 'required|string|max:50',

        ],
        [   //Custom Message
            'langname.required' => 'Please enter Language Name!',       
            'langname.string' => 'Please enter Valid Language Name!',       
            'langname.max' => 'Maximum 50 Character allowed!',       
        ])->validate();
        
        if ($this->selectedFluency == "--Select--") {
            $this->selectedFluency = '1';
        }

        LanguageModel::create([
                'name' => $validatedData['langname'],
                'profile_id' => $this->pid,
                'proficiency_id' => $this->selectedFluency,
        ]);
        
        $this->hideModal('Language Added Successfully.'); 

        $this->resetInputFields();         
            
        $this->updateMode = false;
    }

    //Add new Social Link
    public function storeSocial()
    {
      
        
        $validatedData = Validator::make($this->state, [
            'sname' => 'required|string|max:50',
            'slink' => 'required|string|max:60',

        ],
        [   //Custom Message
            'sname.required' => 'Please enter social Media Name!',       
            'sname.string' => 'Please enter Valid Social Media Name!',       
            'sname.max' => 'Maximum 50 Character allowed!',       
            'slink.string' => 'Please enter Valid Social Media Link!',       
            'slink.required' => 'Please enter Social Media Link!',       
            'slink.max' => 'Maximum 60 Character allowed!',       
        ])->validate();

    

        Socials::create([
            'name' => $validatedData['sname'],
            'profile_id' => $this->pid,
            'link' => $validatedData['slink'],

        ]);
        
        
        $this->hideModal('Socials Added Successfully.'); 

        $this->resetInputFields();         
            
        $this->updateMode = false; 
    }
    //Add new Experinces
    public function storeExp()
    {
      
  
        $validatedData = Validator::make($this->state, [
            'comname' => 'required|string|max:50',
            'jtitle' => 'required|string|max:40',
            'sdate' => 'required|date',
            'edate' => 'date',
            'cjob' => 'boolean',

        ],
        [   //Custom Message
            'comname.required' => 'Please enter Company Name!',       
            'comname.string' => 'Please enter Valid Company Name!',       
            'comname.max' => 'Maximum 50 Character allowed!',       
            'jtitle.required' => 'Please enter Job titile!',       
            'jtitle.string' => 'Please enter Valid Job titile !',       
            'jtitle.max' => 'Maximum 40 Character allowed!',
            'sdate.required' => 'Please enter Starting Date',
            'sdate.date' => 'Date format should be DD/MM/YY',
            'edate.date' => 'Date format should be DD/MM/YY',
                 
        ])->validate();

        if(empty($validatedData['edate'])){
            $eDate = null;
        }
        else{
            $eDate = date("Y-m-d", strtotime($validatedData['edate']));
        }

        Experience::create([
            'company_name' => $validatedData['comname'],
            'profile_id' => $this->pid,
            'job_title' => $validatedData['jtitle'],
            'start_date' => date("Y-m-d", strtotime($validatedData['sdate'])),
            'end_date' => $eDate,
            'is_current_job' => $validatedData['cjob'],

        ]);
        
        
        $this->hideModal('Experience Added Successfully.'); 

        $this->resetInputFields();         
            
        $this->updateMode = false; 
    }
    //Add new Educations
    public function storeEdu()
    {
      
        
        
        $validatedData = Validator::make($this->state, [
            'schoolname' => 'required|string|max:100',
            'attndate' => 'required|date',
            'expdate' => 'date',
            'degree' => 'string|max:50',
            'astudy' => 'string|max:50',

        ],
        [   //Custom Message
            'schoolname.required' => 'Please enter School Name!',       
            'schoolname.string' => 'Please enter Valid School Name!',       
            'schoolname.max' => 'Maximum 100 Character allowed!',       
            'attndate.required' => 'Please enter Attend Date',        
            'attndate.date' => 'Date format should be DD/MM/YY',        
            'expdate.date' => 'Date format should be DD/MM/YY',        
            'degree.string' => 'Please enter Valid Degree Name!',       
            'astudy.max' => 'Maximum 50 Character allowed!',
            'astudy.string' => 'Please enter Valid Study Area!',

                 
        ])->validate();

        if(empty($validatedData['expdate'])){
            $expDate = null;
        }
        else{
            $expDate = date("Y-m-d", strtotime($validatedData['expdate']));
        }

        Edu::create([
            'institution' => $validatedData['schoolname'],
            'profile_id' => $this->pid,
            'study_area' => $validatedData['astudy'],
            'degree' => $validatedData['degree'],
            'attend_date' => date("Y-m-d", strtotime($validatedData['attndate'])),
            'complete_date' => $expDate,

        ]);
        
        $this->hideModal('Education Added Successfully.'); 

        $this->resetInputFields();         
            
        $this->updateMode = false; 
    }
    //Add new Skill
    public function storeSkill()
    {
     
        $validatedData = Validator::make($this->state, [
            'skillName' => 'required|string|max:30',
            'slevel' => 'numeric',
        ],
        [   //Custom Message
            'skillName.required' => 'Please enter Skill Name!',       
            'skillName.string' => 'Please enter Valid Skill Name!',       
            'skillName.max' => 'Maximum 30 Character allowed!',               
            'slevel.numeric' => 'Skill level must be Numeric',        

                 
        ])->validate();
        
 
        if(empty($validatedData['slevel'])){
            $slevel = 10;
        }
        else{
            $slevel = $validatedData['slevel'];
        }


        skills::create([
            'name' => $validatedData['skillName'],
            'profile_id' => $this->pid,
            'level' => $slevel,

        ]);
        

        
        $this->hideModal('Skill Added Successfully.'); 

        $this->resetInputFields();         
            
        $this->updateMode = false; 
    }

    //Delete Languages
    public function deleteLang($id)
    {
        if($id){
            LanguageModel::where('id',$id)->delete();

            $this->hideModal('Language Deleted Successfully.');
        }
    }
    //Delete Socials
    public function deleteSocial($id)
    {
        if($id){
            Socials::where('id',$id)->delete();

            $this->hideModal('Socials Deleted Successfully.');
        }
    }
    //Delete Experince
    public function deleteExp($id)
    {
        
        
        if($id){
            Experience::where('id',$id)->delete();

            $this->hideModal('Experince Deleted Successfully.');
        } 
    }
    //Delete Skills
    public function deleteSkill($id)
    {
        
        if($id){
            skills::where('id',$id)->delete();

            $this->hideModal('Skill Deleted Successfully.');
        } 
    }
    //Delete Education
    public function deleteEdu($id)
    {
                
        if($id){
            Edu::where('id',$id)->delete();
            $this->hideModal('Education Deleted Successfully.');
        } 
    }



}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\newsSubs;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class DashAdmin extends Component
{
    public $state =[];
    public $userID ;


    public function render()
    {
         //Return All users except Current
         $users = User::where('id', '!=', auth()->id())->orderByDesc('created_at')->paginate(15);
         //All News Subscribers
         $newsLetter = newsSubs::get();
         //All Contact Messages
         $conMessage = Contact::orderByDesc('created_at')->get();

         $totalUsers = count(User::get());
         $visitor = rand(1,5);

        return view('livewire.dash-admin')->with(compact('users', 'visitor', 'totalUsers', 'newsLetter', 'conMessage'));
    }

      //Edit User Profile
      public function editUser($id)
      {
          
        
           $user = User::where('id', $id)
                                ->first();
            
            $this->state = [
                'fname' => $user->fname,
                'lname' => $user->lname,
                'email' => $user->email,
            ];
            $this->userID= $user->id;
            
      }
      //Modal close
      private function hideModal($msg)
      {
          $this->dispatchBrowserEvent('hide-form');
  
          session()->flash('message', $msg); 
      }
  

    //Delete 
    public function deleteUser($id)
    {
        if($id){
            User::where('id',$id)->delete();

            //$this->hideModal('Language Deleted Successfully.');
        }
    }
    private function resetInputFields(){
        $this->state = [] ;
        $this->userID = "" ;
    }
    //Close modal and clear filed
    public function cancel()
    {
           
            $this->resetInputFields();   
    
    }
    //Update users
    public function updateUser()
    {
        $validatedData = Validator::make($this->state, [
            'fname' => 'required|max:255|regex:/^[A-Za-z_]+$/',
            'lname' => 'required|string|max:255|regex:/^[A-Za-z_]+$/',
            'email' => 'required|string|email|unique:users,email,'.$this->userID.'|max:255',
        ],
        [   //Custom Message
            'fname.required' => 'Please enter First Name!',
            'fname.regex' => 'Please enter valid First Name!',
            'lname.required' => 'Please enter Last Name!',
            'lname.regex' => 'Please enter valid Last Name!',
            'email.required' => 'Please enter Email address!',
            'email.max' => 'Email should lesss than 255!',
            'email.unique' => 'Email is Already in USE.',

        ])->validate();

        User::find($this->userID)
            ->update([
            'fname' => $validatedData['fname'],
            'lname' => $validatedData['lname'],
            'email' => $validatedData['email'],

        ]); 
        
        $this->hideModal('User Updated Successfully.'); 

        $this->resetInputFields(); 

    }
    
    //Add user
    public function storeUser()
    {
       

         $validatedData = Validator::make($this->state, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'role' => 'required|in:admin,candidate,employer', //Accept only 3 Role
        ],
        [   //Custom Message
            'fname.required' => 'Please enter First Name!',
            'fname.string' => 'Please enter valid First Name!',
            'lname.required' => 'Please enter Last Name!',
            'lname.string' => 'Please enter valid Last Name!',
            'email.required' => 'Please enter Email address!',
            'email.max' => 'Email should lesss than 255!',
            'email.unique' => 'Email is Already in USE.',
            'role.required' => 'Select user role!',
                 
        ])->validate();
        
        $user = User::create([
            'fname' => $validatedData['fname'],
            'lname' => $validatedData['lname'],
            'email' => $validatedData['email'],
            'password' => Hash::make('password'),
        ]);        
        //Assign User Roles
        $user->attachRole($validatedData['role']);
        

        
        $this->hideModal('User added Successfully. Default PASSWORD is password'); 

        $this->resetInputFields();         
            
          

       
    }
}

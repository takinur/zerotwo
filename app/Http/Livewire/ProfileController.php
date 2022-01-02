<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use App\Models\User;
use App\Models\Employer;
use App\Models\Invite;

class ProfileController extends Component
{
    public $cand;
    public $employer;
    public $invStatus;

    public function render()
    {
        if (Auth::check() && Auth::user()->hasRole('candidate')) {
           
            return redirect('/profile');
         }
         elseif(Auth::check() && Auth::user()->hasRole('employer') || Auth::user()->hasRole('admin')){

            
             //Retrive with all associated Table
             $data = Profile::with('skills') 
             ->with('Edu')
             ->with('Experience')
             ->with('Socials')
             ->with('Languages')
             ->where('username', $this->cand)
             ->first();           
 
             
 
             if($data){
                 //Retrive Country
                 $country = User::find($data->user_id)->country;
 
                 //Retrive Language
                 $langs = DB::table('language')
                        ->select('language.id','language.name','langproficiency.pro')
                        ->join('langproficiency','language.proficiency_id','=','langproficiency.id')
                        ->where('profile_id', $data->id)
                        ->orderBy('language.name', 'ASC')
                        ->get();


                //Current Employer
                $this->employer = Employer::where('user_id', Auth::user()->id)->first();
                
                //Invite Status
                $inv = Invite::where([
                    ['employer_id', $this->employer->id],
                    ['candidate_id', $data->id],

                ])->first();  
                    
                if ($inv) {
                     $this->invStatus = $inv->status->id;
                    }
                 
 
                 //View Profile
                 $title = 'Profile of ' . $data->username . ' -Zero Two';
                 return view('livewire.profile-controller')
                        ->with(compact('data', 'langs', 'country', 'title'))
                        ->extends('layouts.app')
                        ->section('content');
             }
             else {
                 abort(403, 'User not Found!');
             }
         
         
             
            
         }
         else{
 
             return view('auth.login');
         }

    }

    public function mount($cand)
    {
        $this->cand = $cand;
    }

    //Invitation
    public function invite($candidate){        

        Invite::create([
            'employer_id' => $this->employer->id,
            'candidate_id' => $candidate,
            'status_id' => 1,
        ]);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public function index()
    { 
        if(Auth::user()->hasRole('employer')){
            $title = 'Dashboard -Employer';
            return view('dashboard.employerDash')->with('title', $title); 
        }
        elseif(Auth::user()->hasRole('candidate')){
            $title = 'Dashboard -Candidate';
            return view('dashboard.candidateDash')->with('title', $title);
        }
        elseif(Auth::user()->hasRole('admin')){
            $title = 'Dashboard -Administrator';
            return view('dashboard.adminDash')->with('title', $title);
        }  
        else{
            return redirect('/home');
        }                           
    }
    
    /*
    public function myprofile()
    {
        $title ='Profile';
        return view('profile.candidate')->with('title', $title);
    } 
    

    public function show($user_id)
    {
        $user = User::find(1);
        $user_profile = Profile::info($user_id)->first();
        return view('profile.candidate', compact('profile', 'user'));
    }

    public function profile()
    {
        return $this->hasOne('Profile');
    } */
}

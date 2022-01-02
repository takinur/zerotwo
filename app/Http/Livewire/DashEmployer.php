<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Profile;
use App\Models\User;
use App\Models\Invite;
use App\Models\Employer;
use App\Models\SubType;


class DashEmployer extends Component
{
    public function render()
    {

             
            //Return 
            $employer = Employer::where('user_id', auth()->id())->first();
            
        
            $subType = DB::table('employer')
                        ->select('employer.id','subscription.type', 'subscription.price')
                        ->join('subscription','employer.subscription_id','=','subscription.id')
                        ->where('employer.id', $employer->id)
                        ->first();
            // dd($subType);
            //Invites
            $invites = Invite::with('candidate')->where('employer_id', $employer->id)->get();  
                            

            $totalInv = count($invites);
            $visitor = rand(20,90);
            $profileComplete = rand(30,100);
            
            return view('livewire.dash-employer')->with(compact('subType', 'invites', 'visitor', 'totalInv', 'profileComplete'));

     
    }
}

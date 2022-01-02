<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Profile;
use App\Models\Invite;
use App\Models\Employer;

class DashCandidate extends Component
{
    public $canid;

    public function render()
    {
        //Return 
        $user = Profile::where('user_id', auth()->id())->first();
        
        //Invites
        $invites = Invite::with('employer')->where('candidate_id', $user->id)->get();  
        //dd($invites);

        $this->canid = $user->id;

        $totalInv = count($invites);
        $visitor = rand(20,90);
        $profileComplete = rand(30,100);
        
        return view('livewire.dash-candidate')->with(compact('invites', 'visitor', 'totalInv', 'profileComplete'));
    }

    public function accept($emid)
    {
        Invite::where([
            ['employer_id', $emid],
            ['candidate_id', $this->canid],
        ])
        ->update(['status_id' => 2]); //Set Status
    }
    public function reject($emid)
    {
        Invite::where([
            ['employer_id', $emid],
            ['candidate_id', $this->canid],
        ])
        ->update(['status_id' => 3]); //Set Status
    }
}

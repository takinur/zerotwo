<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\newsSubs;
use App\Models\Contact;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Wellcome to Zero Two";
        return view('index')->with('title', $title);
    }

    public function findTalent()
    {
        $title = "Find Talents -Zero Two";
        return view('find-talent')->with('title', $title);
    }
    public function findWork()
    {
        $title = "Start working Soon -Zero Two";
        return view('find-work')->with('title', $title);
    }
    public function about()
    {
        $title = "About Zero Two";
        return view('about')->with('title', $title);
    }
    public function pricing()
    {
        $title = "Subscription Plans -Zero Two";
        return view('pricing')->with('title', $title);
    }
    public function contact()
    {
        $title = "Contact US -Zero Two";
        return view('contact')->with('title', $title);
    }
    public function privacy()
    {
        $title = "Privacy Policy -Zero Two";
        return view('privacy')->with('title', $title);
    }
    public function store(Request $request)
    {
        $request->validate([
            'subemail' => 'required|email',                  
        ]);

        newsSubs::create([
            'email' => $request->subemail,
        ]);

        
        return redirect()->back();
    }
    public function contactStore(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:100',                  
            'email' => 'required|email',                  
            'subject' => 'required|string|max:100',                  
            'message' => 'required|string',                  
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,                  
            'message' => $request->message, 
        ]);

        session()->flash('message', 'Query Recevied Thanks!');
        return redirect()->back();
    }
    

}

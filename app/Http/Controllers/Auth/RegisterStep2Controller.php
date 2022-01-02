<?php
namespace App\Http\Controllers\Auth;

use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Support\Str;


class RegisterStep2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showForm()
    {
        //Already Done --Redirect
        $stepDone = User::where('id', '=', Auth::User()->id)->first();
     
        if ($stepDone->country_id != Null) {
            
            return redirect('dashboard');

        } else {
            
            $countries = Country::all();
             return view('auth.register_step2', compact('countries'));
        }
        
        
        
    }
    
    public function postForm(Request $request)
    {
  

        if (Auth::User()->hasRole('employer')) {


            $request->validate([
                'cname' => 'required|string|max:100',
                'cwebsite' => 'required|url',
                'country_id' => 'required',
                'subs' => 'required|in:1,2,3',                       
            ],
            [//MESSAGE
                //Custom Message
                'cname.required' => 'Please enter Company Name!',
                'cname.string' => 'Please enter a valid Company Name!',
                'cname.max' => 'Company Name Must be less than 100 Character!',                
                'country_id.required' => 'Please Select Country!',
                'cwebsite.required' => 'Please Enter Company Website',
                'subs.required' => 'Please Select Subscription Type!',
                'subs.in' => 'Please Select Subscription Type!',
            ]);            
                    
            //Update Country in USER
            auth()->user()->update($request->only(['country_id']));
            
            //ADD new Employer Profile
            $profile = Employer::create([
                    'company_name' => $request->cname,
                    'company_website' => $request->cwebsite,          
                    'subscription_id' => $request->subs,
                    'user_id' => Auth::User()->id,
            ]);
    
            $profile->save();
    
            return redirect()->route('dashboard');
        } 
        elseif(Auth::User()->hasRole('candidate')) {
            $request->validate([
                'uname' => 'required|string|unique:user_profile,username|regex:/^(?=[a-zA-Z0-9._]{4,20}$)(?!.*[_.]{2})[^_.].*[^_.]$/',
                'country_id' => 'required',
                'profession' => 'required|max:30|string',
                'address' => 'required|max:255|string',
                'phone' => 'required|string|max:20',           
            ],
            [//MESSAGE
                //Custom Message
                'uname.required' => 'Please enter User Name!',
                'uname.string' => 'Please enter a valid User Name!',
                'uname.regex' => 'Please enter valid Username between 4 and 20 Character.',
                'country_id.required' => 'Please Select Country!',
                'phone.required' => 'Please enter Phone Number!',
                'phone.max' => 'Phone Number should lesss than 15 Character!',
            ]);
            
    
            //Update Country in USER
            auth()->user()->update($request->only(['country_id']));
    
            //ADD new USER Profile
            $profile = Profile::create([
                    'username' => Str::lower($request->uname),
                    'address' => $request->address,
                    'phone' => $request->phone,            
                    'profession' => $request->profession,
                    'user_id' => Auth::User()->id,
            ]);
    
            $profile->save();
    
            return redirect()->route('dashboard');
        }
        else{
            return redirect('home');
        }
        

    }
}

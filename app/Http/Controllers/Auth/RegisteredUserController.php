<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'fname' => 'required|max:255|string',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'role' => 'required|in:candidate,employer', //Accept only 2 Role
            'password' => ['required', Rules\Password::defaults()],
        ],
        [//MESSAGE
            //Custom Message
            'fname.required' => 'Please enter First Name!',
            'fname.string' => 'Please enter a valid First Name!',
            'lname.required' => 'Please enter Last Name!',
            'lname.regex' => 'Please enter valid Last Name!',
            'role.in' => 'Please Select Account Type!',
            'role.required' => 'Please Select Account Type!',
        ]);

        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        //Assign User Roles
        $user->attachRole($request->role);

        
        event(new Registered($user));

        Auth::login($user);

        return redirect('/register-step2');
    }
}

@extends('layouts.app')
   

@section('content')

    <div class="container d-flex justify-content-center text-center">
  
        <div class="card shadow-sm p-3 mb-5 bg-white rounded mt-5" >
            <div class="card-body">
              <h2 class="card-title">Login</h2>
                <form  id="regForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-row">
                        <!-- Email Address -->
                        <div class="form-group col">
                            <input type="text" placeholder="Email" class="form-control form-control-lg @error('email') is-invalid @enderror"  name="email" :value="__('email')" >            
                            @error('email') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                        </div>                    
                    </div>
                    <div class="form-row">
                        <!-- Password -->
                        <div class="form-group col">
                            <input type="password" placeholder="Password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" >            
                            @error('password') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                        </div>                     
                    </div>
                    <!-- Remember Me -->
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-light">
                        <input type="checkbox"  name="remember" id="remember_me" > Stay signed in
                        </label>
                    </div>
        
                    <div class="d-flex justify-content-end mt-4">
                        <a class="text-success mt-2 mr-3" href="{{ route('register') }}">
                                {{ __('Dont have account?') }}
                            </a>    
                        <button class="btn btn-success btn-lg rounded-pill">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>
            </div>
          </div>
       
    </div>


@endsection

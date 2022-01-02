
@extends('layouts.app')
   

@section('content')
<div class="container ">
    <div class="row d-flex justify-content-center align-items-center mt-5">
        <div class="col-md-6 mt-5">
        
            <form method="POST" class="shadow-sm p-3 mb-5 bg-white rounded w-20em"  action="{{ route('register') }}">
             @csrf           
                <h1 class="text-center">Register</h1>
                <div class="all-steps" id="all-steps"> <span class="step active"></span> <span class="step"> </div>
                <div class="row">
                    <div class="form-group col-6">
                      <input type="text"
                        class="form-control @error('fname') is-invalid @enderror" name="fname"   placeholder="First Name" :value="__('fname')">           
                        <div class="invalid-feedback">
                            @error('fname') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="form-group col-6">
                      <input type="text"
                        class="form-control @error('lname') is-invalid @enderror" name="lname"   placeholder="Last Name"  :value="__('lname')">           
                        <div class="invalid-feedback">
                            @error('lname') {{ $message }} @enderror
                        </div>
                    </div>                
                </div>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <input type="text"
                          class="form-control @error('email') is-invalid @enderror" name="email"   placeholder="E-mail"  :value="__('email')">           
                          <div class="invalid-feedback">
                            @error('email') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="password"
                          class="form-control @error('password') is-invalid @enderror" name="password"   placeholder="Password"  autocomplete="new-password" :value="__('password')">           
                          <div class="invalid-feedback">
                            @error('password') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="mx-auto justify-content-center align-items-center text-center mb-5"> 
                      <h4 class="text-center font-weight-bold"> I want to: </h4>
                      <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary">
                          <input type="radio" name="role" value="employer" id="option1"> Find Candidate
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="role" value="candidate" id="option2" class=""> &nbsp; &nbsp;&nbsp;Find Job &nbsp;&nbsp;&nbsp;&nbsp;
                        </label>                      
                      </div>
                      @error('role')
                          <div class="text-danger"> {{ $message }} </div>
                      @enderror
                    </div>                                     
                </div>             
                  <button type="submit" name="" id="" class="btn btn-success btn-lg btn-block rounded-pill"> Create account</button>           
            </form>
        </div>
    </div>
</div>


@endsection




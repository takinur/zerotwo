@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6 mt-5">
        
            <form method="POST" class="shadow-sm p-3 mb-5 bg-white rounded w-20em"  action="{{ route('register.step2') }}">
             @csrf           
                <h1 class="text-center font-weight-bold">{{ __('Complete your account setup') }}</h1>
                <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step active"> </div>
                @role('employer') <!-- Employer -->
                        <div class="row">
                                <div class="form-group input-group-lg col-6">
                                <input type="text"
                                    class="form-control  @error('cname') is-invalid @enderror" name="cname"   placeholder="Company Name" :value="__('cname')">           
                                    <div class="invalid-feedback">
                                        @error('cname') {{ $message }} @enderror
                                    </div>
                                </div>
                                <div class="form-group  input-group-lg col-6">
                                <input type="text"
                                    class="form-control @error('cwebsite') is-invalid @enderror" name="cwebsite"   placeholder="Company Website"  :value="__('cwebsite')">           
                                    <div class="invalid-feedback">
                                        @error('cwebsite') {{ $message }} @enderror
                                    </div>
                                </div>                
                            </div>
                            <div class="row">
                                <div class="input-group col-lg-12 mb-3">
                                    <div class="input-group-prepend">
                                      <label class="input-group-text" for="country">Country</label>
                                    </div>
                                    <select class="custom-select @error('country_id') is-invalid @enderror" name="country_id" id="country">
                                        <option value="">-- {{ __('choose your country') }} --</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                            </div>
                            <div class="row">
                                <div class="mx-auto justify-content-center align-items-center text-center mb-5"> 
                                    <h3 class="text-center font-weight-bold text-uppercase text-info"> Subscription Plan </h3>
                                    <div class="btn-group btn-group-toggle btn-group-lg" data-toggle="buttons">
                                      <label class="btn btn-secondary">
                                        <input type="radio" name="subs" value="1" id="subscription">&nbsp; &nbsp;&nbsp;Starter&nbsp; &nbsp;&nbsp;
                                      </label>
                                      <label class="btn btn-secondary">
                                        <input type="radio" name="subs" value="2" id="subscription2" class=""> &nbsp; &nbsp;&nbsp;Standard&nbsp;&nbsp;&nbsp;&nbsp;
                                      </label>                      
                                      <label class="btn btn-secondary">
                                        <input type="radio" name="subs" value="3" id="subscription3" class=""> &nbsp; &nbsp;&nbsp;Premium &nbsp;&nbsp;&nbsp;&nbsp;
                                      </label>                      
                                    </div>
                                    @error('subs')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                  </div>                
                            </div>
                @endrole                  
                            
                        
                @role('candidate')
                <div class="row">
                    <div class="form-group col-6">
                    <input type="text"
                        class="form-control @error('uname') is-invalid @enderror" name="uname"   placeholder="User Name" :value="__('uname')">           
                        <div class="invalid-feedback">
                            @error('uname') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="form-group col-6">
                    <input type="text"
                        class="form-control @error('phone') is-invalid @enderror" name="phone"   placeholder="Phone"  :value="__('phone')">           
                        <div class="invalid-feedback">
                            @error('phone') {{ $message }} @enderror
                        </div>
                    </div>                
                </div>
                <div class="row">
                    <div class="input-group col-lg-12 mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="country">Country</label>
                        </div>
                        <select class="custom-select @error('country_id') is-invalid @enderror" name="country_id" id="country">
                            <option value="">-- {{ __('choose your country') }} --</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('country_id')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12 ">
                    <input type="text"
                        class="form-control @error('profession') is-invalid @enderror" name="profession"   placeholder="Profession" :value="__('profession')">           
                        <div class="invalid-feedback">
                            @error('profession') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="form-group input-group-lg col-lg-12">
                    <input type="text"
                        class="form-control @error('address') is-invalid @enderror" name="address"   placeholder="Address"  :value="__('address')">           
                        <div class="invalid-feedback">
                            @error('phone') {{ $message }} @enderror
                        </div>
                    </div>                
                </div>
                @endrole                                                              
                  <button type="submit" name="" id="" class="btn btn-success btn-lg btn-block rounded-pill"> Complete Setup</button>           
            </form>
        </div>
    </div>
</div>

@endsection
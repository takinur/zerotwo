@extends('layouts.app')
   

@section('content')

<div class="wrapper" >
  <!-- Preloader -->
  <div id="preloader"></div>
    <div class="container text-success">
      <h1 class="display-1" style="font-size: 150px; font-weight:bolder;">
        FIND YOUR
        DREAM
        CARRER
        <a href="{{ route('register') }}" class="btn btn-success btn-lg rounded-pill ml-5">Become a member</a>
      </h1>
      <hr />
      <section id="about" class="about" >
        <div class="container " data-aos="fade-up">
  
          <div class="section-title text-center">
                <h1 class="display-4 text-dark font-weight-bold"> Stop waiting, Start Improving</h1>
          </div>
          <div class="row text-center text-dark justify-content-center mt-5 mb-2" style="height: 20rem">
            <div class="col-md-4">              
              <h2 class="font-weight-bold mt-3"> Momentum</h2>
              <p class="h5 white-space" >
                Start transitioning your career by deciding to move your axis of freedom: WHO, WHAT, WHERE.
              </p>
            </div>
            <div class="col-md-4">              
              <h2 class="font-weight-bold mt-3"> Ambition</h2>
              <p class="h5 white-space" >  
                The importance of getting ahead is getting started in your career, if you don't know the goal, you won't have an outcome.
              </p>
            </div>
            <div class="col-md-4">
              <h2 class="font-weight-bold mt-3"> Improve </h2>
              <p class="h5 white-space" >  
                To have higher success use two axis of freedom or use networking to move all three.
              </p>
            </div>
          </div>       
        </div>
      </section>
    </div>
    <section id="about" class="about" style="background-color: #586cbb; height:40em" >
      <div class="container " data-aos="fade-up">
        <div class="section-title text-center">
              <h1 class="display-4 font-weight-bold" style="color: #f7f76c">Here are a few companies that Job Platform has consistently helped clients land careers in:</h1>
        </div>
        <div class="d-flex justify-content-center"> 
          <img src="{{ asset('storage/images/google_logo.png') }}" class="rounded m-4" width="128" alt="Google Logo">
          <img src="{{ asset('storage/images/logo_amazon.png') }}" class="rounded m-4 mt-5" width="128" alt="Amazon Logo">
          <img src="{{ asset('storage/images/accenture.png') }}" class="rounded m-4" width="128" alt="Accenture Logo">
          <img src="{{ asset('storage/images/at&t.png') }}" class="rounded m-4" width="128" alt="ATNT Logo">
          <img src="{{ asset('storage/images/cisco.png') }}" class="rounded m-4" width="128" alt="Cisco Logo">
          <img src="{{ asset('storage/images/Ebay.png') }}" class="rounded m-4" width="128" alt="Ebay Logo">
          <img src="{{ asset('storage/images/wallmart.png') }}" class="rounded m-4" width="128" alt="wallmart Logo">
        </div>
      </div>
    </section>
    <section id="about" class="about" style="background-color: #fff; height:40em;" >
      <div class="container " data-aos="fade-up">
        <div class="section-title text-center">
              <h1 class="display-2 font-weight-bold">Looking to grow?</h1>
        </div>
        <h1 class="display-4">
          Job-Platform 
          is here to 
          help you 
          achieve 
          your goals. <br> 
          <a href="{{ route('register') }}" class="btn btn-outline-success btn-lg rounded-pill "> GET STARTED NOW</a>
        </h1>
      </div>
    </section>





@endsection
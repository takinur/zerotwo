@extends('layouts.app')
   

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center"  style="background:url('{{ asset('storage/images/can_bg.jpg') }}') top center;">
    <div class="container position-relative">
      <h1 class="display-1">Find Candidates</h1>
      <h4 class="mt-3 text-white">We know what it takes to find the right fit. That’s why we designed tools to make the hiring process as easy as possible. We can help you find and engage with candidates to grow your expanding team – fast</h4>
      <a href="/candidates" class="btn-sign-up-in" id="t-button">GET STARTED NOW</a>
    </div>
  </section><!-- End Hero -->
 <!-- Preloader -->
 <div id="preloader"></div>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
          <h1 class="display-3 text-dark font-weight-bold"> 73% of employers say they need more than job postings to do their jobs well. </h1>
        </div>

      </div>
    </section>

    <section id="about" class="about" style="background-color: #7386D5">
      <div class="container " data-aos="fade-up">

        <div class="section-title text-center">
              <h1 class="display-3 text-white font-weight-bold"> Select the right plan for you: subscription plans now come with a free trial</h1>
              <a href="/pricing" class="btn btn-success btn-lg rounded-pill" id="t-button">Get Started for Free</a>
        </div>
        

      </div>
    </section>

   <section id="about" class="about" style="background-color: #e8e8e9">
    <div class="container " data-aos="fade-up">
      <div class="section-title text-center text-dark font-weight-bold display-3 ">
        Save time. Stay organized.<br>
        And find the right fit.
      </div>      
      
      <div class="row text-center text-dark justify-content-center mt-5 mb-2" style="height: 20rem">
          <div class="col-md-4">
            <span class="fas fa-user-friends fa-4x"></span>
            <h4 class="font-weight-bold mt-3"> Reach the right<br> Candidates</h4>
            <p class="h5 white-space" >
               We'll automatically send your job<br> posting to our extensive partnet <br>networks and send out daily alerts to<br> candidates.
            </p>
          </div>
          <div class="col-md-4">
            <span class="fas fa-eye fa-4x"></span>
            <h4 class="font-weight-bold mt-3"> Find your perfect <br> match</h4>
            <p class="h5 white-space" >  
              No time to sift through resumes? Our fit indicator will help you find candidates that best match your criteria. You can also take things into your own hands and find quality candidates in minutes with our search filters.
            </p>
          </div>
          <div class="col-md-4">
            <span class="fas fa-medal fa-4x"></span>
            <h4 class="font-weight-bold mt-3"> Showoff a little</h4>
            <p class="h5 white-space mt-4" >              
							Capitalize on what makes your brand unique: Include valuable differentiators, benefits, and perks that your company offers to employees to entice more applicants.												
            </p>              												
          </div>  
      </div>
      <div class="row text-center text-dark justify-content-center mt-5 mb-2" style="height: 20rem">
          <div class="col-md-4">
            <span class="fas fa-portrait fa-4x"></span>
            <h4 class="font-weight-bold mt-3"> Automate Candidate <br> engagement</h4>
            <p class="h5 white-space" >              
							Find candidates and get connected with them quickly and effortlessly with our automated text and email tools.												
            </p>
          </div>
          <div class="col-md-4">
            <span class="fas fa-sync-alt fa-4x"></span>
            <h4 class="font-weight-bold mt-3"> Post, Pause or cancel<br> as needed</h4>
            <p class="h5 white-space" >                
							We know hiring needs can change from week to week. Our solutions give you the flexibility to adjust as your needs change. 												
            </p>
          </div>
          <div class="col-md-4">
            <span class="fas fa-history fa-4x"></span>
            <h4 class="font-weight-bold mt-3"> Save time</h4>
            <p class="h5 white-space mt-4" >              
							
              We've streamlined the job posting process to improve your workflow. Plus, you can choose to automatically send follow-up messages to candidates to keep the ball rolling. 																								
            </p>              												
          </div>  
      </div>
    </div>
  </section>





@endsection

  @extends('layouts.app')
   

  @section('content')
  
 
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center"  style="background:url('{{ asset('storage/images/home_bg.jpg') }}') top center;">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="80">
      <h1 class="title text-success">Join the world's<br> work marketplace</h1>
      <h2>Find great talent. Build your business. <br> Take your career to the next level.</h2>
      @auth
        @role('candidate')
          <a href="{{ route('findwork') }}" class="btn-sign-up-in" id="t-button">Find Work</a>
        @endrole
        @role('employer')
          <a href="{{ route('candidates') }}" class="btn-sign-up-in" id="t-button">Find Talent</a>
        @endrole
      @endauth
      @guest
      <a href="{{ route('findtalent') }}" class="btn-sign-up-in" id="t-button">Find Talent</a>
      <a href="{{ route('findwork') }}" class="btn-sign-up-in" >Find Work</a>
        
      @endguest
   
    </div>
  </section><!-- End Hero -->

   <!-- PRELOADER>> <div id="preloader"></div> -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="background-color: #e4ae3b">
      <div class="container" data-aos="fade-up">

        <div class="section-title ">
          <h2 class="text-dark">Hiring is easy!</h2>
          <p>See the person behind the resume</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img class="ml-5" src="{{ asset('storage/images/resume.png') }}" class="img-fluid" alt="Resume BG">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-top: 17em">
            <h3>Get a broad view of each candidate with data-driven profiles. We’ll also show you things you won’t find on resumes, like soft skills, personal interests, and more.</h3>
            
            <p class="font-italic mt-4">
              We’re here to make it quick and easy to do a resume search and get connected with qualified candidates who have been automatically matched, ranked and scored based on your requirements.
            </p>
            <ul class="mt-4">
              <li ><i class="icofont-check-circled"></i> Find and engage with the top-quality talent you need, when you need it.</li>
              <li class="mt-3"><i class="icofont-check-circled"></i> Find candidates matching your requirements with precise filters to widen or narrow your search.</li>
              <li class="mt-3"><i class="icofont-check-circled"></i> Receive notifications of new candidates who match your saved search criteria, for immediate access to the right talent.</li>
            </ul>
            <a href="{{ route('findtalent') }}" class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">265078</span>
            <p>Candidates</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">564</span>
            <p>Skills</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">98383</span>
            <p>Reviews</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2000</span>
            <p>Job Placements</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Zero Two?</h3>
              <p>
                On Zero Two, companies apply to you. We believe developers and other tech professionals should choose a job they love: whether that’s based on a cutting-edge tech stack, an inspiring team or just good old-fashioned salary. Today, Zero TWo is Europe’s leading developer-focused job platform, serving United Kingdom, Germany and the Netherlands.
              </p>
              <div class="text-center">
                <a href="{{ route('about') }}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-rocket"></i>
                    <h4> Highest Success Rate</h4>
                    <p>Every individual has gotten a position in their field of choice.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Excessive Job Placements</h4>
                    <p>Successful job placements that has helped our clients advance their career.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-user-check"></i>
                    <h4>Hundred plus Active clients/Mo</h4>
                    <p>We work constantly with professionals.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="bx bxl-google" style="color: #ffbb2c;"></i>
              <h3><a href="#">GOOGLE</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bx bxl-microsoft" style="color: #5578ff;"></i>
              <h3><a href="#">MICROSOFT</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bx bxl-facebook" style="color: #e80368;"></i>
              <h3><a href="#">FACEBOOK</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bx bxl-discord" style="color: #e361ff;"></i>
              <h3><a href="#">DISCORD</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="bx bxl-apple" style="color: #47aeff;"></i>
              <h3><a href="#">APPLE</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="bx bxl-medium" style="color: #080401;"></i>
              <h3><a href="#">MEDIUM</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="bx bxl-digg" style="color: #11dbcf;"></i>
              <h3><a href="#">DIGG</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="bx bxl-airbnb" style="color: #4233ff;"></i>
              <h3><a href="#">AIRBNB</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="#">GODADDY</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="bx bxl-twitch" style="color: #b20969;"></i>
              <h3><a href="#">TWITCH</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="fas fa-charging-station" style="color: #ff5828;"></i>
              <h3><a href="#">TESLA</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="bx bxl-adobe" style="color: #29cc61;"></i>
              <h3><a href="#">ADOBE</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= REVIEWS Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reviews</h2>
          <p>What they’re saying</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">         
              <img src="{{ asset('storage/images/Clara.jpg') }}" class="img-fluid" alt="" style="width: 256px">     
              <div class="member-content mt-2">                
                <p>
                  “The discovered talent we work with are more productive than we ever thought possible.”
                </p>
                <h3>Clara Bedford</h3>
                <span class="h5">Director of Strategic Marketing, CompuVision</span>
                <div class="socials">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">         
              <img src="{{ asset('storage/images/Edward_snowden.jpg') }}" class="img-fluid" alt="" style="width: 256px">     
              <div class="member-content mt-2">                
                <p>
                  “My relationship with Clara & CompuVision keeps on growing. The projects get larger and more technical every year.”
                </p>
                <h3>Edward Snowden</h3>
                <span class="h5">Cyber Security Specalist</span>
                <div class="socials">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">         
              <img src="{{ asset('storage/images/Elon_Musk_Royal_Society.jpg') }}" class="img-fluid"  style="width: 256px" alt="">     
              <div class="member-content mt-2">                
                <p>
                  “Finding talents for my company is much easier than before.”
                </p>                
                <h3>Elon Musk</h3>
                <span class="h5">Cheif Executive Officer, TESLA</span>
                <div class="socials">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>          
        </div>

      </div>
    </section><!-- End Reviews Section -->

  </main><!-- End #main -->


  @endsection
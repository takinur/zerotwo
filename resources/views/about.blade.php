@extends('layouts.app')
   

@section('content')

<div class="wrapper">
 <!-- Preloader -->
 <div id="preloader"></div>
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h1 class="text-uppercase" style="font-size: 120px; font-weight:bolder;">
          We help employers and candidates find the right fit
        </h1>
      </div>
    </div>
  </section><!-- End About Section -->

  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
        <img src="{{ asset('storage/images/about_team.jpeg') }}" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
        <h1 class="display-3 font-weight-bold justify-content-center text-center">Who we are</h1>
        <p class="mt-3 h4">
          Zero Two is a global leader in connecting people and jobs. Every day, Zero Two aims to make every workplace happier and more productive by transforming the way employers and candidates find the right fit. For 25 years, Zero Two has worked to transform the recruiting industry. Today, the company leverages advanced technology using intelligent digital, social and mobile solutions, including the flagship website Zero Two.com®, Zero Two’s innovative app, and a vast array of products and services.
        </p>      
      </div>

    </div>

  </div>


  <!-- ======= Review Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Reviews</h2>
        <p>Learn What they say about us!</p>
      </div>

      <div class="owl-carousel testimonials-carousel">

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Zero Two elimanited the struggle of finding skilled TECH Guy for my company.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <h3>Saul Goodman</h3>
          <h4>Ceo &amp; Founder</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Been searching for quality work-place soo long and ended up here!
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <h3>Sara Wilsson</h3>
          <h4>Designer</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Zero Two offered best project match for me and the projects get larger and more technical every year.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <h3>Jena Karlis</h3>
          <h4>Full-Stack Developer</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Finding talents for my company is much easier than before.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <h3>Matt Brandon</h3>
          <h4>Executive</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Excellent platform that helped me to get my dream job as a cyber secuirty expert.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <h3>John Larson</h3>
          <h4>Cyber security Specalist</h4>
        </div>

      </div>

    </div>
  </section><!-- End Testimonials Section -->
  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>F.A.Q</h2>
        <h1 class="font-weight-bold ">Frequently Asked Questions</h1>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1"> How does the free trail work? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
              <p>
                Select a plan and get a free 4-day free trial in any subscription plan. Post jobs for free during your trial period. When your free trial ends, we’ll charge the payment method you provided during signup. You can pause, cancel, or change your subscription at any time by signing into your account.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">How to succeed? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-parent=".faq-list">
              <p>
                We Succeed When You Succeed!
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">What is the cancellation policy? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-parent=".faq-list">
              <p>
                You’re free to cancel your Monthly Value Plan any time via the link in your Customer Account Preferences. You will still be able to use your Plan if there are remaining days in your current 30-day cycle.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">How i find proper candidate? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-parent=".faq-list">
              <p>
                You search candidates based on skill or profession. Otherwise, if you need any help feel free to contact us.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">I have more questions. Who do I contact? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-parent=".faq-list">
              <p>
                You can give us a call at <b>+44 3069 990514</b> or <a href="{{ route('contact') }}" > more way to Contact.</a>
              </p>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section>
    
</div>


@endsection
@extends('layouts.app')

@section('content')
<!-- ======= Pricing Section ======= -->

<div class="breadcrumbs" data-aos="fade-in" style="margin-top: -10px">
    <div class="container">
      <h1 class="font-weight-bold">Pricing</h1>
      <h4>New 4-day free trials to help you find the right fit. </h4>
      <p> Billed monthly thereafter, cancel anytime.
        Free trial for new subscribers only. </p>
    </div>
  </div>
  <!-- Preloader -->
  <div id="preloader"></div>

<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="box">
            <h3>Trial</h3>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <ul>
              <li>Only for new Clients</li>
              <li>Skill-based Search</li>
              <li class="na">Extensive Search</li>
              <li class="na">Recurting Service</li>
              <li class="na">Performance Boost</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
          <div class="box featured">
            <h3>Starter</h3>
            <h4><sup>£</sup>279<span> / month</span></h4>
            <ul>
              <li>One-off Hiring needs</li>
              <li>50 Resume Views</li>
              <li>Skill-based extensive search</li>
              <li>Recurting Service</li>
              <li class="na">Performance Boost</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="box">
            <h3>Standard</h3>
            <h4><sup>£</sup>399<span> / month</span></h4>
            <ul>
              <li>For small expanding teams</li>
              <li>150 Resume Views</li>
              <li>Unlimited active applicants</li>
              <li>Performance Boost</li>
              <li>Recurting Service</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="box">
            <span class="advanced">Advance</span>
            <h3>Premium</h3>
            <h4><sup>£</sup>649<span> / month</span></h4>
            <ul>
              <li>For rapidly growing teams</li>
              <li>350 Resume Views</li>
              <li>Unlimited active applicants</li>
              <li>Performance Boost</li>
              <li>Extensive recurting service</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Pricing Section -->

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title text-center">
        <span class="display-1"> <i class="far fa-star"></i> </span>
        <h4 class="display-3 text-dark font-weight-bold"> Enterprise customers </h4>
        <h4 class="disply-4 mt-3"> Contact us for pricing on a custom solution. </h4>
        <a href="{{ route('contact') }}" class="btn btn-success rounded-pill btn-lg text-uppercase"> Let's talk <i class="fas fa-chevron-down"></i> </a>

      </div>

    </div>
  </section>



@endsection
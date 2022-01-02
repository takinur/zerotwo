@extends('layouts.app')


@section('content')
 <!-- Preloader -->
 <div id="preloader"></div> 
 @if (session()->has('message'))
 <div class="alert bg-danger text-white alert-dismissible fade show text-center mt-2" id="slert" role="alert">
     <strong> {{ session('message') }} </strong>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
 </div>      
@endif 

<div class="breadcrumbs" data-aos="fade-in" style="margin-top: -10px">
    <div class="container">
      <h2>Contact Us</h2>
      <p> Send a contact message or call us anytime. </p>
    </div>
  </div>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1625.3542119046397!2d-0.24579162472086472!3d51.41030167268701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876093d5a9c78cb%3A0x4b59a0588047a867!2sHuntley%20Way!5e0!3m2!1sen!2sbd!4v1626976931663!5m2!1sen!2sbd" frameborder="0" allowfullscreen></iframe>
    </div>
    

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>189 Wardour St
                Beverley Way
                London, SW20 0AE
                United Kingdom</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>info@zerotwo.com</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+44 3069 990514</p>
            </div>

          </div>

        </div>
        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{ route('contactForm') }}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                @error('name') <div class="invalid-feedback"> {{ $message }}</div> @enderror
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                @error('email') <div class="invalid-feedback"> {{ $message }}</div> @enderror
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              @error('subject') <div class="invalid-feedback"> {{ $message }}</div> @enderror
            </div>
            <div class="form-group">
              <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              @error('message') <div class="invalid-feedback"> {{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <script>     
    //Close Alert
    window.setTimeout(function() {
        $("#salert").fadeTo(500, 0).slideUp(500, function(){
          $("#salert").slideUp(500); 
        });
    }, 3000); 
  </script>

@endsection
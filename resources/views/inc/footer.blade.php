    <div class="footer-top border-top ">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ZERO TWO</h3>
            <p>
              189 Wardour St <br>
              Beverley Way <br>
              London, SW20 0AE <br>
              United Kingdom<br><br>
              <strong>Phone:</strong> +44 3069 990514<br>
              <strong>Email:</strong> info@zerotwo.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Resources</h4>
            <ul>
              @auth
                @role('employer')			
        
                  <li> <i class="bx bx-chevron-right"></i><a href="{{ route('findtalent') }}">Find Talent</a></li>
                  <li> <i class="bx bx-chevron-right"></i><a href="{{ route('pricing') }}">Pricing</a></li>
                  <li> <i class="bx bx-chevron-right"></i><a href="{{ route('candidates') }}">All Candidates</a></li>  
                  <li> <i class="bx bx-chevron-right"></i><a href="{{ route('dashboard') }}">Dashboard</a></li>  
                @endrole
        
                @role('candidate')      
                  <li><i class="bx bx-chevron-right"></i><a href="{{ route('findwork') }}" >Find Work</a></li>
                  <li><i class="bx bx-chevron-right"></i><a href="/profile" >View Profile</a></li>
                  <li> <i class="bx bx-chevron-right"></i><a href="{{ route('dashboard') }}">Dashboard</a></li>  
                @endrole
        
              @endauth
        
              @guest
                <li> <i class="bx bx-chevron-right"></i><a href="{{ route('findtalent') }}">Find Talent</a></li>
                <li> <i class="bx bx-chevron-right"></i><a href="{{ route('findwork') }}">Find Work</a></li>  
                <li> <i class="bx bx-chevron-right"></i><a href="{{ route('pricing') }}">Pricing</a></li>  
              @endguest
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Stay up-to-date with the events and offers!</p>
            <form action="{{ route('newsSub') }}" method="post">
              @csrf
              <input type="email" name="subemail" placeholder="Email"><input type="submit" :value="__('subemail')">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
         <strong><span>  &copy; {{ date("Y")}} - ZERO TWO</span></strong> - All Rights Reserved.
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.reddit.com" class="reddit"><i class="bx bxl-reddit"></i></a>
        <a href="https://www.youtube.com" class="YT"><i class="bx bxl-youtube"></i></a>
        <a href="https://www.discord.com" class="linkedin"><i class="bx bxl-discord"></i></a>
      </div>
    </div>
 

  <a href="#" class="back-to-top" data-toggle="tooltip" data-placement="top" title="Go to top"><i class="bx bx-up-arrow-alt"></i></a>

   
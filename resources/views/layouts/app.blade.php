<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ $title ?? 'Zero Two -Popular Job Platform' }}</title>

    <!-- Google Fonts -->
    <link href="{{ asset('css/google_fonts.css') }}" rel="stylesheet">

   <!-- Styles -->  
   <link href="{{ asset('assets/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/remixicon/remixicon.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/animate.css/animate.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/aos/aos.css') }}" rel="stylesheet">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     
    @livewireStyles


</head>
<body>
      <!-- ======= Header ======= -->
    <header id="header" class="fixed-top"> 
        @include('inc.header') 
    </header>
    
    @guest
        @include('inc.loginModal')
    @endguest

        <div class="wrapper">
            @yield('content')
        </div>
    
  <!-- ======= Footer ======= -->
    <footer id="footer"> 
        @include('inc.footer')
    </footer>

    <!-- assets JS Files -->
  <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>  
  <script src="{{ asset('assets/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('assets/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/aos/aos.js') }}"></script>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  @livewireScripts
  @yield('scripts')

</body>
</html>

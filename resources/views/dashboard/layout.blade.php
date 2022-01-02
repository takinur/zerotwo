<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ $title }}</title>

    <!-- Google Fonts --
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ asset('assets/aos/aos.css') }}" rel="stylesheet">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }
    .line {
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
        margin: 40px 0;
    }

    </style>
    @livewireStyles

</head>
<body>
    
    @yield('content')
    
    <!-- assets JS Files -->   
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>  
    <script src="{{ asset('assets/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/aos/aos.js') }}"></script> 
    <script src="{{ asset('js/app.js') }}" defer></script> 
    
    @yield('scripts')
    
    @livewireScripts
  </body>
  </html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Win&Win</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- site favicon -->
  <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.jpg')}}">
  <!-- fontawesome css link -->
  <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <!-- animate css link -->
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <!-- lightcase css link -->
  <link rel="stylesheet" href="{{asset('css/lightcase.css')}}">
  <!-- slick css link -->
  <link rel="stylesheet" href="{{asset('css/slick.css')}}">
  <!-- swiper css link -->
  <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
  <!-- flipclock css link -->
  <link rel="stylesheet" href="{{asset('css/flipclock.css')}}">
  <!-- jqvmap css link -->
  <link rel="stylesheet" href="{{asset('css/jqvmap.min.css')}}">
  <!-- main style css link -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- responsive css link -->
  <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/slider.css')}}">

  <!-- jquery library js file -->
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  
</head>

<body>

    <!-- preloader start -->
    <div id="preloader"></div>
    <!-- preloader end -->

    @include('layouts.header')
        @yield('content')
    @include('layouts.footer')

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-angle-up"></i>
        </span>
    </div>
  <!-- scroll-to-top end -->
</body>
<!-- bootstrap js file -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- flipclock js file -->
  <script src="{{asset('js/flipclock.min.js')}}"></script>
  <!-- countdown js file -->
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <!-- slick js file -->
  <script src="{{asset('js/slick.min.js')}}"></script>
  <!-- swiper js file -->
  <script src="{{asset('js/swiper.min.js')}}"></script>
  <!-- lightcase js file -->
  <script src="{{asset('js/lightcase.js')}}"></script>
  <!-- wow js file -->
  <script src="{{asset('js/wow.min.js')}}"></script>
  <!-- vamp js files -->
  <script src="{{asset('js/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('js/jquery.vmap.world.js')}}"></script>
  <!-- main script js file -->
  <script src="{{asset('js/main.js')}}"></script>
  
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CSSRulePlugin3.min.js"></script>
  
  <script src="{{asset('js/slider.js')}}"></script>
</html>

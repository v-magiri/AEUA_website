<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('Web_page','AEUA')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('styles/open-iconic-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('styles/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('styles/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('styles/aos.css')}}">
    <!-- css/aos.css -->

    <link rel="stylesheet" href="{{asset('styles/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('styles/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('styles/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('styles/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('styles/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon-16x16.png')}}">
    <link rel="manifest" href="/site.webmanifest">
  </head>
  <body>
    @include('partials/nav')

    @yield('content')

    @include('partials/footer')
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('js/google-map.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://kit.fontawesome.com/2493969055.js" crossorigin="anonymous"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.10.111/pdf.min.js" integrity="sha512-hoZmP5l0sJQzHzkXQS3ZCj/H7bOn8JKmbHd/s2trPUoMcvPaBfLSE9/92cpwYzcXBaEtVT/aCQ9P97rkTSWqcw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>

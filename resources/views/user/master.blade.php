<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>REMBDL</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Rahima Engineering And Marine Bangladesh Limited works about ship and building, ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('fontend/assets/images/favicon.png')}}">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{asset('fontend/assets/css/vendor/font-awesome-pro.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/assets/css/vendor/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/assets/css/vendor/muli-font.css')}}">

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="{{asset('fontend/assets/css/plugins/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/assets/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/assets/css/plugins/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/assets/css/plugins/magnific-popup.css')}}">


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('fontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/assets/css/custom.css')}}">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="{{asset('fontend')}}/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="{{asset('fontend')}}/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="{{asset('fontend')}}/assets/css/style.min.css"> -->
    @stack('css')
</head>

<body>

<div id="page" class="section">
    <!-- Header Section Start -->
    @include('user.includes.header')
    <!-- Header Section End -->

    <!-- Main Search Start -->

{{--    @yield('home')--}}
{{--    @yield('about')--}}
{{--    @yield('contact')--}}
{{--    @yield('service')--}}
{{--    @yield('work')--}}
{{--    @yield('blog')--}}

    @yield('content')

    @include('user.includes.footer')

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!-- Scroll Top End -->
</div>

    @include('user.includes.mobileview')



<!-- JS
============================================ -->

<!-- Vendors JS -->
<script src="{{asset('fontend/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/vendor/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/vendor/jquery-migrate-3.1.0.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>

<!-- Plugins JS -->
<script src="{{asset('fontend/assets/js/plugins/aos.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/plugins/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/plugins/parallax.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/plugins/jquery.counterup.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/plugins/svg-inject.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/plugins/swiper.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/plugins/vanilla-tilt.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/plugins/vivus.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/plugins/waypoints.min.js')}}"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<!-- <script src="{{asset('fontend')}}/assets/js/vendor/vendor.min.js"></script>
<script src="{{asset('fontend')}}/assets/js/plugins/plugins.min.js"></script> -->

<!-- Main Activation JS -->
<script src="{{asset('fontend/assets/js/main.js')}}"></script>
@stack('js')




</body>

</html>

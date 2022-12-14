@extends('user.master')
@section('contact1') active @endsection
@section('content')
    <!-- Main Search Start -->
    <div class="main-search-active">
        <div class="sidebar-search-icon">
            <button class="search-close"><i class="pe-7s-close"></i></button>
        </div>
        <div class="sidebar-search-input">
            <form action="#">
                <div class="form-search">
                    <input id="search" class="input-text" value="" placeholder="" type="search">
                    <button>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
            <p class="form-description">Hit enter to search or ESC to close</p>
        </div>
    </div>
    <!-- Main Search End -->

    <!-- Page Title Section Start -->
    <div class="page-title-section section section-padding-top" data-overlay="0.7" data-bg-image="{{asset('fontend')}}/assets/images/bg/breadcrumb-bg.jpg">
        <div class="page-title">
            <div class="container">
                <h1 class="title">We are an agency located in Dhaka, Chittagong and Dubai</h1>
            </div>
        </div>
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Contact Information Section Start -->
    <div class="section section-padding-t90-b100">
        <div class="container shape-animate">
            <!-- Section Title Start -->
            <div class="section-title text-center mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                <h2 class="title">We are a full-service creative agency</h2>
                <p class="sub-title">Our team of designers, developers and builders are perfectionists
                    who love what they do and love where they work</p>
            </div>
            <!-- Section Title End -->
            @include('user.includes.address')
{{--            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">--}}
{{--                <div class="col mb-6" data-aos="fade-up">--}}
{{--                    <!-- Contact Information Start -->--}}
{{--                    <div class="contact-info" data-vivus-hover>--}}
{{--                        <div class="icon">--}}
{{--                            <img class="svgInject" src="{{asset('fontend')}}/assets/images/svg/linea/linea-basic-map.svg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="info">--}}
{{--                            <h4 class="title">Our Locations</h4>--}}
{{--                            <span class="info-text"> 110 W 34th St, NYC. <br>--}}
{{--                                    67 Madison Avenue.</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Contact Information End -->--}}
{{--                </div>--}}
{{--                <div class="col mb-6" data-aos="fade-up">--}}
{{--                    <!-- Contact Information Start -->--}}
{{--                    <div class="contact-info" data-vivus-hover>--}}
{{--                        <div class="icon">--}}
{{--                            <img class="svgInject" src="{{asset('fontend')}}/assets/images/svg/linea/linea-basic-message-txt.svg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="info">--}}
{{--                            <h4 class="title">Give Us A Call</h4>--}}
{{--                            <span class="info-text"> (+1) 212-946-2701 <br>--}}
{{--                                    (+1) 212-946-2702</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Contact Information End -->--}}
{{--                </div>--}}
{{--                <div class="col mb-6" data-aos="fade-up">--}}
{{--                    <!-- Contact Information Start -->--}}
{{--                    <div class="contact-info" data-vivus-hover>--}}
{{--                        <div class="icon">--}}
{{--                            <img class="svgInject" src="{{asset('fontend')}}/assets/images/svg/linea/linea-basic-mail-open-text.svg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="info">--}}
{{--                            <h4 class="title"> Help Desk</h4>--}}
{{--                            <span class="info-text">--}}
{{--                                    <a href="#">hello@hasthemes.com</a>--}}
{{--                                    <br>--}}
{{--                                    <a href="#">sales@hasthemes.com</a>--}}
{{--                                </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Contact Information End -->--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- Animation Shape Start -->
            <div class="shape shape-1 scene">
                <span data-depth="4"><img src="{{asset('fontend')}}/assets/images/shape-animation/video-shape-1.png" alt="shape"></span>
            </div>
            <!-- Animation Shape End -->

        </div>
    </div>
    <!-- Contact Information Section End -->

    <!--Google Map Area Start-->
    <div class="google-map-area section text-center section-padding-bottom">
        <div class="container" data-aos="fade-up">
            <div class="contact-map-area">
{{--                <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.468371555181!2d90.3779999850344!3d23.78526679877092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7f4c5407ce1%3A0x637b68bf0584f636!2sMondol%20Steel%20Ltd.!5e0!3m2!1sbn!2sbd!4v1645425855832!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!--Google Map Area Start-->

    <!-- Contact Form Section Start -->
    <div class="contact-form-section section section-padding-t90-b100" data-bg-color="#f8faff">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title text-center" data-aos="fade-up">
                        <h2 class="title fz-32">Let???s talk about your project</h2>
                        <p class="sub-title">We have made it easy for clients to reach us
                            and get their solutions weaved</p>
                    </div>
                    <!-- Section Title End -->
                    <div class="contact-form" data-aos="fade-up">
                        <form action="{{asset('fontend')}}/assets/php/contact-mail.php" id="contact-form" method="post">
                            <div class="row mb-n6">
                                <div class="col-md-6 col-12 mb-6">
                                    <input type="text" placeholder="Your Name *" name="name">
                                </div>
                                <div class="col-md-6 col-12 mb-6">
                                    <input type="email" placeholder="Email *" name="email">
                                </div>
                                <div class="col-md-12 col-12 mb-6">
                                    <input type="text" placeholder="Subject *" name="subject">
                                </div>
                                <div class="col-12 mb-6">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 text-center mb-6">
                                    <button class="btn btn-primary btn-hover-secondary">Submit</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Section End -->
@endsection

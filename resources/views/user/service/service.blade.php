@extends('user.master')
@section('service1') active @endsection
@section('content')
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
    <div class="page-title-section section section-padding-top" data-overlay="0.7" data-bg-image="{{asset('fontend')}}/assets/images/bg/breadcrumb-bg-three.jpg">
        <div class="page-title">
            <div class="container">
                <h1 class="title">We work with bold brands that we believe in</h1>
            </div>
        </div>
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="current">Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Service Section Start -->
    <div class="section section-padding-t90 section-padding-bottom">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2 class="title fz-32">Services that create identities, build brands, and get results</h2>
                <p class="sub-title">We produce beautifully crafted creative solutions that transcend business goals.
                    <br> We provide the exceptional service we’d want to experience ourselves!</p>
            </div>
            <!-- Section Title End -->

            <!-- About Wrapper Start -->
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6 icon-box-shape-animation">

                @foreach($service as $row)
                <!-- Icon Box Start -->
                <div class="col mb-6" data-aos="fade-up">

                    <div class="icon-box box-border text-center" data-vivus-hover>
                        <div class="icon"><img class="svgInject" src="{{asset($row->image)}}" alt=""></div>
                        <div class="content">
                            <h3 class="title">{{$row->name}}</h3>
                            <div class="desc">
                                <p>{{$row->short_description}}</p>
                            </div>
                            <a href="#" class="link">Learn More</a>
                        </div>
                    </div>

                </div>
                <!-- Icon Box End -->
                @endforeach
                <!-- Icon Box Start -->
{{--                <div class="col mb-6" data-aos="fade-up">--}}

{{--                    <div class="icon-box box-border text-center" data-vivus-hover>--}}
{{--                        <div class="icon"><img class="svgInject" src="{{asset('fontend')}}/assets/images/svg/linea/linea-basic-gear.svg" alt=""></div>--}}
{{--                        <div class="content">--}}
{{--                            <h3 class="title">Development</h3>--}}
{{--                            <div class="desc">--}}
{{--                                <p>Our web design services can help rediscover your business’ image--}}
{{--                                    in the internet marketplace.</p>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="link">Learn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <!-- Icon Box End -->--}}

{{--                <!-- Icon Box Start -->--}}
{{--                <div class="col mb-6" data-aos="fade-up">--}}

{{--                    <div class="icon-box box-border text-center" data-vivus-hover>--}}
{{--                        <div class="icon"><img class="svgInject" src="{{asset('fontend')}}/assets/images/svg/linea/linea-basic-display.svg" alt=""></div>--}}
{{--                        <div class="content">--}}
{{--                            <h3 class="title">Marketing</h3>--}}
{{--                            <div class="desc">--}}
{{--                                <p>Our web design services can help rediscover your business’ image--}}
{{--                                    in the internet marketplace.</p>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="link">Learn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <!-- Icon Box End -->--}}

{{--                <!-- Icon Box Start -->--}}
{{--                <div class="col mb-6" data-aos="fade-up">--}}

{{--                    <div class="icon-box box-border text-center" data-vivus-hover>--}}
{{--                        <div class="icon"><img class="svgInject" src="{{asset('fontend')}}/assets/images/svg/linea/linea-ecommerce-cart-plus.svg" alt=""></div>--}}
{{--                        <div class="content">--}}
{{--                            <h3 class="title">Ecommerce</h3>--}}
{{--                            <div class="desc">--}}
{{--                                <p>Our web design services can help rediscover your business’ image--}}
{{--                                    in the internet marketplace.</p>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="link">Learn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <!-- Icon Box End -->--}}

{{--                <!-- Icon Box Start -->--}}
{{--                <div class="col mb-6" data-aos="fade-up">--}}

{{--                    <div class="icon-box box-border text-center" data-vivus-hover>--}}
{{--                        <div class="icon"><img class="svgInject" src="{{asset('fontend')}}/assets/images/svg/linea/linea-basic-picture-multiple.svg" alt=""></div>--}}
{{--                        <div class="content">--}}
{{--                            <h3 class="title">UX Design</h3>--}}
{{--                            <div class="desc">--}}
{{--                                <p>Our web design services can help rediscover your business’ image--}}
{{--                                    in the internet marketplace.</p>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="link">Learn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <!-- Icon Box End -->--}}

{{--                <!-- Icon Box Start -->--}}
{{--                <div class="col mb-6" data-aos="fade-up">--}}

{{--                    <div class="icon-box box-border text-center" data-vivus-hover>--}}
{{--                        <div class="icon"><img class="svgInject" src="{{asset('fontend')}}/assets/images/svg/linea/linea-basic-picture.svg" alt=""></div>--}}
{{--                        <div class="content">--}}
{{--                            <h3 class="title">Strategy</h3>--}}
{{--                            <div class="desc">--}}
{{--                                <p>Our web design services can help rediscover your business’ image--}}
{{--                                    in the internet marketplace.</p>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="link">Learn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
                <!-- Icon Box End -->

                <!-- Animation Shape Start -->
                <div class="shape shape-1 scene">
                    <span data-depth="1"><img src="{{asset('fontend')}}/assets/images/shape-animation/video-shape-1.png" alt=""></span>
                </div>
                <!-- Animation Shape End -->

            </div>
            <!-- About Wrapper End -->

        </div>
    </div>
    <!-- Service Section End -->

    <!-- Skill Section Start -->
    <div class="section section-padding-top section-padding-bottom-170" data-bg-color="#f8faff">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-6 order-lg-1 order-2" data-aos="fade-up">

                    <div class="progressbar-area mt-lg-0 mt-md-50 mt-sm-50 mt-40">

                        <!-- Section Title Two Start -->
                        <div class="section-title-two">
                            <span class="sub-title">Make creative services</span>
                            <h3 class="title">Bringing unique and engaging experiences to your work</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <div class="progress-bar--one">
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading ">Land Develoopment</h6>
                                <div class="progress">
                                    <div class="progress-bar gradient-1 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 81%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">81%</span></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts ">
                                <h6 class="heading ">Construction</h6>
                                <div class="progress">
                                    <div class="progress-bar gradient-2 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 90%; visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">90%</span></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts ">
                                <h6 class="heading ">Steel Structure</h6>
                                <div class="progress">
                                    <div class="progress-bar gradient-3 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".8s" role="progressbar" style="width: 80%; visibility: visible; animation-duration: 0.8s; animation-delay: 0.8s; animation-name: fadeInLeft;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">80%</span></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts ">
                                <h6 class="heading ">Bridge</h6>
                                <div class="progress">
                                    <div class="progress-bar gradient-4 wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".9s" role="progressbar" style="width: 75%; visibility: visible; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: fadeInLeft;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">75%</span></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                        </div>

                    </div>

                </div>

                <div class="offset-xl-1 col-xl-6 col-lg-6 order-lg-2 order-1" data-aos="fade-up">
                    <!-- Faq Image Start -->
                    <div class="about-image-area right-0 skill-image-area">
                        <div class="about-image js-tilt">
                            <img src="{{asset('fontend/assets/images/skill/skill-1.jpg')}}" alt="" height="400px">
                        </div>
{{--                        <div class="about-image js-tilt">--}}
{{--                            <img src="{{asset('fontend/assets/images/skill/skill-2.jpg')}}" alt="">--}}
{{--                        </div>--}}
                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                            <span data-depth="1"><img src="{{asset('fontend/assets/images/shape-animation/video-shape-1.png')}}" alt=""></span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                    <!-- Faq Image End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Skill Section End -->

    <!-- About Section Start -->
    <div class="section section-padding-top section-padding-bottom-160">
        <div class="container">

            <!-- About Wrapper Start -->
            <div class="row">

                <!-- About Image Area Start -->
                <div class="col-xl-7 col-lg-6 col-12" data-aos="fade-up">
                    <div class="about-image-area">
                        <div class="about-image js-tilt">
                            <img src="{{asset('fontend/assets/images/about/about-5.jpg')}}" alt="">
                        </div>
{{--                        <div class="about-image js-tilt">--}}
{{--                            <img src="{{asset('fontend')}}/assets/images/about/about-6.jpg" alt="">--}}
{{--                        </div>--}}
                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                            <span data-depth="1"><img src="{{asset('fontend')}}/assets/images/shape-animation/about-shape-1.png" alt=""></span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                </div>
                <!-- About Image Area Start -->

                <!-- About Start -->
                <div class="col-xl-5 col-lg-6 col-12" data-aos="fade-up">
                    <!-- About Content Area Start -->
                    <div class="about-content-area">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two">
                            <span class="sub-title">Make Steel Structure Building</span>
                            <h3 class="title">Make your company with steel  </h3>
                        </div>
                        <!-- Section Title Two End -->

                        <p>Our goal is to make the process easier for you. You can build a company with steel which is cost consuming from other building. </p>

                        <a class="btn btn-primary btn-hover-secondary mt-xl-12 mt-lg-8 mt-md-6 mt-4" href="#">Get Started</a>
                    </div>
                    <!-- About Content Area Start -->
                </div>
                <!-- About Start -->

            </div>
            <!-- About Wrapper End -->

        </div>
    </div>
    <!-- About Section End -->

    <!-- Funfact Section Start -->
    <div class="section section-padding-t90 section-padding-bottom" data-bg-color="#f8faff">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2 class="title fz-32">We help our clients solve business problems, increase <br> visibility, and achieve unexpected results</h2>
            </div>
            <!-- Section Title End -->
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">

                        <!-- Funfact Start -->
                        <div class="col mb-6" data-aos="fade-up">
                            <div class="funfact">
                                <div class="number"><span class="counter">25</span>+</div>
                                <h6 class="text">Years Experience</h6>
                            </div>
                        </div>
                        <!-- Funfact End -->

                        <!-- Funfact Start -->
                        <div class="col mb-6" data-aos="fade-up">
                            <div class="funfact">
                                <div class="number"><span class="counter">15</span></div>
                                <h6 class="text">Active Projects</h6>
                            </div>
                        </div>
                        <!-- Funfact End -->

                        <!-- Funfact Start -->
                        <div class="col mb-6" data-aos="fade-up">
                            <div class="funfact">
                                <div class="number"><span class="counter">130</span></div>
                                <h6 class="text">Projects Done</h6>
                            </div>
                        </div>
                        <!-- Funfact End -->

                        <!-- Funfact Start -->
                        <div class="col mb-6" data-aos="fade-up">
                            <div class="funfact">
                                <div class="number"><span class="counter">110</span>+</div>
                                <h6 class="text">Satisfied Clients</h6>
                            </div>
                        </div>
                        <!-- Funfact End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Funfact Section End -->

    <!-- Contact Section Start -->
    <div class="section section-padding contact-section" data-overlay="0.7" data-bg-image="{{asset('fontend')}}/assets/images/bg/contact-bg.jpg">

        <div class="container">
            <div class="row row-cols-lg-2 row-cols-1 align-items-center">
                <div class="col" data-aos="fade-up">
                    <!-- Contact Information -->
                    <div class="contact-Information mr-xl-7">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two color-light">
                            <span class="sub-title">Let’s find out how to work together</span>
                            <h3 class="title">When you partner with us, <br> you get more than a contract</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info info-light" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject" src="{{asset('fontend')}}/assets/images/svg/linea/linea-basic-map.svg" alt="">
                            </div>
                            <div class="info">
                                <h4 class="title">Our Locations</h4>
                                <span class="info-text"> House #34, Road #13 Sector $3, Uttara. Dhaka-1230.</span>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                        <!-- Contact Info Item Start -->
                        <div class="contact-info info-light" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject" src="{{asset('fontend')}}/assets/images/svg/linea/linea-basic-message-txt.svg" alt="">
                            </div>
                            <div class="info">
                                <h4 class="title">Give Us A Call</h4>
                                <span class="info-text"> Cell:+88-01711-226853</span>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                        <!-- Contact Info Item Start -->
                        <div class="contact-info info-light" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject" src="{{asset('fontend')}}/assets/images/svg/linea/linea-basic-mail-open-text.svg" alt="">
                            </div>
                            <div class="info">
                                <h4 class="title"> Help Desk</h4>
                                <span class="info-text">
                                        <a href="#">emdad.silicon@gmail.com</a>
                                    </span>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Information -->
                </div>
                <div class="col mt-lg-0 mt-md-10 mt-8" data-aos="fade-up">
                    <!-- Contact Form Start -->
                    <div class="contact-form-area">
                        <!-- Section Title Start -->
                        <div class="section-title text-center mb-7" data-aos="fade-up">
                            <h2 class="title fz-28">Let’s talk about your project</h2>
                            <p class="sub-title">We have made it easy for clients to reach us
                                and get their solutions weaved</p>
                        </div>
                        <!-- Section Title End -->
                        <form action="#" id="contact-form" method="post">
                            <div class="row mb-n4">
                                <div class="col-md-12 col-12 mb-4">
                                    <input type="text" placeholder="Your Name *" name="name">
                                </div>
                                <div class="col-md-12 col-12 mb-4">
                                    <input type="email" placeholder="Email *" name="email">
                                </div>
                                <div class="col-md-12 col-12 mb-4">
                                    <input type="text" placeholder="Your Phone *" name="Phone">
                                </div>
                                <div class="col-12 mb-6">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 text-center mb-4">
                                    <button class="btn btn-primary btn-hover-secondary">Get Quote</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>

                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                                <span data-depth="1">
                                    <img src="{{asset('fontend')}}/assets/images/shape-animation/contact-shape.png" alt="">
                                </span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>

        <!-- Animation Shape Start -->
        <div class="shape shape-1 scene">
                <span data-depth="1">
                    <img src="{{asset('fontend')}}/assets/images/shape-animation/newsletter-shape.png" alt="">
                </span>
        </div>
        <!-- Animation Shape End -->

    </div>
@endsection

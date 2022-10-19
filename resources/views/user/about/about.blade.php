@extends('user.master')
@section('about1') active @endsection
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
                <h1 class="title">We are an agency located in Dubai , Dhaka and Chittagong</h1>
            </div>
        </div>
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="current">About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- About Section Start -->
    <div class="section section-padding-top section-padding-bottom-150">
        <div class="container">

            <!-- About Wrapper Start -->
            <div class="row">

                <!-- About Start -->
                <div class="col-xl-6 col-lg-6 col-12" data-aos="fade-up">
                    <!-- About Content Area Start -->
                    <div class="about-content-area mt-0 mb-md-10 mb-10">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two">
                            <span class="sub-title">Land Development, Building & Construction</span>
                            <h3 class="title">We think strategy, UX design, <br> and web development</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <div class="row row-cols-sm-2 row-cols-auto mb-n6">
                            <!-- Single About Funfuct Start -->
                            <div class="col mb-6" data-aos="fade-up">
                                <div class="about-funfact">
                                    <div class="number"><span class="counter">110</span>+</div>
                                    <h6 class="text">Happy Clients</h6>
                                    <p>We help our clients increase profits by several times support.</p>
                                </div>
                            </div>
                            <!-- Single About Funfuct Start -->
                            <!-- Single About Funfuct Start -->
                            <div class="col mb-6" data-aos="fade-up">
                                <div class="about-funfact">
                                    <div class="number"><span class="counter">130</span>+</div>
                                    <h6 class="text">Completed projects</h6>
                                    <p>you make a dream plan and we complete it as your dream.</p>
                                </div>
                            </div>
                            <!-- Single About Funfuct Start -->
                        </div>
                    </div>
                    <!-- About Content Area Start -->
                </div>
                <!-- About Start -->

                <!-- About Image Area Start -->
                <div class="col-xl-6 col-lg-6 col-12" data-aos="fade-up">
                    <div class="about-image-area about-shape-animation right-0 mr-0">
                        <div class="about-image js-tilt">
                            <img src="{{asset('fontend')}}/assets/images/about/about-1.png" alt="">
                        </div>
{{--                        <div class="about-image js-tilt">--}}
{{--                            <img src="{{asset('fontend')}}/assets/images/about/about-2.jpg" alt="">--}}
{{--                        </div>--}}
                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                            <span data-depth="1"><img src="{{asset('fontend/assets/images/shape-animation/video-shape-1.png')}}" alt=""></span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                </div>
                <!-- About Image Area Start -->

            </div>
            <!-- About Wrapper End -->

        </div>
    </div>
    <!-- About Section End -->

    <!-- Video Section Start -->
    <div class="video-section section section-padding-150" data-overlay="0.7" data-bg-image="{{asset('fontend')}}/assets/images/bg/video-bg.jpg">

        <div class="container text-center">

            <!-- Section Title Start -->
            <div class="section-title color-light text-center mb-lg-14 mb-md-8 mb-6" data-aos="fade-up">
                <h2 class="title">Our land development experience 25 years.</h2>
            </div>
            <!-- Section Title End -->
            <a href="https://www.youtube.com/watch?v=HXUNstq6A7k" class="play-btn icon video-popup"><i class="fas fa-play"></i></a>

        </div>

        <!-- Animation Shape Start -->
        <div class="shape shape-1 scene">
                <span data-depth="1">
                    <img src="{{asset('fontend')}}/assets/images/shape-animation/newsletter-shape.png" alt="">
                </span>
        </div>
        <!-- Animation Shape End -->

    </div>
    <!-- Video Section End -->

    <!-- About Section Start -->
    <div class="section section-padding-top section-padding-bottom-160">
        <div class="container">

            <!-- About Wrapper Start -->
            <div class="row">

                <!-- About Image Area Start -->
                <div class="col-xl-7 col-lg-6 col-12" data-aos="fade-up">
                    <div class="about-image-area">
                        <div class="about-image js-tilt">
                            <img src="{{asset('fontend')}}/assets/images/about/about-3.jpg" alt="">
                        </div>
{{--                        <div class="about-image js-tilt">--}}
{{--                            <img src="{{asset('fontend')}}/assets/images/about/about-4.jpg" alt="">--}}
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
                            <span class="sub-title">Make bride or culvert</span>
                            <h3 class="title">We make bridge or culvert <br> with different design.</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <p>Our team of designers and developers are perfectionists who love to make a professional work. They work together to complete your work.</p>

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

    <!-- Testimonial Section Start -->
    <div class="testimonial-section section section-padding-t90 section-padding-bottom" data-bg-color="#f8faff">
        <div class="container-fluid pl-xl-16 pl-lg-3 pl-md-3 pl-sm-3 pl-3 pr-xl-16 pr-lg-3 pr-md-3 pr-sm-3 pr-3">
            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2 class="title fz-32">Our Team Members Introduce</h2>
            </div>
            <!-- Section Title End -->

            <!--Testimonial Slider Start -->
            <div class="testimonial-slider swiper-container" data-aos="fade-up">
                <div class="swiper-wrapper">

                    @foreach($category as $row)
                    <div class="swiper-slide">
                        <!-- Static Testimonial Start -->
                        <div class="static-testimonial mb-6">
                            <div class="testimonial-image">
                                <img src="{{asset($row->image)}}" alt="" height="100px" width="100px">
                            </div>
                            <div class="testimonial-content">
                                <p>{{$row->short_description}}</p>
                            </div>
                            <div class="author-info">
                                <div class="cite">
                                    <h6 class="name">{{$row->name}}</h6>
                                    <span class="position">{{$row->designation}}</span>
                                </div>
                            </div>
                        </div>
                        <!-- Static Testimonial End -->
                    </div>
                    @endforeach
{{--                    <div class="swiper-slide">--}}
{{--                        <!-- Static Testimonial Start -->--}}
{{--                        <div class="static-testimonial mb-6">--}}
{{--                            <div class="testimonial-image">--}}
{{--                                <img src="{{asset('fontend')}}/assets/images/testimonial/90/author-2.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="testimonial-content">--}}
{{--                                <p>We are completely satisfied with the quality of service that we get. Workers were respectful, efficient, accommodating, cleaned up thoroughly. </p>--}}
{{--                            </div>--}}
{{--                            <div class="author-info">--}}
{{--                                <div class="cite">--}}
{{--                                    <h6 class="name">Eloise Smith</h6>--}}
{{--                                    <span class="position">CEO at Flow</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Static Testimonial End -->--}}
{{--                    </div>--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <!-- Static Testimonial Start -->--}}
{{--                        <div class="static-testimonial mb-6">--}}
{{--                            <div class="testimonial-image">--}}
{{--                                <img src="{{asset('fontend')}}/assets/images/testimonial/90/author-3.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="testimonial-content">--}}
{{--                                <p>We are completely satisfied with the quality of service that we get. Workers were respectful, efficient, accommodating, cleaned up thoroughly.</p>--}}
{{--                            </div>--}}
{{--                            <div class="author-info">--}}
{{--                                <div class="cite">--}}
{{--                                    <h6 class="name">Thomas Smith</h6>--}}
{{--                                    <span class="position">CEO at Flow</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Static Testimonial End -->--}}
{{--                    </div>--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <!-- Static Testimonial Start -->--}}
{{--                        <div class="static-testimonial mb-6">--}}
{{--                            <div class="testimonial-image">--}}
{{--                                <img src="{{asset('fontend')}}/assets/images/testimonial/90/author-3.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="testimonial-content">--}}
{{--                                <p>I love their flexibility. Even when my request is too complicated to handle. they could still suggest something useful for me. </p>--}}
{{--                            </div>--}}
{{--                            <div class="author-info">--}}
{{--                                <div class="cite">--}}
{{--                                    <h6 class="name">Florence Themes</h6>--}}
{{--                                    <span class="position">/ Multimedia Admin</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Static Testimonial End -->--}}
{{--                    </div>--}}

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!--Testimonial Slider End -->
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- CTA Section Start -->
    <div class="cta-section section section-padding-250">
        <div class="container text-center icon-up-down-animation">
            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2 class="title fz-34">Let's talk about your project and see how we can work together</h2>
                <p class="sub-title">Our team of designers, developers and creatives are perfectionists
                    <br> who love what they do and love where they work</p>
            </div>
            <!-- Section Title End -->
            <a class="btn btn-primary btn-hover-secondary" href="{{route('contact')}}">Contact Us</a>

            <!-- Icon Animation Start -->
            <div class="shape shape-1">
                    <span>
                        <img src="{{asset('fontend')}}/assets/images/icon-animation/icon-1.png" alt="">
                    </span>
            </div>
            <div class="shape shape-2">
                    <span>
                        <img src="{{asset('fontend')}}/assets/images/icon-animation/icon-2.png" alt="">
                    </span>
            </div>
            <div class="shape shape-3">
                    <span>
                        <img src="{{asset('fontend')}}/assets/images/icon-animation/icon-3.png" alt="">
                    </span>
            </div>
            <div class="shape shape-4">
                    <span>
                        <img src="{{asset('fontend')}}/assets/images/icon-animation/icon-4.png" alt="">
                    </span>
            </div>
            <div class="shape shape-5">
                    <span>
                        <img src="{{asset('fontend')}}/assets/images/icon-animation/icon-5.png" alt="">
                    </span>
            </div>
            <div class="shape shape-6">
                    <span>
                        <img src="{{asset('fontend')}}/assets/images/icon-animation/icon-6.png" alt="">
                    </span>
            </div>
            <div class="shape shape-7">
                    <span>
                        <img src="{{asset('fontend')}}/assets/images/icon-animation/icon-7.png" alt="">
                    </span>
            </div>
            <div class="shape shape-8">
                    <span>
                        <img src="{{asset('fontend')}}/assets/images/icon-animation/icon-8.png" alt="">
                    </span>
            </div>
            <div class="shape shape-9">
                    <span>
                        <img src="{{asset('fontend')}}/assets/images/icon-animation/icon-9.png" alt="">
                    </span>
            </div>
            <!-- Icon Animation End -->
        </div>
    </div>
    <!-- CTA Section End -->


    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!-- Scroll Top End -->
@endsection

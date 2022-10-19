@extends('user.master')
@section('home1') active @endsection
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

    <!-- Slider/Intro Section Start -->
    <div class="intro-slider-wrap section">
        <div class="intro-slider swiper-container">
            <div class="swiper-wrapper">
                @foreach($category as $row)
                <div class="swiper-slide">
                    <div class="intro-section section overlay" data-bg-image="{{asset($row->image)}}">

                        <div class="container">
                            <div class="row row-cols-lg-1 row-cols-1">

                                <div class="col align-self-center">
                                    <div class="intro-content mt-xl-8 mt-lg-8 mt-md-8 mt-sm-8 mt-xs-8">
                                        <h2 class="title">{{$row->title}} </h2>
                                        <div class="desc">
                                            <p>{{$row->short_description}}</p>
                                        </div>
{{--                                        <a href="#" class="btn btn-primary btn-hover-secondary">Get Started</a>--}}
                                        <a href="{{$row->link}}" target="_blank" class="btn btn-outline-white btn-hover-primary"> Learn More </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
            <div class="home-slider-prev swiper-button-prev main-slider-nav"><i class="fal fa-angle-left"></i></div>
            <div class="home-slider-next swiper-button-next main-slider-nav"><i class="fal fa-angle-right"></i>
            </div>
        </div>
    </div>
    <!-- Slider/Intro Section End -->

    <!-- About Section Start -->
    <div class="section section-padding-t90 section-padding-bottom-190">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2 class="title">Rahima Engineering & Marine (Bangladesh) Ltd.</h2>
                <p class="sub-title">Govt. 1st Class Contractor Importer, Exporter & Indentor (Domestic & International & Supplers). It will be professional service.
                </p>
            </div>
            <!-- Section Title End -->

            <!-- About Wrapper Start -->
            <div class="row">

                <!-- About Image Area Start -->
                <div class="col-xl-7 col-lg-6 col-12" data-aos="fade-up">
                    <div class="about-image-area">
                        <div class="about-image js-tilt">
                            <img src="{{asset('fontend')}}/assets/images/about/home-one-about/home_agency_about_1.jpg" alt="">
                        </div>
                        <div class="about-image js-tilt">
                            <img src="{{asset('fontend')}}/assets/images/about/home-one-about/home_agency_about_2.jpg" alt="">
                        </div>
                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                                <span data-depth="1"><img src="{{asset('fontend')}}/assets/images/shape-animation/about-shape-1.png"
                                                          alt=""></span>
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
{{--                            <span class="sub-title">Every day brings new challenges</span>--}}
                            <span class="sub-title">Managing Director</span>
                            <h3 class="title">Md. Emdadul Haque</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <p>Md. Emdaul Haque 35 years of experience and professionally qualified in construction, FRP solution, Trading & Indenting business at  domestic and abroad. We try our best to satisfy. So, you will be tension free.</p>

                        <a class="btn btn-primary btn-hover-secondary mt-xl-12 mt-lg-8 mt-md-6 mt-4" href="#">About
                            Us</a>
                    </div>
                    <!-- About Content Area Start -->
                </div>
                <!-- About Start -->

            </div>
            <!-- About Wrapper End -->

        </div>
    </div>
    <!-- About Section End -->

    <!-- Skill With Video Section Start -->
    <div class="section section-padding" data-bg-color="#f8faff">

        <div class="container">

            <div class="row">

                <div class="col-xl-5 col-lg-6 col-12" data-aos="fade-up">
                    <!-- Skill With Video Content Start -->
                    <div class="skill-with-video-content">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two mb-8">
                            <span class="sub-title">Gloxinia Trading Corporation</span>
                            <h3 class="title">Farid Ahmed</h3>
                        </div>
                        <!-- Section Title Two End -->
                        Name: Farid Ahmed

                        Gloxinia Trading Corporation



                        <!-- Agency List Start -->
                        <ul class="agency-list">
                            <li class="item">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">Appointment: Propiretor</div>
                            </li>
                            <li class="item">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">Registration No: 1274</div>
                            </li>
                            <li class="item">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">Group No. 1,2,3,4,5,6,7,8,9,10,11,12</div>
                            </li>
                            <li class="item">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">Date of Expire: 30 jun 2022</div>
                            </li>
                        </ul>
                        <!-- Agency List End -->
                    </div>
                    <!-- Skill With Video Content End -->
                </div>

                <div class="offset-xl-1 col-xl-6 col-lg-6 col-12" data-aos="fade-up">
                    <!-- Skill With Video Popup Start -->
                    <div class="video-popup-area">
                        <!-- Video Popup Start -->
                        <div class="skill-video" data-aos="fade-up">
                            <img class="image" src="{{asset('fontend')}}/assets/images/video/skill-video.jpg" alt="video popup">
{{--                            <a href="https://www.youtube.com/watch?v=eS9Qm4AOOBY" class="icon video-popup"><i--}}
{{--                                    class="fas fa-play"></i></a>--}}
                        </div>
                        <!-- Video Popup End -->

                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                                <span data-depth="1">
                                    <img src="{{asset('fontend')}}/assets/images/shape-animation/video-shape-1.png" alt="">
                                </span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                    <!-- Skill With Video Popup End -->
                </div>

            </div>

        </div>

    </div>
    <!-- Skill With Video Section End -->

    <!-- Service Section Start -->
    <div class="section section-padding-t90-b100">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center mb-12" data-aos="fade-up">
                <h2 class="title fz-32">We create a unique action plan for brands</h2>
                <p class="sub-title">Get your company heading in the right direction with our digital
                    <br> marketing strategist
                </p>
            </div>
            <!-- Section Title End -->

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">

            @foreach ($servicedown as $row)

                <!-- Icon Box Start -->
                    <div class="col mb-6" data-aos="fade-up">

                        <div class="icon-box text-center" data-vivus-hover>
                            <div class="icon"><img class="svgInject"
                                                   src="{{asset($row->image)}}" alt=""></div>
                            <div class="content">
                                <h3 class="title">{{ $row->title }}</h3>
                                <div class="desc">
                                    <p>{{ $row->short_description }}</p>
                                </div>
                                <a href="#" class="link">Learn More</a>
                            </div>
                        </div>

                    </div>

            @endforeach

                <!-- Icon Box Start -->


            </div>

        </div>
    </div>
    <!-- Service Section End -->

    <!-- Success Section Start -->
    <div class="section section-padding-top section-padding-bottom-200" data-bg-color="#f8faff">
        <div class="container">
            <div class="row">
                <!-- Success Content Start -->
                <div class="col-lg-5" data-aos="fade-up">
                    <div class="success-content">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two mb-lg-8 mb-6">
                            <span class="sub-title">Gloxinia Trading Corporation</span>
                            <h3 class="title">Gloxinia Authorization Letter</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <p class="mb-0">
                            We SPI/Mobile Pulley Works, Inc 905 South Ann Street.P.O. Box. 50010, Mobile, Alabama 36605, USA established in 1892 hereby appointed Gloxinia Trading Corporation, H#34, R#13, Sector #3, Uttara, Dhaka 1230, Bangladesh as our exclusive agent for Bangladesh market.
                            <br>We are assuring, We will provide full products and technical support to our local agent and customers where it will be needed.</p>

                        <a class="btn btn-primary btn-hover-secondary mt-xl-12 mt-lg-8 mt-md-6 mt-4" href="#">Get
                            Started</a>
                    </div>

                </div>
                <!-- Success Content End -->

                <!-- Success Image Start -->
                <div class="offset-lg-1 col-lg-6" data-aos="fade-up">


                    <div class="success-image-wrap">
                        <img src="{{asset('fontend')}}/assets/images/success/success-1.jpg" alt="success-1" width="100%">
{{--                        <div class="success-image js-tilt">--}}
{{--                            <img src="{{asset('fontend')}}/assets/images/success/success-1.jpg" alt="success-1">--}}
{{--                        </div>--}}
{{--                        <div class="success-image js-tilt">--}}
{{--                            <img src="{{asset('fontend')}}/assets/images/success/success-2.jpg" alt="success-1">--}}
{{--                        </div>--}}

                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                                <span data-depth="1"><img src="{{asset('fontend')}}/assets/images/shape-animation/video-shape-1.png"
                                                          alt="shape"></span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                </div>
                <!-- Success Image End -->
            </div>
        </div>
    </div>
    <!-- Success Section End -->

    <!-- Success Section Start -->
    <div class="section section-padding-top section-padding-bottom-200" data-bg-color="#f8faff">
        <div class="container">
            <div class="row">
                <!-- Success Content Start -->
                <div class="col-lg-5" data-aos="fade-up">
                    <div class="success-content">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two mb-lg-8 mb-6">
                            <span class="sub-title">Gloxinia Trading Corporation</span>
                            <h3 class="title">Local Executive Agent Certificate</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <p class="mb-0">
                            This is to certified that Rahima Engineering & Marine (Bangladesh) Ltd, 14/A, 31 Tejkunipara, Center Point Concord, Level-9,Suit-9/C, Tejgoan, Dhaka-1215 is our appointed as Local Exclusive Agent intends to sell A to N equipment all over Bangladesh Market for Promoting the sell of our products.
                            <br>Commission will be settled on case to case basis. In general commission will be 10% present. However in case of any project where the commission may be required to be discussed.</p>

                        <a class="btn btn-primary btn-hover-secondary mt-xl-12 mt-lg-8 mt-md-6 mt-4" href="#">Get
                            Started</a>
                    </div>

                </div>
                <!-- Success Content End -->

                <!-- Success Image Start -->
                <div class="offset-lg-1 col-lg-6" data-aos="fade-up">


                    <div class="success-image-wrap">
                        <img src="{{asset('fontend')}}/assets/images/success/rahima.jpg" alt="success-1" width="100%">
                    {{--                        <div class="success-image js-tilt">--}}
                    {{--                            <img src="{{asset('fontend')}}/assets/images/success/success-1.jpg" alt="success-1">--}}
                    {{--                        </div>--}}
                    {{--                        <div class="success-image js-tilt">--}}
                    {{--                            <img src="{{asset('fontend')}}/assets/images/success/success-2.jpg" alt="success-1">--}}
                    {{--                        </div>--}}

                    <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                                <span data-depth="1"><img src="{{asset('fontend')}}/assets/images/shape-animation/video-shape-1.png"
                                                          alt="shape"></span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                </div>
                <!-- Success Image End -->
            </div>
        </div>
    </div>
    <!-- Success Section End -->

    <!-- Portfolio Section Start -->
    <div class="section section-padding-t90 ag-masonary-wrapper">
        <div class="container-fluid px-0">
            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2 class="title fz-32">Great brands deserve even greater creative works</h2>
            </div>
            <!-- Section Title End -->

            <!-- Portfolio Menu Start -->
{{--            <div class="messonry-button text-center mb-lg-13 mb-md-13 mb-6" data-aos="fade-up">--}}
{{--                <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>--}}
{{--                <button data-filter=".cat-1"><span class="filter-text">App</span></button>--}}
{{--                <button data-filter=".cat-2"><span class="filter-text">Development</span></button>--}}
{{--                <button data-filter=".cat-3"><span class="filter-text">Marketing</span> </button>--}}
{{--                <button data-filter=".cat-4"><span class="filter-text">Software</span></button>--}}
{{--                <button data-filter=".cat-5"><span class="filter-text">UX Design</span></button>--}}
{{--            </div>--}}
            <!-- Portfolio Menu End -->

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-0 mesonry-list">
                <div class="resizer col"></div>
                <!-- Single Portfolio Start -->
                @foreach ($images as $row)


                    <div class="col cat-1 cat-3">
                        <div class="single-portfolio">
                            <div class="thumbnail">
                                <img class="img-fluid" src="{{asset($row->image)}}" alt="Portfolio-01">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">{{ $row->title }} <img
                                            src="{{asset('fontend/assets/images/icons/arrow-up-right.svg')}}" alt=""></a></h5>
                            </div>
                        </div>
                    </div>
            @endforeach
                <!-- Single Portfolio End -->
                <!-- Single Portfolio Start -->
{{--                <div class="col cat-2 cat-5">--}}
{{--                    <div class="single-portfolio">--}}
{{--                        <div class="thumbnail">--}}
{{--                            <img class="img-fluid" src="{{asset('fontend/assets/images/portfolio/portfolio-2.jpg')}}" alt="Portfolio-01">--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h5 class="title"><a href="#">Project Name #1 <img--}}
{{--                                        src="{{asset('fontend/assets/images/icons/arrow-up-right.svg')}}" alt=""></a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Single Portfolio End -->--}}
{{--                <!-- Single Portfolio Start -->--}}
{{--                <div class="col cat-3 cat-2">--}}
{{--                    <div class="single-portfolio">--}}
{{--                        <div class="thumbnail">--}}
{{--                            <img class="img-fluid" src="{{asset('fontend/assets/images/portfolio/portfolio-3.jpg')}}" alt="Portfolio-01">--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h5 class="title"><a href="#">Project Name #1 <img--}}
{{--                                        src="{{asset('fontend/assets/images/icons/arrow-up-right.svg')}}" alt=""></a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Single Portfolio End -->--}}
{{--                <!-- Single Portfolio Start -->--}}
{{--                <div class="col cat-4 cat-3">--}}
{{--                    <div class="single-portfolio">--}}
{{--                        <div class="thumbnail">--}}
{{--                            <img class="img-fluid" src="{{asset('fontend/assets/images/portfolio/portfolio-4.jpg')}}" alt="Portfolio-01">--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h5 class="title"><a href="#">Project Name #1 <img--}}
{{--                                        src="{{asset('fontend/assets/images/icons/arrow-up-right.svg')}}" alt=""></a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Single Portfolio End -->--}}
{{--                <!-- Single Portfolio Start -->--}}
{{--                <div class="col cat-5">--}}
{{--                    <div class="single-portfolio">--}}
{{--                        <div class="thumbnail">--}}
{{--                            <img class="img-fluid" src="{{asset('fontend/assets/images/portfolio/portfolio-5.jpg')}}" alt="Portfolio-01">--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h5 class="title"><a href="#">Project Name #1 <img--}}
{{--                                        src="{{asset('fontend/assets/images/icons/arrow-up-right.svg')}}" alt=""></a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Single Portfolio End -->--}}
{{--                <!-- Single Portfolio Start -->--}}
{{--                <div class="col cat-2">--}}
{{--                    <div class="single-portfolio">--}}
{{--                        <div class="thumbnail">--}}
{{--                            <img class="img-fluid" src="{{asset('fontend/assets/images/portfolio/portfolio-6.jpg')}}" alt="Portfolio-01">--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h5 class="title"><a href="#">Project Name #1 <img--}}
{{--                                        src="{{asset('fontend/assets/images/icons/arrow-up-right.svg')}}" alt=""></a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Single Portfolio End -->
            </div>
        </div>
    </div>
    <!-- Portfolio Section End -->

    <!-- Blog Section Start -->
    <div class="section section-padding-t90-b100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Two Start -->
                    <div class="section-title-two mb-lg-12 mb-md-6" data-aos="fade-up">
                        <span class="sub-title">Latest marketing news and management insights</span>
                        <h3 class="title">We bring you all the latest marketing news and the most interesting stats
                            for marketers</h3>
                    </div>
                    <!-- Section Title Two End -->
                </div>
                <div class="col-lg-4">
                    <div class="section-button text-lg-right text-left mb-md-8 mb-sm-6 mb-6" data-aos="fade-up">
                        <a href="#" class="btn btn-primary ">Visit Blog</a>
                    </div>
                </div>
            </div>

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                @foreach($news as $row)
                <div class="col mb-6" data-aos="fade-up">
                    <!-- Single Blog Start -->
                    <div class="blog">
                        <div class="thumbnail">
                            <a href="{{route('news-details',['id'=>$row->id])}}" class="image"><img src="{{asset($row->image)}}"
                                                                           alt="Blog Image"></a>
                        </div>
                        <div class="info">
                            <h3 class="title"><a href="{{route('news-details',['id'=>$row->id])}}">{{$row->title}}</a></h3>
                            <p class="desc">{{$row->short_description}}</p>
                            <a href="{{route('news-details',['id'=>$row->id])}}" class="link "> <mark>Read More</mark> </a>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Blog Section End -->


    <!-- Newsletter Section End -->

    <!-- Contact Information Section Start -->
    <div class="section section-padding-t90-b100">
        <div class="container shape-animate">
            <!-- Section Title Start -->
            <div class="section-title text-center mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                <h2 class="title fz-32">Contact us today, let’s get to know each other</h2>
                <p class="sub-title">We are ready to answer all your questions! When you partner with us,
                    <br> you get more than a contract. We are committed to your success
                </p>
            </div>
            <!-- Section Title End -->
            @include('user.includes.address')

            <!-- Animation Shape Start -->
{{--            <div class="shape shape-1 scene">--}}
{{--                <span data-depth="4"><img src="{{asset('fontend')}}/assets/images/shape-animation/video-shape-1.png" alt="shape"></span>--}}
{{--            </div>--}}
            <!-- Animation Shape End -->

        </div>
    </div>
    <!-- Contact Information Section End -->

@endsection

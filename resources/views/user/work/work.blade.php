@extends('user.master')

@section('work1') active @endsection

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
    <div class="page-title-section section section-padding-top" data-overlay="0.7" data-bg-image="{{asset('fontend')}}/assets/images/bg/breadcrumb-bg-two.jpg">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Trading Domestic and Internationally</h1>
            </div>
        </div>
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="current">Work</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Work Section Start -->
    <div class="section section-padding-t90-b100">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2 class="title fz-32"> Building and Construction, Speedboat, Steel Structure<br> Our Product details given below</h2>
            </div>
            <!-- Section Title End -->

            <!-- About Wrapper Start -->
{{--            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 mb-n6">--}}

{{--                <div class="col-md-10">--}}
                    @foreach($product as $row)
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="{{asset($row->image)}}"  alt="..." width="100%" height="300px;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body m-2">
                                    <h5 class="card-title">{{$row->name}}</h5>
                                    <p class="card-text">{{$row->short_description}}</p>
                                    <p class="card-text">Price : <small >{{$row->price}} TK.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
{{--                    <div class="card">--}}
{{--                        <div class="card-title">--}}

{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="co-md-4">--}}
{{--                                    <a class="image" href="#"><img src="{{asset('fontend/assets/images/project/project-1.jpg')}}" alt="work"></a>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <h3 class="title"><a href="#">HasThemes Development: An outstanding payment app</a></h3>--}}
{{--                                    <p class="desc">Quickly analyzing the digital business landscape, we create effective action plans and design optimal strategies.</p>--}}
{{--                                    <a href="#">View Project</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <!-- Single Work Start -->
{{--                <div class="col-md-6 mb-6" data-aos="fade-up">--}}
{{--                    <div class="work">--}}
{{--                        <div class="thumbnail">--}}
{{--                            <a class="image" href="#"><img src="{{asset('fontend/assets/images/project/project-1.jpg')}}" alt="work"></a>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-6 mb-6" data-aos="fade-up">--}}
{{--                    <div class="work">--}}
{{--                        <div class="info">--}}
{{--                            <h3 class="title"><a href="#">HasThemes Development: An outstanding payment app</a></h3>--}}
{{--                            <p class="desc">Quickly analyzing the digital business landscape, we create effective action plans and design optimal strategies.</p>--}}
{{--                            <a href="#">View Project</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <!-- Single Work End -->

            </div>
            <!-- About Wrapper End -->

{{--        </div>--}}
{{--    </div>--}}
    <!-- Work Section End -->

    <!-- CTA Section Start -->
    <div class="section section-padding-t110-b120 newsletter-section" data-overlay="0.7" data-bg-image="{{asset('fontend')}}/assets/images/bg/cta.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- CTA Content Start -->
                    <div class="cta-content text-center">
                        <!-- Section Title Start -->
                        <div class="section-title color-light text-center mb-0" data-aos="fade-up">
                            <h2 class="title fz-32">Want to start a project with us? It's so easy</h2>
                            <p class="sub-title fz-18">Whether you want to work with us or are interested in learning
                                <br> more about what we do, we’d love to hear from you.</p>
                        </div>
                        <!-- Section Title End -->
                        <a href="{{route('contact')}}" class="btn btn-primary btn-hover-secondary mt-6">Contact With Us</a>
                    </div>
                    <!-- CTA Content End -->
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
    <!-- CTA Section End -->

    <!-- About Section Start -->
{{--    <div class="section section-padding-top section-padding-bottom-190">--}}
{{--        <div class="container">--}}

{{--            <!-- About Wrapper Start -->--}}
{{--            <div class="row">--}}

{{--                <!-- About Image Area Start -->--}}
{{--                <div class="col-xl-7 col-lg-6 col-12" data-aos="fade-up">--}}
{{--                    <div class="about-image-area">--}}
{{--                        <div class="about-image js-tilt">--}}
{{--                            <img src="{{asset('fontend')}}/assets/images/about/about-8.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="about-image js-tilt">--}}
{{--                            <img src="{{asset('fontend')}}/assets/images/about/about-7.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <!-- Animation Shape Start -->--}}
{{--                        <div class="shape shape-1 scene">--}}
{{--                            <span data-depth="4"><img src="{{asset('fontend')}}/assets/images/shape-animation/about-shape-1.png" alt=""></span>--}}
{{--                        </div>--}}
{{--                        <!-- Animation Shape End -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- About Image Area Start -->--}}

{{--                <!-- About Start -->--}}
{{--                <div class="col-xl-5 col-lg-6 col-12" data-aos="fade-up">--}}
{{--                    <!-- About Content Area Start -->--}}
{{--                    <div class="about-content-area">--}}
{{--                        <!-- Section Title Two Start -->--}}
{{--                        <div class="section-title-two">--}}
{{--                            <span class="sub-title">Together we'll discover your brand's soul</span>--}}
{{--                            <h3 class="title">We practice an agnostic approach to branding</h3>--}}
{{--                        </div>--}}
{{--                        <!-- Section Title Two End -->--}}

{{--                        <p>We guide and nurture companies to be part of a very human world by creating brands that speak to the intangible and connect emotionally.</p>--}}

{{--                        <a class="btn btn-primary btn-hover-secondary mt-xl-12 mt-lg-8 mt-md-6 mt-4" href="#">Learn More</a>--}}
{{--                    </div>--}}
{{--                    <!-- About Content Area Start -->--}}
{{--                </div>--}}
{{--                <!-- About Start -->--}}

{{--            </div>--}}
{{--            <!-- About Wrapper End -->--}}

{{--        </div>--}}
{{--    </div>--}}
    <!-- About Section End -->

    <!-- Brand Section Start -->
{{--    <div class="brand-section section section-padding-bottom">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="brand-wrapper">--}}
{{--                        <div class="brand-list">--}}
{{--                            <div class="brand-carousel swiper-container" data-aos="fade-up">--}}
{{--                                <div class="swiper-wrapper">--}}
{{--                                    <div class="swiper-slide brand">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="{{asset('fontend')}}/assets/images/brand/client-logo-01.png" alt="logo image">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

{{--                                    <div class="swiper-slide brand">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="{{asset('fontend')}}/assets/images/brand/client-logo-02.png" alt="logo image">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

{{--                                    <div class="swiper-slide brand">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="{{asset('fontend')}}/assets/images/brand/client-logo-03.png" alt="logo image">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

{{--                                    <div class="swiper-slide brand">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="{{asset('fontend')}}/assets/images/brand/client-logo-04.png" alt="logo image">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

{{--                                    <div class="swiper-slide brand">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="{{asset('fontend')}}/assets/images/brand/client-logo-05.png" alt="logo image">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

{{--                                    <div class="swiper-slide brand">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="{{asset('fontend')}}/assets/images/brand/client-logo-06.png" alt="logo image">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

{{--                                    <div class="swiper-slide brand">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="{{asset('fontend')}}/assets/images/brand/client-logo-03.png" alt="logo image">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

{{--                                </div>--}}


{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Brand Section End -->

    <!-- Faq Section Start -->
{{--    <div class="faq-section section section-padding-top" data-bg-color="#f8faff">--}}
{{--        <div class="container">--}}
{{--            <div class="row row-cols-lg-2 row-cols-1 mb-n6">--}}
{{--                <!-- Faq Content Start -->--}}
{{--                <div class="col mb-6" data-aos="fade-up">--}}
{{--                    <div class="faq-content">--}}
{{--                        <!-- Section Title Two Start -->--}}
{{--                        <div class="section-title-two">--}}
{{--                            <span class="sub-title">Frequently asked questions</span>--}}
{{--                            <h3 class="title">You’ve got questions and <br> we’ve got answers</h3>--}}
{{--                        </div>--}}
{{--                        <!-- Section Title Two End -->--}}

{{--                        <div class="agency-accordion max-mb-n30" id="accordionExample">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-header" id="headingOne">--}}
{{--                                    <h5 class="mb-0">--}}
{{--                                        <a href="#" class="acc-btn border-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                            What exactly is branding?--}}
{{--                                        </a>--}}
{{--                                    </h5>--}}
{{--                                </div>--}}

{{--                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                    <div class="card-body">Branding is more than a logo and a clever tagline. Your brand tells the story of your company. It’s your message and your values. When that happens, remarkable things occur.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="card">--}}
{{--                                <div class="card-header" id="headingTwo">--}}
{{--                                    <h5 class="mb-0">--}}
{{--                                        <a href="#" class="acc-btn border-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                                            What’s the branding process like?--}}
{{--                                        </a>--}}
{{--                                    </h5>--}}
{{--                                </div>--}}
{{--                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">--}}
{{--                                    <div class="card-body">Branding is more than a logo and a clever tagline. Your brand tells the story of your company. It’s your message and your values. When that happens, remarkable things occur.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="card">--}}
{{--                                <div class="card-header" id="headingThree">--}}
{{--                                    <h5 class="mb-0">--}}
{{--                                        <a href="#" class="acc-btn border-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                                            What type of creative services do you offer?--}}
{{--                                        </a>--}}
{{--                                    </h5>--}}
{{--                                </div>--}}
{{--                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">--}}
{{--                                    <div class="card-body">Branding is more than a logo and a clever tagline. Your brand tells the story of your company. It’s your message and your values. When that happens, remarkable things occur.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Faq Content End -->--}}

{{--                <div class="col mb-6 pl-xl-12" data-aos="fade-up">--}}
{{--                    <!-- Faq Image Start -->--}}
{{--                    <div class="about-image-area faq-image-area">--}}
{{--                        <div class="about-image right-n50 js-tilt">--}}
{{--                            <img src="{{asset('fontend')}}/assets/images/faq/faq-2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="about-image js-tilt">--}}
{{--                            <img src="{{asset('fontend')}}/assets/images/faq/faq-1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <!-- Animation Shape Start -->--}}
{{--                        <div class="shape shape-1 scene">--}}
{{--                            <span data-depth="4"><img src="{{asset('fontend')}}/assets/images/shape-animation/video-shape-1.png" alt=""></span>--}}
{{--                        </div>--}}
{{--                        <!-- Animation Shape End -->--}}
{{--                    </div>--}}
{{--                    <!-- Faq Image End -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Faq Section End -->
@endsection

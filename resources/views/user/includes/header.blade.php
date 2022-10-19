<div class="header-section header-transparent sticky-header section">
    <div class="header-inner">
        <div class="container position-relative">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo Start -->
                <div class="col-xl-2 col-auto order-0">
                    <div class="header-logo">
                        <a href="{{route('home')}}">
{{--                            <img class="dark-logo" src="{{asset('fontend')}}/assets/images/logo/light-logo.png" alt="Agency Logo">--}}
{{--                            <img class="light-logo" src="{{asset('fontend')}}/assets/images/logo/light-logo.png" alt="Agency Logo">--}}
                            Rahima Eng. & Marine BDL.
                        </a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Main Menu Start -->
                <div
                    class="col-auto col-xl d-flex align-items-center justify-content-xl-center justify-content-end order-2 order-xl-1">
                    <div class="menu-column-area d-none d-xl-block position-static">
                        <nav class="site-main-menu">
                            <ul>
                                <li>
                                    <a class="@yield('home1')" href="{{route('home')}}"><span
                                            class="menu-text">Homepage</span></a>
                                </li>
                                <li>
                                    <a class="@yield('about1')" href="{{route('about')}}"><span class="menu-text">About Us</span></a>
                                </li>
                                <li>
                                    <a class="@yield('service1')" href="{{route('service')}}"><span class="menu-text">Services</span></a>
                                </li>
                                <li>
                                    <a class="@yield('work1')" href="{{route('work')}}"><span class="menu-text">Product</span></a>
                                </li>
{{--                                <li class="has-children ">--}}
{{--                                    <a class="@yield('work1')" href="{{route('work')}}"><span class="menu-text">Work</span></a>--}}
{{--                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="work.html"><span class="menu-text">Work</span></a></li>--}}
{{--                                        <li><a href="work-details.html"><span class="menu-text">Work--}}
{{--                                                            Details</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
                                <li class="has-children">
                                    <a class="@yield('blog1')" href="{{route('news-classic')}}"><span class="menu-text">Blog</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('news-classic')}}"><span class="menu-text">Blog
                                                            Classic</span></a></li>
                                        <li><a href="{{route('news-details',['id'=> 1])}}"><span class="menu-text">Blog
                                                            Details</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">

                                    @guest
                                    <a href="{{route('login')}}"><span class="menu-text">Login</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('register')}}"><span class="menu-text">Register
                                                            </span></a></li>
{{--                                        <li><a href="blog-details.html"><span class="menu-text">Blog--}}
{{--                                                            Details</span></a></li>--}}
                                    </ul>
                                    @endguest
                                    @auth
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                    @endauth
                                </li>
                                <li>
                                    <a class="@yield('contact1')" href="{{route('contact')}}"><span class="menu-text">Contact Us</span></a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/file/d/1tzy3j0PZpz-hKMgLLQcTl4exJYd6BRXM/view?usp=sharing"><span class="menu-text">Profile</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Search Start -->
                    <div class="header-search-area ml-xl-7 ml-0">

                        <!-- Header Login Start -->
{{--                        <div class="header-search">--}}
{{--                            <a href="javascript:void(0)" class="header-search-toggle"><i--}}
{{--                                    class="pe-7s-search pe-2x pe-va"></i></a>--}}
{{--                        </div>--}}
                        <!-- Header Login End -->
                    </div>
                    <!-- Header Search End -->

                    <!-- Header Mobile Menu Toggle Start -->
                    <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                        <button class="toggle">
                            <i class="icon-top"></i>
                            <i class="icon-middle"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                    <!-- Header Mobile Menu Toggle End -->
                </div>
                <!-- Header Main Menu End -->

                <!-- Header Right Start -->
{{--                <div class="col-xl-2 col d-none d-sm-flex justify-content-end order-1 order-xl-2">--}}
{{--                    <a href="{{route('contact')}}" class="btn btn-light btn-hover-primary">Contact Us</a>--}}
{{--                </div>--}}
                <!-- Header Right End -->

            </div>
        </div>
    </div>
</div>

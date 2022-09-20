@extends('frontend.layout.main')

@section('content')
    <!-- Main content Start -->
    <div class="main-content">

        @include('frontend.partials.header')

        <!-- Slider Start -->
        <div id="rs-slider" class="rs-slider slider-style3">
            <div class="slider-carousel3 owl-carousel">
                <!-- Slide 1 -->
                <div class="slider slide1">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-6 order-last">
                                <div class="image-part">
                                    <img src="{{ asset('assets/frontend/images/graphic-design.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content-part">
                                    <div class="slider-des">
                                        <span class="sl-sub-title">We Do</span>
                                        <h2 class="sl-title">Graphics<br>Designing</h2>
                                    </div>
                                    <ul class="slider-bottom">
                                        <li>
                                            <a class="readon orange-hire get-red" href="{{ route('contact') }}">Get
                                                Started</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="slider slide1">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-6 order-last">
                                <div class="image-part">
                                    <img src="{{ asset('assets/frontend/images/ux-design.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content-part">
                                    <div class="slider-des">
                                        <span class="sl-sub-title">We Do</span>
                                        <h2 class="sl-title">UI/UX<br>Designing</h2>
                                    </div>
                                    <ul class="slider-bottom">
                                        <li>
                                            <a class="readon orange-hire get-red" href="{{ route('contact') }}">Get
                                                Started</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="slider slide2">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-6 order-last">
                                <div class="image-part">
                                    <img src="{{ asset('assets/frontend/images/website-designing.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content-part">
                                    <div class="slider-des">
                                        <span class="sl-sub-title">We Do</span>
                                        <h2 class="sl-title">Website<br>Designing</h2>
                                    </div>
                                    <ul class="slider-bottom">
                                        <li>
                                            <a class="readon orange-hire get-red" href="{{ route('contact') }}">Get
                                                Started</a>
                                        </li>
                                        {{-- <li>
                                            <a class="readon orange-hire resume2" href="{{ route('contact') }}"><span
                                                    class="btn-text">View Portfolio</span><i
                                                    class="fa flaticon-right-arrow"></i></a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="slider slide2">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-6 order-last">
                                <div class="image-part">
                                    <img src="{{ asset('assets/frontend/images/website-development.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content-part">
                                    <div class="slider-des">
                                        <span class="sl-sub-title">We Do</span>
                                        <h2 class="sl-title">Website<br>Development</h2>
                                    </div>
                                    <ul class="slider-bottom">
                                        <li>
                                            <a class="readon orange-hire get-red" href="{{ route('contact') }}">Get
                                                Started</a>
                                        </li>
                                        {{-- <li>
                                                            <a class="readon orange-hire resume2" href="{{ route('contact') }}"><span
                                                                    class="btn-text">View Portfolio</span><i
                                                                    class="fa flaticon-right-arrow"></i></a>
                                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 5-->
                <div class="slider slide2">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-6 order-last">
                                <div class="image-part">
                                    <img src="{{ asset('assets/frontend/images/app-development.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content-part">
                                    <div class="slider-des">
                                        <span class="sl-sub-title">We Do</span>
                                        <h2 class="sl-title">App<br>Development</h2>
                                    </div>
                                    <ul class="slider-bottom">
                                        <li>
                                            <a class="readon orange-hire get-red" href="{{ route('contact') }}">Get
                                                Started</a>
                                        </li>
                                        {{-- <li>
                                                                            <a class="readon orange-hire resume2" href="{{ route('contact') }}"><span
                                                                                    class="btn-text">View Portfolio</span><i
                                                                                    class="fa flaticon-right-arrow"></i></a>
                                                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider End -->


        <!-- Services Section Start -->
        <div class="rs-services services-main-home bg1 pt-145 pb-150 md-pt-75 md-pb-80">
            <div class="container custom">
                <div class="sec-title text-center mb-55 md-mb-35">
                    <span class="sub-text">
                        What We Do
                    </span>
                    <h2 class="title">
                        Services we can<br>
                        help you.
                    </h2>
                </div>
                @include('frontend.partials.services')
            </div>
        </div>
        <!-- Services Section End -->


        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img3">
            <div class="container">
                <div class="breadcrumbs-inner services-style">
                    <div class="row y-middle">
                        <div class="col-lg-6">
                            <div class="breadcrumbs-wrap mb-48">
                                <h2 class="page-title">
                                    We Help You Build a Brand
                                </h2>
                                <p class="description">
                                    We at Vibrant Technologies ensure that all your digital marketing services are fulfilled
                                    according to your requirements. The dynamic, adaptable, and full-service digital
                                    marketing organization Vibrant Technologies doesn't entice new customers with pretenses.

                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="{{ asset('assets/frontend/images/breadcrumbs/images/service-image.png') }}"
                                    alt="Images">
                            </div>
                        </div>
                    </div>
                    <div class="shape-animation">
                        <div class="triangle">
                            <img class="spine" src="{{ asset('assets/frontend/images/breadcrumbs/shape/img4.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Services Section Start -->
        <div class="rs-services services-style3 services-modify4 black-bg4 pt-125 pb-130 md-pt-70 md-pb-80">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-4 pr-18 md-pr-15 md-mb-50">
                        <div class="sec-title2">
                            <h2 class="title title3 white-color pb-35">
                                Why Choose Us?
                            </h2>
                            <p class="desc white-color pb-50 md-pb-35">
                                We keep up with present trends and advances, investigate various marketing approaches, and
                                test them through our internal campaigns to see which ones produce the best results to give
                                our clients a clear route to success.
                            </p>
                            <div class="btn-part">
                                <a class="readon red get-bdr get-white" href="{{ route('contact') }}">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-40">
                                <div class="services-item">
                                    <div class="services-wrap">
                                        <div class="services-img">
                                            <img src="{{ asset('assets/frontend/images/services/style3/ser1.png') }}"
                                                alt="Images">
                                        </div>
                                        <div class="services-content">
                                            <h2 class="title">Innovation is our key</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-40">
                                <div class="services-item">
                                    <div class="services-wrap">
                                        <div class="services-img">
                                            <img src="{{ asset('assets/frontend/images/services/style3/ser2.png') }}"
                                                alt="Images">
                                        </div>
                                        <div class="services-content">
                                            <h2 class="title">Quality Matters</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 md-mb-40">
                                <div class="services-item">
                                    <div class="services-wrap">
                                        <div class="services-img">
                                            <img src="{{ asset('assets/frontend/images/services/style3/ser3.png') }}"
                                                alt="Images">
                                        </div>
                                        <div class="services-content">
                                            <h2 class="title">Happy Clients</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="services-item">
                                    <div class="services-wrap">
                                        <div class="services-img">
                                            <img src="{{ asset('assets/frontend/images/services/style3/ser4.png') }}"
                                                alt="Images">
                                        </div>
                                        <div class="services-content">
                                            <h2 class="title">Offices World Wide</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        @include('frontend.partials.testimonial')

        <!-- Partner Start -->
        <div class="rs-partner partner-main-home pt-60 pb-20">
            <div class="container custom">
                <div class="slider partner-slide-1">
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="https://devsdesign.net/">
                                <img class="hovers-logos rs-grid-img"
                                    src="{{ asset('assets/frontend/images/partner/style1/1.png') }}" title=""
                                    alt="">
                                <img class="mains-logos rs-grid-img "
                                    src="{{ asset('assets/frontend/images/partner/style1/1.png') }}" title=""
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="https://devsdesign.net/">
                                <img class="hovers-logos rs-grid-img"
                                    src="{{ asset('assets/frontend/images/partner/style1/2.png') }}" title=""
                                    alt="">
                                <img class="mains-logos rs-grid-img "
                                    src="{{ asset('assets/frontend/images/partner/style1/2.png') }}" title=""
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="https://devsdesign.net/">
                                <img class="hovers-logos rs-grid-img"
                                    src="{{ asset('assets/frontend/images/partner/style1/3.png') }}" title=""
                                    alt="">
                                <img class="mains-logos rs-grid-img "
                                    src="{{ asset('assets/frontend/images/partner/style1/3.png') }}" title=""
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="https://devsdesign.net/">
                                <img class="hovers-logos rs-grid-img"
                                    src="{{ asset('assets/frontend/images/partner/style1/4.png') }}" title=""
                                    alt="">
                                <img class="mains-logos rs-grid-img "
                                    src="{{ asset('assets/frontend/images/partner/style1/4.png') }}" title=""
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="https://devsdesign.net/">
                                <img class="hovers-logos rs-grid-img"
                                    src="{{ asset('assets/frontend/images/partner/style1/5.png') }}" title=""
                                    alt="">
                                <img class="mains-logos rs-grid-img "
                                    src="{{ asset('assets/frontend/images/partner/style1/5.png') }}" title=""
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner End -->

        <!-- Cta Start -->
        <div class="rs-cta cta-style1 red-bg pt-145 pb-145">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="title title3 white-color pb-45">
                        Create stunning Design<br>
                        services with Swipy
                    </h2>
                    <div class="btn-part">
                        <a class="readon red cta-contact" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="cta-animation">
                <div class="animate-style one">
                    <img class="scale" src="{{ asset('assets/frontend/images/cta/shape1.png') }}" alt="">
                </div>
                <div class="animate-style two">
                    <img class="scale" src="{{ asset('assets/frontend/images/cta/shape2.png') }}" alt="">
                </div>
                <div class="animate-style three">
                    <img class="horizontal" src="{{ asset('assets/frontend/images/cta/shape3.png') }}" alt="">
                </div>
                <div class="animate-style four">
                    <img class="spine" src="{{ asset('assets/frontend/images/cta/shape4.png') }}" alt="">
                </div>
            </div>
        </div>
        <!-- Cta End -->

    </div>
    <!-- Main content End -->
@endsection

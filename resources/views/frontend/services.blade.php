@extends('frontend.layout.main')

@section('content')
    <!-- Main content Start -->
    <div class="main-content">

        @include('frontend.partials.header-white')

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img3">
            <div class="container">
                <div class="breadcrumbs-inner services-style">
                    <div class="row y-middle">
                        <div class="col-lg-6">
                            <div class="breadcrumbs-wrap mb-48">
                                <h2 class="page-title">
                                    We build modern experiences
                                </h2>
                                <p class="description">Enim tortor at auctor urna nunc id metus. Purus ut faucibus<br>
                                    pulvinar integer neque them volute pateget.</p>
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
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-35">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/icons1.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">Digital Marketing</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.
                                    </p>
                                    <div class="services-button">
                                        <a href="{{ route('digital-marketing') }}">
                                            <span class="btn-text">
                                                Read More
                                            </span>
                                            <i class="fi fi-rr-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-35">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/icons2.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">Video Production</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.
                                    </p>
                                    <div class="services-button">
                                        <a href="{{ route('video-production') }}">
                                            <span class="btn-text">
                                                Read More
                                            </span>
                                            <i class="fi fi-rr-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-35">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/icons3.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">Graphics Design</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.
                                    </p>
                                    <div class="services-button">
                                        <a href="{{ route('graphics-design') }}">
                                            <span class="btn-text">
                                                Read More
                                            </span>
                                            <i class="fi fi-rr-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-35">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/icons4.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">UX Design</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.
                                    </p>
                                    <div class="services-button">
                                        <a href="{{ route('ux-design') }}">
                                            <span class="btn-text">
                                                Read More
                                            </span>
                                            <i class="fi fi-rr-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-35">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/icons5.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">Web Designing</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.
                                    </p>
                                    <div class="services-button">
                                        <a href="{{ route('web-design') }}">
                                            <span class="btn-text">
                                                Read More
                                            </span>
                                            <i class="fi fi-rr-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-35">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/icons5.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">Web Development</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.
                                    </p>
                                    <div class="services-button">
                                        <a href="{{ route('web-development') }}">
                                            <span class="btn-text">
                                                Read More
                                            </span>
                                            <i class="fi fi-rr-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-35">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/icons5.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">Mobile App Development</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.
                                    </p>
                                    <div class="services-button">
                                        <a href="{{ route('app-development') }}">
                                            <span class="btn-text">
                                                Read More
                                            </span>
                                            <i class="fi fi-rr-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/icons6.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">eCommerce</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.
                                    </p>
                                    <div class="services-button">
                                        <a href="{{ route('ecom') }}">
                                            <span class="btn-text">
                                                Read More
                                            </span>
                                            <i class="fi fi-rr-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/icons6.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">SEO</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.
                                    </p>
                                    <div class="services-button">
                                        <a href="{{ route('seo') }}">
                                            <span class="btn-text">
                                                Read More
                                            </span>
                                            <i class="fi fi-rr-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Skillbar Choose Start -->
        <div class="rs-skillbar skillbar-style1 black-bg6 pt-150 pb-150 md-pt-80 md-pb-65">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-50">
                        <div class="skill-img">
                            <img src="{{ asset('assets/frontend/images/about/about-img4.png') }}" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-title mb-45 md-mb-25">
                            <span class="sub-text text3">Advantage</span>
                            <h2 class="title white-color pb-30">
                                We Help Innovators Bring Their Business To Life
                            </h2>
                            <p class="desc desc3">
                                I create digital ideas that are bigger, bolder, braver and better. We believe in good ideas
                                flexibility and precission We’re world’s Our Special Team. Desktop publishing packages
                            </p>
                        </div>
                        <!-- Skillbar Section Start -->
                        <div class="cl-skill-bar">
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Figma</span>
                            <div class="skillbar" data-percent="95">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent">95%</span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Adobe XD</span>
                            <div class="skillbar" data-percent="65">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent">65%</span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Sketch</span>
                            <div class="skillbar" data-percent="85">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent">85%</span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Adobe Photosho & Illustrator</span>
                            <div class="skillbar" data-percent="70">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent">70%</span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Adobe After Effect</span>
                            <div class="skillbar" data-percent="80">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent">80%</span>
                            </div>
                        </div>
                        <!-- Skillbar Section End -->
                    </div>
                </div>
            </div>
            <div class="skill-animation">
                <div class="skill-animate">
                    <img class="scale" src="{{ asset('assets/frontend/images/about/about-shape2.png') }}" alt="Images">
                </div>
            </div>
        </div>
        <!-- Skillbar Choose End -->

        <!-- Project Start -->
        <div class="rs-project project-style1 project-modify10 pt-145 pb-150 md-pt-75 md-pb-80">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 mb-50">
                        <div class="sec-title">
                            <span class="sub-text primary-color">
                                portfolio
                            </span>
                            <h2 class="title">
                                Our latest projects
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-button pro-btn4 pro-orange text-right mt--35 text-right md-left md-mb-70">
                            <a class="portfolio-single-column.html" href="contact.html">
                                See All Project
                                <i class="fa fi fi-rr-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="portfolio-single-column.html">
                                    <img src="{{ asset('assets/frontend/images/project/style1/port1.jpg') }}" alt="Images">
                                </a>
                            </div>
                            <div class="project-content">
                                <span class="category"><a href="portfolio-single-column.html">Branding</a></span>
                                <h3 class="title"><a href="portfolio-single-column.html">Webi UI Redesign</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="portfolio-single-column.html">
                                    <img src="{{ asset('assets/frontend/images/project/style1/port2.jpg') }}" alt="Images">
                                </a>
                            </div>
                            <div class="project-content">
                                <span class="category"><a href="portfolio-single-column.html">Branding</a></span>
                                <h3 class="title"><a href="portfolio-single-column.html">Book Cover</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 md-mb-30">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="portfolio-single-column.html">
                                    <img src="{{ asset('assets/frontend/images/project/style1/port3.jpg') }}" alt="Images">
                                </a>
                            </div>
                            <div class="project-content">
                                <span class="category"><a href="portfolio-single-column.html">Branding</a></span>
                                <h3 class="title"><a href="portfolio-single-column.html">Mockup Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="portfolio-single-column.html">
                                    <img src="{{ asset('assets/frontend/images/project/style1/port4.jpg') }}" alt="Images">
                                </a>
                            </div>
                            <div class="project-content">
                                <span class="category"><a href="portfolio-single-column.html">Branding</a></span>
                                <h3 class="title"><a href="portfolio-single-column.html">Nike Air Max</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project End -->

        <!-- Cta Start -->
        <div class="rs-cta cta-style1  blue-bg pt-145 pb-145">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="title title3 white-color pb-45">
                        Create stunning Design<br>
                        services with Swipy
                    </h2>
                    <div class="btn-part">
                        <a class="readon orange contact" href="contact.html">Contact Us</a>
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

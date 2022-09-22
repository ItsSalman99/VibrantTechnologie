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
                                    Our Services
                                </h2>
                                <p class="description">
                                    With the help of our selection of digital marketing services, you may reach customers at
                                    every stage of the sales process. Our digital solutions enable you to boost your brand's
                                    exposure across search, social media, display, and more, whether as a stand-alone effort
                                    or as a coordinated element of an integrated performance marketing strategy.
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
        <div class="">
            <div class="container custom">
                <div class="sec-title text-center mb-55 md-mb-35">
                    <span class="sub-text">
                        What We Do?
                    </span>
                    <h2 class="title">
                        Services we can<br>
                        help you.
                    </h2>
                    <p class="my-4">
                        We give your business the right breakthrough with the most productive digital marketing solutions.
                        We are dedicated to offering you <br> top-notch services that provide superior business outcomes.
                        Check
                        out what we have got in our depot for you.
                    </p>
                </div>
                @include('frontend.partials.services')
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
                                One-Stop Solution for All Your Digital Marketing Needs
                            </h2>
                            <p class="desc desc3">
                                We create digital ideas that are bigger, bolder, braver and better. We believe in good ideas
                                flexibility and precission We’re world’s Our Special Team.
                            </p>
                        </div>
                        <!-- Skillbar Section Start -->
                        <div class="cl-skill-bar">
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Graphics Designing</span>
                            <div class="skillbar" data-percent="95">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent">95%</span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Website Designing & Development</span>
                            <div class="skillbar" data-percent="90">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent">90%</span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Digital Marketing</span>
                            <div class="skillbar" data-percent="85">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent">85%</span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Search Engine Optimization</span>
                            <div class="skillbar" data-percent="70">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent">70%</span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Video Productions</span>
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
                    <img class="scale" src="{{ asset('assets/frontend/images/about/about-shape2.png') }}"
                        alt="Images">
                </div>
            </div>
        </div>
        <!-- Skillbar Choose End -->

        <!-- Cta Start -->
        <div class="rs-cta cta-style1  blue-bg pt-145 pb-145">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="title title3 white-color pb-45">
                        Create stunning Design<br>
                        services with Swipy
                    </h2>
                    <div class="btn-part">
                        <a class="readon orange contact" href="{{ route('contact') }}">Contact Us</a>
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

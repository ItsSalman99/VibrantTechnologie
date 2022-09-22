@extends('frontend.layout.main')

@section('content')
    <!-- Main content Start -->
    <div class="main-content">

        @include('frontend.partials.header')

        @include('frontend.partials.slider')

        <!-- Services Section Start -->
        <div class="" style="margin-top: 100px; margin-bottom: 100px;">
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
                    <div class="col-lg-6 pr-18 md-pr-15 md-mb-50">
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
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/frontend/images/about/about-4.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        @include('frontend.partials.testimonial')

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

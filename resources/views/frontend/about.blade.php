@extends('frontend.layout.main')

@section('content')
    <!-- Main content Start -->
    <div class="main-content">

        @include('frontend.partials.header-white')

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <div class="row y-middle">
                        <div class="col-lg-6">
                            <div class="breadcrumbs-wrap">
                                <h1 class="page-title">
                                    Get To Know Vibrant Technologies
                                </h1>
                                <p class="description">
                                    Vibrant Technologies is a rapidly expanding IT company that offers comprehensive IT
                                    solutions to organizations worldwide. We provide IT experience in UI/UX design, digital
                                    marketing, and the creation of software, websites, and applications (for iOS and
                                    Android).
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img class="js-tilt" src="{{ asset('assets/frontend/images/about/about-banner.png') }}"
                                    alt="Images">
                            </div>
                        </div>
                    </div>
                    <div class="shape-animation">
                        <div class="ball-animate">
                            <img class="scale" src="{{ asset('assets/frontend/images/breadcrumbs/shape/img1.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- About Start -->
        <div class="rs-about about-style1 pt-150 pb-150 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-50">
                        <div class="sec-title">
                            <span class="sub-text primary-color">
                                About Vibrant Technologie
                            </span>
                            <h2 class="title pb-35">
                                Our Services Are Proven To Increase Sales
                            </h2>
                            <p class="desc pb-60 md-pb-40">
                                The digital marketing solutions offered by Vibrant Technologies were created to meet the
                                demands of expanding concerns. Everything about our facilities, including our pricing and
                                delivery methods, is customized to meet your company's needs.
                            </p>
                            <!-- Counter Start -->
                            <div class="rs-counter counter-style1 counter-modify4">
                                <div class="row">
                                    <div class="col-lg-4 md-mb-30">
                                        <div class="rs-counter-list">
                                            <div class="count-text">
                                                <div class="count-number">
                                                    <span class="rs-count">10</span>
                                                    <span class="prefix">K+</span>
                                                </div>
                                                <span class="title">Year of experience</span>
                                            </div>
                                            <div class="separator-dot"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 md-mb-30">
                                        <div class="rs-counter-list">
                                            <div class="count-text">
                                                <div class="count-number">
                                                    <span class="rs-count">234</span>
                                                    <span class="prefix">K+</span>
                                                </div>
                                                <span class="title">Simply services views on</span>
                                            </div>
                                            <div class="separator-dot"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="rs-counter-list">
                                            <div class="count-text">
                                                <div class="count-number">
                                                    <span class="rs-count">10</span>
                                                    <span class="prefix">K+</span>
                                                </div>
                                                <span class="title">Get unique experience</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img2">
                            <img src="{{ asset('assets/frontend/images/about/about-img2.png') }}" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Services Section Start -->
        <div class="rs-services services-style5 black-bg2 pt-125 pb-130 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-50 md-mb-35">
                    <span class="sub-text">
                        Services
                    </span>
                    <h2 class="title white-color">
                        Services we can Offer
                    </h2>
                </div>
                <div class="row y-middle">
                    <div class="col-xl-4 col-md-6 xl-mb-30">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 450px;">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/graphic-design.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Graphics <br> Designing</h2>
                                    <p class="services-txt">
                                        Our creative designers can design anything, whether you desire a flat design, a
                                        skeuomorphic experience, a brutalist style, or a simple feel.
                                    </p>
                                </div>
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
                    <div class="col-xl-4 col-md-6 xl-mb-30">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 450px;">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/digital-marketing.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Digital <br> Marketing</h2>
                                    <p class="services-txt">
                                        Let's be truthful. You are alert of what you require, but you are unsure of how to
                                        acquire it. That is a common complaint among SEO clients who get in touch with
                                        Vibrant Technologies.
                                    </p>
                                </div>
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
                    <div class="col-xl-4 col-md-6 sm-mb-30">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 450px;">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/video-production.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Video <br> Production</h2>
                                    <p class="services-txt">
                                        Surge the effectiveness of your digital marketing campaigns by utilizing video. We
                                        are a creative company that creates top-notch video content from beginning to end.
                                    </p>
                                </div>
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
                    <div class="col-xl-4 col-md-6">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 450px;">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/uiux-design.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">UI/UX <br> Design</h2>
                                    <p class="services-txt">
                                        With Vibrant Technologie's UI/UX development services, you can streamline your
                                        technologically complicated goods while increasing online traffic with dynamic
                                        features and contemporary design aesthetics.
                                    </p>
                                </div>
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
                    <div class="col-xl-4 col-md-6" style="margin-top: 20px;">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 450px;">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/web-design.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Website <br> Designing</h2>
                                    <p class="services-txt">
                                        It entails creating and maintaining websites that enhance their functionality and
                                        aesthetic appeal while providing a solid user experience.
                                    </p>
                                </div>
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
                    <div class="col-xl-4 col-md-6" style="margin-top: 20px;">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 450px;">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/web-development.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Website Development</h2>
                                    <p class="services-txt">
                                        We make websites and softwares with the implementation of business logic and
                                        functionality that gives you more leads with the quality.
                                    </p>
                                </div>
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
                    <div class="col-xl-4 col-md-6" style="margin-top: 20px;">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 450px;">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/app-development.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Mobile App Development</h2>
                                    <p class="services-txt">
                                        Writing software for portable, wireless computing devices are part of creating
                                        mobile apps.
                                    </p>
                                </div>
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
                    <div class="col-xl-4 col-md-6" style="margin-top: 20px;">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 450px;">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/ecommerce.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Ecommerce <br> Services</h2>
                                    <p class="services-txt">Mauris commodo quis the imperdiet tincidunt.</p>
                                </div>
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
                    <div class="col-xl-4 col-md-6" style="margin-top: 20px;">
                        <div class="services-item">
                            <div class="services-wrap" style="height: 450px;">
                                <div class="services-img">
                                    <img src="{{ asset('assets/frontend/images/services/main-home/seo.png') }}"
                                        alt="Images">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">SEO</h2>
                                    <p class="services-txt">
                                        Let's be truthful. You are alert of what you require, but you are unsure of how to
                                        acquire it. That is a common complaint among SEO clients who get in touch with
                                        Vibrant Technologies.
                                    </p>
                                </div>
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
            </div>
        </div>
        <!-- Services Section End -->


        <!-- Faq Section Start -->
        <div class="rs-faq faq-style1 faq-modify2 bg3 pt-160 pb-160 md-pt-80 md-pb-70">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-50">
                        <div class="faq-img2">
                            <img src="{{ asset('assets/frontend/images/faq/img2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-100 md-pl-15 pr-30 md-pr-15">
                        <div class="sec-title mb-55">
                            <span class="sub-text primary-color">
                                Work Process
                            </span>
                            <h2 class="title">
                                WE HAVE PASSION FOR OUR CRAFT
                            </h2>
                        </div>
                        <div class="faq-content">
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" href="#" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true">Analysis & Idea</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            With two decades of experience and a presence across the globe, our teams work
                                            as a cohesive unit to ensure we go above and beyond to deliver to our diverse
                                            customer base worldwide.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" href="#" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false">Designing</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion" style="">
                                        <div class="card-body">
                                            With the help of the designing services provided by Vibrant Technologie,
                                            establish your online presence today and learn about your market potential.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" href="#" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false">Development</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-bs-parent="#accordion" style="">
                                        <div class="card-body">
                                            To achieve high conversion and adoption rates, Vibrant Technologie
                                            professionally develops and provides ongoing support for your business needs.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" href="#" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false">Testing & Lunuch</a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-bs-parent="#accordion" style="">
                                        <div class="card-body">
                                            We build websites on test servers so you can view the progress and use them
                                            immediately. It lets you see how the site is structured and make changes before
                                            it goes live.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq Section End -->

        <!-- Cta Start -->
        <div class="rs-cta cta-style1  blue-bg pt-145 pb-145">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="title title3 white-color pb-45">
                        Create stunning Design<br>
                        with Vibrant Technologies
                    </h2>
                    <div class="btn-part">
                        <a class="readon orange contact" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="cta-animation">
                <div class="animate-style one">
                    <img class="scale" src="assets/images/cta/shape1.png" alt="">
                </div>
                <div class="animate-style two">
                    <img class="scale" src="assets/images/cta/shape2.png" alt="">
                </div>
                <div class="animate-style three">
                    <img class="horizontal" src="assets/images/cta/shape3.png" alt="">
                </div>
                <div class="animate-style four">
                    <img class="spine" src="assets/images/cta/shape4.png" alt="">
                </div>
            </div>
        </div>
        <!-- Cta End -->

    </div>
    <!-- Main content End -->
@endsection

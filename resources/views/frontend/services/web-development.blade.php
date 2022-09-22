@extends('frontend.layout.main')

@section('content')
    <!-- Main content Start -->
    <div class="main-content">

        @include('frontend.partials.header-white')

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img4">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <div class="row y-middle">
                        <div class="col-lg-7">
                            <div class="breadcrumbs-wrap mb-48 md-mb-0">
                                <h2 class="page-title">
                                    Web Development Services
                                </h2>
                                <p class="description">
                                    To achieve high conversion and adoption rates, Vibrant Technologie professionally
                                    develops and provides ongoing support for customer-facing and enterprise web apps.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about-img">
                                <img src="{{ asset('assets/frontend/images/breadcrumbs/images/service-details.png') }}"
                                    alt="Images">
                            </div>
                        </div>
                    </div>
                    <div class="shape-animation">
                        <div class="dot-animate">
                            <img class="scale" src="{{ asset('assets/frontend/images/breadcrumbs/shape/img2.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Services Section Start -->
        <div class="rs-services services-details bg3 pt-160 pb-160 md-pt-80 md-pb-80">
            <div class="container">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-50">
                            <div class="ser-details">
                                <img class="js-tilt"
                                    src="{{ asset('assets/frontend/images/services/services-details/img1.png') }}"
                                    alt="About">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <span class="sub-text primary-color">Web Development</span>
                                <h2 class="title pb-35">
                                    Cross-platform & Responsive Web Development
                                </h2>
                                <p class="desc pb-45">
                                    We offer responsive websites that function effectively across all screen sizes and
                                    browsers. Whether your users use a PC, tablet, or smartphone is unimportant. We ensure a
                                    seamless and fantastic experience regardless of the browser customers use on any device.
                                </p>
                                <ul class="check-lists check-style4">
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">Follow The Digital Trends & Lead</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">The Biggest Brands Always Take Risks</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">Let’s Business & Grow Together</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Process Section Start -->
        <div class="rs-process process-style1 gray-bg14 pt-155 pb-160 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-50 md-mb-30">
                    <span class="sub-text primary-color">work process</span>
                    <h2 class="title pb-35">
                        Our Work Speaks For Itself
                    </h2>
                </div>
                <div class="row y-middle">
                    <div class="col-lg-5 md-mb-50">
                        <div class="process-work">
                            <img class="js-tilt"
                                src="{{ asset('assets/frontend/images/services/services-details/img2.png') }}"
                                alt="About">
                        </div>
                    </div>
                    <div class="col-lg-7 pl-60 md-pl-15">
                        <div class="sec-title">
                            <span class="sub-text primary-color">Process</span>
                            <h2 class="title pb-35">
                                Secured Development Environment for your Web Project
                            </h2>
                            <p class="desc pb-35">
                                We build websites on test servers so you can view the progress and use them immediately. It
                                lets you see how the site is structured and make changes before it goes live. Until it is
                                finished, the website is hosted on our server. The website gets moved to the live server
                                once it is prepared.
                            </p>
                            <ul class="check-lists check-style4">
                                <li class="list-item">
                                    <span class="icon-list-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </span>
                                    <span class="list-text">Follow The Digital Trends & Lead</span>
                                </li>
                                <li class="list-item">
                                    <span class="icon-list-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </span>
                                    <span class="list-text">The Biggest Brands Always Take Risks</span>
                                </li>
                                <li class="list-item">
                                    <span class="icon-list-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </span>
                                    <span class="list-text">Let’s Business & Grow Together</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="process-wireframe pt-130 md-pt-80">
                    <div class="row y-middle">
                        <div class="col-lg-7 pr-60 md-pr-15 md-mb-50">
                            <div class="sec-title">
                                <span class="sub-text primary-color">Process</span>
                                <h2 class="title pb-35">
                                    Web Portals
                                </h2>
                                <p class="desc pb-35">
                                    Vibrant Technologie has developed online portals for various groups, including clients,
                                    business partners, e-commerce customers, clients, vendors, and interest-based
                                    communities.
                                </p>
                                <ul class="check-lists check-style4">
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">Follow The Digital Trends & Lead</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">The Biggest Brands Always Take Risks</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">Let’s Business & Grow Together</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="process-work wireframe-img">
                                <img class="js-tilt"
                                    src="{{ asset('assets/frontend/images/services/services-details/img3.png') }}"
                                    alt="About">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process-development pt-130 md-pt-80">
                    <div class="row y-middle">
                        <div class="col-lg-5 md-mb-50">
                            <div class="process-work development-img">
                                <img class="js-tilt"
                                    src="{{ asset('assets/frontend/images/services/services-details/img4.png') }}"
                                    alt="About">
                            </div>
                        </div>
                        <div class="col-lg-7 pl-60 md-pl-15">
                            <div class="sec-title">
                                <span class="sub-text primary-color">Process</span>
                                <h2 class="title pb-35">
                                    CMS-based Website Development
                                </h2>
                                <p class="desc pb-35">
                                    To produce engaging content that entices your target audience, we employ a variety of
                                    Content Management System platforms, including custom-developed CMS, WordPress
                                    development services, Drupal development services, Joomla development services, and
                                    OScommerce development services.
                                </p>
                                <ul class="check-lists check-style4">
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">Follow The Digital Trends & Lead</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">The Biggest Brands Always Take Risks</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">Let’s Business & Grow Together</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process-testing pt-130 md-pt-80">
                    <div class="row y-middle">
                        <div class="col-lg-6 pr-77 md-pr-15 md-mb-50">
                            <div class="sec-title">
                                <span class="sub-text primary-color">Process</span>
                                <h2 class="title pb-35">
                                    E-Commerce Website Development
                                </h2>
                                <p class="desc pb-35">
                                    We understand how to build e-commerce websites that genuinely sell your stuff because we
                                    are one of the top web development companies for businesses. As a web development firm
                                    for e-commerce, we assist you in expanding your company online by creating an online
                                    store. Along with providing E-commerce development services, we also offer support for
                                    local payment gateway connections, logistics management software, and self-service
                                    content management systems (CMS), which you can use to track sales, add new products,
                                    and more.
                                </p>
                                <ul class="check-lists check-style4">
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">Follow The Digital Trends & Lead</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">The Biggest Brands Always Take Risks</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">Let’s Business & Grow Together</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-20 md-pl-15">
                            <div class="process-work testing-img">
                                <img class="js-tilt"
                                    src="{{ asset('assets/frontend/images/services/services-details/img5.png') }}"
                                    alt="About">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process Section End -->

        <!-- Cta Start -->
        <div class="rs-cta cta-style1  blue-bg pt-145 pb-145">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="title title3 white-color pb-45">
                        Let's Talk Business!
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

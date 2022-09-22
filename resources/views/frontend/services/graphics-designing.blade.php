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
                                    Graphic Design Services
                                </h2>
                                <p class="description">
                                    The high-caliber designers provide the best graphic design services at Vibrant
                                    Technologie.
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
                                <span class="sub-text primary-color">Graphic Design</span>
                                <h2 class="title pb-35">
                                    Get The Perfect Blend Of Creativity And Technology
                                </h2>
                                <p class="desc pb-45">
                                    In a world full of visual cacophony, it's challenging to stand out. Although businesses
                                    utilize videos and photographs to attract clients more, amazing visuals will set you
                                    apart from the competition. To back you in finding the ideal balance of creativity, we
                                    offer expert graphic design services. Our creative team has years of experience creating
                                    logos, 3D animations, infographics, videos, and more. You may rely on our experience to
                                    ensure that your images hold the interest of your audience.
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
                        Take Your Brand To Life With Our Comprehensive Work
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
                                Functional Yet Elegant
                            </h2>
                            <p class="desc pb-35">
                                Our goal is to produce a beautiful, highly practical design that will aid you in reaching
                                your professional objectives. Our website's layout is strong and capable of serving your
                                company's needs.
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
                                    Highly Innovative
                                </h2>
                                <p class="desc pb-35">
                                    Our staff knows that the website's success is directly related to design innovation.
                                    Therefore, our principal focus is on creating a very original site design for you.
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
                                    Consistency
                                </h2>
                                <p class="desc pb-35">
                                    When building a website, we focus on keeping uniformity in all regards. Every banner and
                                    graphic our designers create will align with your objectives and content.
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
                                    Creative
                                </h2>
                                <p class="desc pb-35">
                                    Without creative components, web design is useless. Our main goal is to combine
                                    innovation and creativity. As a result, we stay on course and keep coming up with
                                    innovative site designs.
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
                        We Serve, Not Sell
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

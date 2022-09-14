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
                                    Search Engine Optimization
                                </h2>
                                <p class="description">Enim tortor at auctor urna nunc id metus. Purus ut faucibus<br>
                                    pulvinar integer neque them volute pateget.</p>
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
                                <span class="sub-text primary-color">Services details</span>
                                <h2 class="title pb-35">
                                    Strategy for the digital brand.
                                </h2>
                                <p class="desc pb-45">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut est nibh, fermentum sit amet
                                    libero vitae, aliquam dignissim dolor. Morbi commodo arcu velit, nec tempus ligula
                                    dictum sagittis.
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
                        Let’s Know Our Design<br>
                        Process
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
                                Analysis & Idea
                            </h2>
                            <p class="desc pb-35">
                                Velit dignissim sodales ut eu sem. Mauris vitae ultricies leo integer. Morbi leo urna
                                molestie at elementum. Euismod lacinia at quis risus sed. Nulla facilisi cras fermentum
                                pretium vitae.
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
                                    Wireframs & Phototype
                                </h2>
                                <p class="desc pb-35">
                                    Velit dignissim sodales ut eu sem. Mauris vitae ultricies leo integer. Morbi leo urna
                                    molestie at elementum. Euismod lacinia at quis risus sed. Nulla facilisi cras fermentum
                                    pretium.
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
                                    Development
                                </h2>
                                <p class="desc pb-35">
                                    Velit dignissim sodales ut eu sem. Mauris vitae ultricies leo integer. Morbi leo urna
                                    molestie at elementum. Euismod lacinia at quis risus sed. Nulla facilisi cras fermentum
                                    pretium. Vitae semper quis lectus nulla at volutpat diam ut venenatis.
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
                                    Testing & Lunch
                                </h2>
                                <p class="desc pb-35">
                                    Velit dignissim sodales ut eu sem. Mauris vitae ultricies leo integer. Morbi leo urna
                                    molestie at elementum. Euismod lacinia at quis risus sed. Nulla facilisi cras fermentum
                                    pretium. Vitae semper quis lectus nulla at volutpat diam ut venenatis.
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

        <!-- Project Start -->
        <div class="rs-project project-style1 project-modify10 pt-145 pb-150 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-50">
                    <span class="sub-text primary-color">portfolio</span>
                    <h2 class="title">
                        Our Latest <span>Projects</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 md-mb-30">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="#">
                                    <img src="assets/images/project/style1/port8.jpg" alt="Images">
                                </a>
                            </div>
                            <div class="project-content">
                                <span class="category"><a href="#">Graphic Design</a></span>
                                <h3 class="title"><a href="#">Orla Branding</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="#">
                                    <img src="assets/images/project/style1/port7.jpg" alt="Images">
                                </a>
                            </div>
                            <div class="project-content">
                                <span class="category"><a href="#">Graphic Design</a></span>
                                <h3 class="title"><a href="#">Nike Ari Women</a></h3>
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

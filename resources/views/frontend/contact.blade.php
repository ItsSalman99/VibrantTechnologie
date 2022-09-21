@extends('frontend.layout.main')

@section('content')
    <!-- Main content Start -->
    <div class="main-content">

        @include('frontend.partials.header-white')

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img8">
            <div class="container">
                <div class="breadcrumbs-inner contact-inner-style">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-50">
                            <div class="breadcrumbs-wrap">
                                <h1 class="page-title">
                                    We're All About Relationships and Results
                                </h1>
                                <p class="description">
                                    We help you build your brand and gather potential clients for your business.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="team-img">
                                <img class="js-tilt"
                                    src="{{ asset('assets/frontend/images/breadcrumbs/images/contact.png') }}"
                                    alt="Images">
                            </div>
                        </div>
                    </div>
                    <div class="shape-animation">
                        <div class="team-animate">
                            <img class="scale" src="{{ asset('assets/frontend/images/breadcrumbs/shape/img5.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Start -->
        <div class="rs-contact contact-style2 contact-modfiy5 pt-130 md-pt-80">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 pr-135 md-pr-15 md-mb-50">
                        <div class="sec-title">
                            <h2 class="title title2 pb-35">
                                Let's Have A Conversation!
                            </h2>
                            <p class="desc pb-60">
                                Our team is available for you and will deliver proven results every time. What are you
                                waiting for? Get in touch with us now!
                            </p>
                        </div>
                        <div class="address-boxs mb-30">
                            <div class="address-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="address-text">
                                <div class="text">
                                    <span class="label">Email:</span>
                                    <span class="des">
                                        info@vibranttechnologie.com
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="address-boxs">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="address-text">
                                <div class="text">
                                    <span class="label">Phone:</span>
                                    <span class="des">
                                        (00) 456 1122 7890
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-wrap">
                            <div id="form-messages"></div>
                            <form method="post" action="{{ route('send-mail') }}">
                                @csrf
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-12 mb-30">
                                            <label>Name</label>
                                            <input class="from-control" type="text" id="name" name="name"
                                                placeholder="Enter Your name" required="">
                                        </div>
                                        <div class="col-lg-12 mb-30">
                                            <label>Email</label>
                                            <input class="from-control" type="text" id="email" name="email"
                                                placeholder="Enter your email address" required="">
                                        </div>
                                        <div class="col-lg-12 mb-30">
                                            <label> How can we help you?</label>
                                            <textarea class="from-control" id="message" name="message" placeholder="Type your messags here" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-part">
                                        <div class="form-group mb-0">
                                            <p class="submit-btn submit-stle2">
                                                <input type="submit" value="Submit Now">
                                            </p>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-canvas pt-130 md-pt-80">
                <iframe
                    src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
            </div>
        </div>
        <!-- Contact End -->
    </div>
    <!-- Main content End -->
@endsection

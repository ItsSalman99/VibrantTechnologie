<!--Full width header Start-->
<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header header-style1 header-modify1 header-transparent">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row-table">
                    <div class="col-cell header-logo">
                        <div class="logo-area">
                            <a href="/">
                                <img class="normal-logo" src="{{ asset('assets/frontend/images/logo-light.png') }}"
                                    alt="logo">
                                <img class="sticky-logo" src="{{ asset('assets/frontend/images/logo.png') }}"
                                    alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <nav class="rs-menu hidden-md">
                                    <ul class="nav-menu">
                                        <li>
                                            <a href="/">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}">About</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}">Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="expand-btn-inner">
                            <ul>
                                <li class="nav-link">
                                    <a id="nav-expander" class="nav-expander bar" href="#">
                                        <div class="bar">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Canvas Menu start -->
        <nav class="right_menu_togle menu-wrap-off  hidden-md">
            <div class="close-btn">
                <a id="nav-close" class="nav-close">
                    <div class="line">
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                </a>
            </div>
            <div class="rs-offcanvas-inner">
                <div class="canvas-logo">
                    <a href="/"><img src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo"></a>
                </div>
                <div class="offcanvas-text">
                    <p>Suspendisse interdum consectetur libero id. Fermentum leo vel orci porta non. Euismod
                        viverra nibh cras pulvinar suspen.</p>
                </div>
                <div class="canvas-contact">
                    <div class="address-area">
                        <h2 class="widget-title">Get In Touch</h2>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="fi fi-rr-envelope-plus"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Email</h4>
                                <em><a href="mailto:support@devsdesign.net">support@devsdesign.net</a></em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="fi fi-rr-phone-call"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Phone</h4>
                                <em><a href="tel:(00)45611227890">(00) 456 1122 7890</a></em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="fi fi-rr-map-marker-home"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Location</h4>
                                <em>Riverside 255, San Francisco, USA</em>
                            </div>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Canvas Menu end -->

        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
            <div class="close-btn">
                <a id="nav-close2" class="nav-close">
                    <div class="line">
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                </a>
            </div>
            <ul class="nav-menu">
                <li>
                    <a href="/">Home</a>
                </li>
                <li class="menu-item-has-children current-menu-item">
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="#">Multipages O1</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a href="index-3.html">Home 03</a></li>
                                <li><a href="index-4.html">Home 04</a></li>
                                <li><a href="index-5.html">Home 05</a></li>
                                <li><a href="index-6.html">Home 06</a></li>
                                <li><a href="index-7.html">Home 07</a></li>
                                <li><a href="index-8.html">Home 08</a></li>
                                <li><a href="index-9.html">Home 09</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Multipages O2</a>
                            <ul class="sub-menu">
                                <li><a href="index-10.html">Home 10</a></li>
                                <li><a href="index-11.html">Home 11</a></li>
                                <li><a href="index-12.html">Home 12</a></li>
                                <li><a href="index-13.html">Home 13</a></li>
                                <li><a href="index-14.html">Home 14</a></li>
                                <li class="active"><a href="index-15.html">Home 15</a></li>
                                <li><a href="index-16.html">Home 16</a></li>
                                <li><a href="index-17.html">Home 17</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="last-item menu-item-has-children">
                    <a href="#">About</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="about-me.html">About Me</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="services.html">Services</a></li>
                        <li><a href="services-details.html">Services Details</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-single.html">Team Single</a></li>
                        <li><a href="price-table.html">Price Table</a></li>
                        <li><a href="price-table-switcher.html">Price Table Switcher</a></li>
                        <li><a href="testimonial.html">Testimonial</a></li>
                        <li class="last-item menu-item-has-children">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-single.html">Shop Single</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li class="last-item menu-item-has-children">
                    <a href="#">Portfolio</a>
                    <ul class="sub-menu">
                        <li><a href="portfolio-two-column.html">Portfolio Two Column</a></li>
                        <li><a href="portfolio-three-column.html">Portfolio Three Column</a></li>
                        <li><a href="portfolio-four-column.html">Portfolio Four Column</a></li>
                        <li><a href="portfolio-single-column.html">Portfolio Single Column</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul> <!-- //.nav-menu -->
            <!-- //.nav-menu -->

            <!-- //.nav-menu -->
            <div class="canvas-contact">
                <div class="address-area">
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="fi fi-rr-map-marker-home"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Contact</h4>
                            <em>31 New Street, NY, USA</em>
                        </div>
                    </div>
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="fi fi-rr-envelope-plus"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Email</h4>
                            <em><a href="mailto:info@konstruk.com">Info@konstruk.com</a></em>
                        </div>
                    </div>
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="fi fi-rr-phone-call"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Free Call</h4>
                            <em>+019988772</em>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>
<!--Full width header End-->

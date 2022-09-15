<!DOCTYPE html>
<html lang="eng">

@include('frontend.partials.head')

<body class="defult-home">

    <div class="offwrap"></div>

    <!--Preloader start here-->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('assets/frontend/images/fav.png') }}" alt="Swipy Creative Agency Html Template ">
                </div>
            </div>
        </div>
    </div>
    <!--Preloader area end here-->

    @yield('content')

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer footer-main-home footer-modify10">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-3 pr-20 md-pr-15 md-mb-20">
                        <div class="footer-logo mb-85 md-mb-65">
                            <a href="/"><img src="{{ asset('assets/frontend/images/logo-light.png') }}" alt=""></a>
                        </div>
                        <p class="widget-desc">You will get weekly update on Email</p>
                        <p>
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <input type="submit" value="Subscribe">
                        </p>
                        <ul class="footer-social md-mb-30">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 md-mb-10 pl-90 md-pl-15">
                        <h3 class="footer-title">Services</h3>
                        <ul class="site-map">
                            <li><a href="services-details.html">Digital Marketing</a></li>
                            <li><a href="services-details.html">Video Production</a></li>
                            <li><a href="services-details.html">UX Design</a></li>
                            <li><a href="services-details.html">Web Development</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 md-mb-10 pl-80 md-pl-15">
                        <h3 class="footer-title">Resources</h3>
                        <ul class="site-map">
                            <li><a href="about.html">About</a></li>
                            <li><a href="portfolio-two-column.html">Portfolio Two Column</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-title">Information</h3>
                        <ul class="address-widget">
                            <li>
                                <div class="desc">
                                    Ta-134/A, Gulshan Badda<br>Link
                                    Rd, Dhaka
                                </div>
                            </li>
                            <li>
                                <div class="desc">
                                    <a href="tel:(+880)15569569365">(+880)155 69569 365</a><br>
                                </div>
                            </li>
                            <li>
                                <div class="desc">
                                    <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="desc">
                                    <a href="mailto:infoname@gmail.com">infoname@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="bottom-border">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                            <ul class="copy-right-menu">
                                <li><a href="about-me.html">About Me</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright text-lg-start text-center">
                                <p>© 2022 Vibrant Technologies
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="red-color4">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="{{ asset('assets/frontend/js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- op nav js -->
    <script src="{{ asset('assets/frontend/js/jquery.nav.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('assets/frontend/js/skill.bars.jquery.js') }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <!-- waypoints.min js -->
    <script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- counterup.min js -->
    <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <!-- contact form js -->
    <script src="{{ asset('assets/frontend/js/contact.form.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>

<!-- Mirrored from rstheme.com/products/html/swipy/index-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 13:10:54 GMT -->

</html>

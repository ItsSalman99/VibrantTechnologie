<!DOCTYPE html>
<html lang="eng">

@include('frontend.partials.head')

<body class="defult-home">

    <div class="offwrap"></div>

    <!--Preloader start here-->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('assets/frontend/images/fav.png') }}"
                        alt="Swipy Creative Agency Html Template ">
                </div>
            </div>
        </div>
    </div>
    <!--Preloader area end here-->

    @yield('content')

    @include('frontend.partials.footer')

    <!-- start scrollUp  -->
    <div id="scrollUp" class="red-color4">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

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

    @include('sweetalert::alert')

</body>

</html>

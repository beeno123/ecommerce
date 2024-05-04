<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>FoodPark || Restaurant Template</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/jquery.exzoom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"
        integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/custom.css') }}">
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>
    <div class="overlay-container">
        <div class="overlay">
            <span class="loader"></span>
        </div>
    </div>

    <!--=============================
        TOPBAR START
    ==============================-->
    @include('frontend.components.top_bar')
    <!--=============================
        TOPBAR END
    ==============================-->


    <!--=============================
        MENU START
    ==============================-->
    @include('frontend.components.navbar')

    @include('frontend.components.cart_area')

    @include('frontend.components.reservation')
    <!--=============================
        MENU END
    ==============================-->


    @yield('content')

    <!--=============================
        FOOTER START
    ==============================-->
    @include('frontend.components.footer')
    <!--=============================
        FOOTER END
    ==============================-->


    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="fp__scroll_btn">
        go to top
    </div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->

    @include('frontend.global_script')
    <!--jquery library js-->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('frontend/assets/js/Font-Awesome.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!-- isotop js -->
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- simplyCountdownjs -->
    <script src="{{ asset('frontend/assets/js/simplyCountdown.js') }}"></script>
    <!-- counter up js -->
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countup.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ asset('frontend/assets/js/venobox.min.js') }}"></script>
    <!-- sticky sidebar js -->
    <script src="{{ asset('frontend/assets/js/sticky_sidebar.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- ex zoom js -->
    <script src="{{ asset('frontend/assets/js/jquery.exzoom.js') }}"></script>

    <!--main/custom js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
        integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>

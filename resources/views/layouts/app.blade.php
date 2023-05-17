<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') - The</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-5.1.3/css/bootstrap.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styleAdmin.css') }}">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome6.1.1/css/all.css') }}">
    <!-- Boxicons CSS-->
    <link rel="stylesheet" href="{{ asset('assets/modules/boxicons/css/boxicons.min.css') }}">
</head>

<body>

    <!--Topbar -->
    <div class="topbar transition">
        @include('layouts.navbar')
    </div>


    <!--Sidebar-->
    <div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
        @include('layouts.sidebar')
    </div><!-- End Sidebar-->

    <div class="sidebar-overlay"></div>

    <!--Content Start-->
    <div class="content-start transition  ">
        @yield('content')
    </div><!-- End Content-->

    <!-- Footer -->
    <footer>
        @include('layouts.footer')
    </footer>


    <!-- Preloader -->
    <div class="loader">
        <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Loader -->
    <div class="loader-overlay"></div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/atrana.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('assets/modules/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper/popper.min.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scriptAdmin.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>

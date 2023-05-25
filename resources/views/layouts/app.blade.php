<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - The Kost</title>

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset(asset('assets/css/main/bootstrap.css')) }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png" />
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.sidebar')
        </div>

        <div id="main" class="layout-navbar">
            <header class="mb-3">
                @include('layouts.navbar')
            </header>
            <div id="main-content">
                @yield('content')
                {{-- <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Vertical Layout with Navbar</h3>
                                <p class="text-subtitle text-muted">
                                    Navbar will appear on the top of the
                                    page.
                                </p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Layout Vertical Navbar
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Example Content</h4>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Consectetur quas omnis
                                laudantium tempore exercitationem, expedita
                                aspernatur sed officia asperiores unde
                                tempora maxime odio reprehenderit distinctio
                                incidunt! Vel aspernatur dicta consequatur!
                            </div>
                        </div>
                    </section>
                </div> --}}

                <footer>
                    @include('layouts.footer')
                </footer>
            </div>
        </div>
    </div>
    {{-- <script src="assets/js/bootstrap.js"></script> --}}
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    {{-- <script src="assets/js/app.js"></script> --}}
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>

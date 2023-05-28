<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - The Kost</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset(asset('assets/css/main/bootstrap.css')) }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}" /> --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png" />
</head>

<body>
    {{-- <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="{{ route('dashboard.home') }}"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="{{ route('dashboard.home') }}">
                <img src="{{ asset('assets/images/logo/logo.svg') }}">
            </a>
        </div>
    </nav> --}}


    <div class="container">
        <div class="card mt-5">
            @yield('content')
        </div>

    </div>


</body>

</html>

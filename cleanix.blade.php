<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cleanix.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light shadow-sm bg-cyan  ">
        <div class="container ">
            <a class="navbar-brand fw-bold " href="{{ url('/') }}">
                Cleanix
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ms-auto  ">
                    <li class="nav-item "><a href="/" class="nav-link fw-bold ">Home</a></li>
                    <li class="nav-item "><a href="#" class="nav-link ">Our Services</a></li>
                    <li class="nav-item "><a href="#" class="nav-link ">About Us</a></li>
                    <li class="nav-item "><a href="#" class="nav-link ">Reviews</a></li>
                    <li class="nav-item "><a href="#" class="nav-link ">Contact Us</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    <button class="btn btn-cyan rounded-pill uppercase">Book Now</button>
            </div>
        </div>
    </nav>
    <header class="container-fluid  ">
        <div class="row image-holder flex align-items-center ">
            <div class="col-12 col-lg-6 ms-auto text-center ">
                <h1 class="text-uppercase heading-text mb-5">Your #1 One Stop Cleaning Services</h1>
                <button class="btn btn-white rounded-pill">Book Now</button>
            </div>
        </div>
        <div class="row overlay "></div>
    </header>
    <div class="container-fluid services">
        <div class="row p-5">
            <div class="col-12 col-lg-6">
                <p class="text-uppercase fw-bold text-decoration-underline text-secondary">Our Services</p>
                <h2 class="heading2">We’ve got the help you need for your cleaning problems!</h2>
            </div>

        </div>

    </div>
</body>


</html>
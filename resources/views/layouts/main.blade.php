<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bark House - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="@yield('page')">
    <div class="header">
        <div class="menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo.png') }}" />
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto upper">
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-target="breeds">Breeds <i class="icofont-rounded-down"></i></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-target="resources">Resources <i class="icofont-rounded-down"></i></a>
                            </li>
                        </ul>

                        <span class="navbar-text">
                            <ul class="lower">
                                <li><i class="icofont-search-2"></i></li>
                                <li><a href="#">Sign Up</a></li>
                                <li><a href="#">Log In</a></li>
                            </ul>
                        </span>
                    </div>
                </nav>
            </div>
        </div>

        <div class="dropdown-content breeds">
            <div class="container">
                <ul>
                    <li><a href="#">Cat</a></li>
                    <li><a href="#">Dogs</a></li>
                </ul>
            </div>
        </div>

        <div class="dropdown-content resources active">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">TinDogs</a></li>
                    <li><a href="#">Breeds</a></li>
                    <li><a href="#">Adopt Me</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="footer">
        <div class="container">
            <div class="copyright">
                Copyright &copy; 2021 BarkHouse. All rights reserved.
            </div>

            <div class="social">
                <i class="icofont-twitter"></i>
                <i class="icofont-facebook"></i>
                <i class="icofont-instagram"></i>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
    @yield('scripts')
</body>

</html>
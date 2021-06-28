<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bark House - @yield('title')</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="@yield('page')">
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 logo"><img src="{{ asset('images/logo.png') }}" /></div>

                <div class="col-sm-10 menu">
                    <ul>
                        <li><a href="#">Polls</a></li>
                        <li><a href="#">Surveys</a></li>
                        <li><a href="#">Quizzes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
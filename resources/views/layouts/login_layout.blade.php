<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<body class="@yield('page')">
    <script src="{{ asset('js/menu.js') }}"></script>
    @yield('scripts')
</body>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('bootstrap-5.2.3-dist/js/bootstrap.css') }}" defer></script>
    <script src="{{ asset('jquery.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
</html>
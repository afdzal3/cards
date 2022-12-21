<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('bootstrap-5.2.3-dist/js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('jquery.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.css') }}" rel="stylesheet">
    <style>
    .scroll {
    max-height: 50em;
    overflow-y: scroll;
    scrollbar-width: 10px;
    scrollbar-color: red;
}
::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 10px;
}

::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 0, 0, .5);
  box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}

    </style>
</head>
<body>
    <div class="container-fluid mt-5">
    @yield('content')
    </div>
</body>
</html>
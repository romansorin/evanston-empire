<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('stylesheets')
</head>

<body>
    <div id="app">
        <div class="header-hero-bg">
            @include('layouts.main.header')
            @yield('content')
            @include('layouts.main.footer')
            {{-- header-hero-bg div is closed inside the content --}}
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
</body>

</html>
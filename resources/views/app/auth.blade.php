<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
        @yield('stylesheets')  
</head>
<body>
	<div id="app">
    @auth
        <div class="container-scroller">
        @include('layouts.auth.header')
        <div class="container-fluid page-body-wrapper">
        @include('layouts.auth.sidebar')
        <div class="main-panel">
    @endauth
    @yield('content')
    @auth
        @include('layouts.auth.footer')
        </div> 
        </div>
        </div>
    @endauth
    </div>
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/dashboard/off-canvas.js') }}"></script>
    <script src="{{ asset('js/dashboard/misc.js') }}"></script>
    <script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
    <script src="{{ asset('js/dashboard/file-upload.js') }}"></script>
</body>
</html>
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
            {{-- Interior div is closed inside the content --}}
        </div>
        @yield('scripts')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
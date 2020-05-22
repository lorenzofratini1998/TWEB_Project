<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" > 
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <title>@yield('title', 'Home')</title> <!-- -->
        <!--<script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>-->
    </head>
    <body>
        <header id="header">
            <a href="{{route('home')}}" class="headerLogo"><img src="{{asset('images/logoApp.png')}}" id="logo"></a>
             <div id="menu">@include('layouts/menuPublic')</div>
        </header>
        <div style="margin: 0">
            @yield('content')
        </div>
        <footer id="footer">
            <a href="{{route('privacyPolicy')}}">
                 Privacy Policy
            </a>
            <a href="{{ route('where') }}">
                <p>Vieni a trovarci!</p>
            </a>
        </footer>
    </body>
</html>

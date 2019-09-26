<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<title>Глваный</title>--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    {{--<link rel="stylesheet" href="css/owl.carousel.min.css">--}}
    {{--<link rel="stylesheet" href="css/style.css">--}}
    <!-- theme for android -->
    <meta name="theme-color" content="#000000">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>АСФАЛЬТИРОВАНИЯ</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav style="background: #000000" class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a style="color: #fecd57; font-weight: bold; margin-right: 50px" class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button style="background: #fecd57; outline: none" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li style="margin-right: 20px"><a style="color: #fecd57; font-weight: bold" href="{{ route('homeUl') }}">Home Ul</a></li>
                        <li style="margin-right: 20px"><a style="color: #fecd57; font-weight: bold" href="{{route('adminAbout')}}">About</a></li>
                        <li style="margin-right: 20px"><a style="color: #fecd57; font-weight: bold" href="{{ route('workPrice')}}">Price</a></li>
                        <li style="margin-right: 20px"><a style="color: #fecd57; font-weight: bold" href="{{ route('work') }}">Work</a></li>
                        <li style="margin-right: 20px"><a style="color: #fecd57; font-weight: bold" href="{{ url('/admin/contact') }}">Contact</a></li>
                        <li style="margin-right: 20px"><a style="color: #fecd57; font-weight: bold" href="{{ route('upload') }}">Upload</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a style="color: #fecd57; font-weight: bold" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div style="background: rgba(0, 0, 0, 0.5)" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="color: #fecd57; font-weight: bold" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>



<style>
    .container-lg {
    margin-left: 0;
    }


    .nav-bk4 {
        background: #070000;
        background: -webkit-linear-gradient(to right, #070000, #4C0001, #070000);
        background: linear-gradient(to right, #070000, #4C0001, #070000);
    }

</style>


<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark nav-bk4 shadow-sm justify-content-start">

                <a class="navbar-brand img-fluid" href="{{ url('/') }}">
                    <img src="{{ asset('img/game__storage__play__server__database-512.png') }}" alt="dataIkona">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="container-lg">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('najhry') }}">Rebríček najlepších hier</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('wall') }}">Nástenka</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kontakt') }}">Kontakt</a>
                        </li>
                        @auth()
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('upload') }}">Nahrať</a>
                        </li>
                        @endauth


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">O nás</a>
                        </li>



                        @auth
                            <a class="nav-link" href="{{ route('user.index') }}">{{ __('Users') }}</a>
                        @endauth

                    </ul>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->


                        @guest
                            @if (Route::has('login'))

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

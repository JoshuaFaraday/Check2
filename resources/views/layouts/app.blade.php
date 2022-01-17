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
    <script src="https://kit.fontawesome.com/ad88ba0062.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/myCss.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


    <!-- Latest compiled JavaScript carousel na stranke about -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
<div class="d-flex flex-column min-vh-100" id="app">
    <nav class="navbar navbar-expand-md navbar-dark nav-bk4 shadow-sm justify-content-start">

        <a class="navbar-brand img-fluid" href="{{ url('/') }}">
            <img src="{{ asset('img/game__storage__play__server__database-512.png') }}" alt="dataIkona">
{{--            {{ config('app.name', 'Laravel') }}--}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container-lg">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('topGames') }}">Games</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts') }}">Posts</a>
                    </li>

                    @auth()
                        {{--                        <li class="nav-item">--}}
                        {{--                            <a class="nav-link" href="{{ route('upload') }}">Upload post</a>--}}
                        {{--                        </li>--}}
                        @if(Auth::user()->id == 1)
                            <li><a class="nav-link" href="{{ route('admin.users') }}">{{ __('Admin-Users') }}</a></li>
                            <li><a class="nav-link" href="{{ route('admin.games') }}">{{ __('Admin-Games') }}</a></li>
                            <li><a class="nav-link" href="{{ route('admin.posts') }}">{{ __('Admin-Posts') }}</a></li>

                        @endif
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id)}}">
                                {{ __('Edit') }}
                            </a>

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

    <footer class="bg-dark text-center text-white p-2 navbar-dark border-top  border-danger mt-auto ">

        <div class="d-flex flex-row justify-content-center navbar-nav">

            <a class="nav-link mr-2" href="{{ route('about') }}">About us</a>

            <a class="nav-link mr-2" href="{{ route('contact') }}">Contact</a>
            <!-- Instagram -->
            <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #ac2bac;"
                href="https://www.instagram.com/budfri.sk/"
                target="_blank"
                role="button"
            ><i class="fab fa-instagram"></i
                ></a>

            <!-- Github -->
            <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #333333;"
                href="https://github.com/JoshuaFaraday/Check2.git"
                target="_blank"
                role="button"
            ><i class="fab fa-github"></i
                ></a>
        </div>
    </footer>
</div>
</body>
</html>

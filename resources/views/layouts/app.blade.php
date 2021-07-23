<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BoolBnB') }} @yield('title') </title>

    {{-- Header Script --}}
    @yield('header-scripts')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- fontowsome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    {{-- Icon --}}
    <link rel="icon" href="{{asset('img/logo-small.png')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Inline styles: for braintree --}}
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="logo">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src={{asset('img/logo.png')}} alt="Logo">
                        </a>     
                    </div>

                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ml-auto">
                        @guest
                        {{-- Only Logged users can see these two sections --}}
                        @else
                        <li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.apartments.index') }}">
                                    Lista appartamenti
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.apartments.create') }}">
                                    Aggiungi un nuovo appartamento
                                </a>
                            </li>

                        </li>
                        @endguest

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
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
            </div>
        </nav>

        <main>
            @yield('content')
            @yield('guest-homepage')
            @yield('list-apartment')
            @yield('dashboard')
            @yield('show')
            @yield('message-box')
            @yield('braintree-content')
        </main>
    </div>

    {{-- Footer Script --}}
    @yield('footer-scripts')

    <footer class="bg-footer">
        <div class="container-fluid" >

            <div class="footer-flex">
                <div class="logo-small">
                    <img src="{{ asset('img/logo-small-grey.png') }}" alt="">
                </div>
    
                <a class="github-logo" href="https://github.com/GianlucaBar/boolBnB-team7">
                    <i class="fab fa-github-square"></i>
                </a>
    
                <ul class="social">
                    <li>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                    </li>
    
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
    
                    <li>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
    
                    <li>
                        <a href="#"><i class="fab fa-youtube-square"></i></a>
                    </li>
                </ul>
            </div>

            <div class="copyright centered">
                <ul>
                    <li class="dev-block">
                        <span class="dev-name">Alessandro Baccelli</span>
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>

                                <a href="#"><i class="fab fa-github-square"></i></a>
                            </li>
                        </ul>
                    </li>

                    <li class="dev-block">
                        <span class="dev-name">Gianluca Barcè</span>
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>

                                <a href="#"><i class="fab fa-github-square"></i></a>
                            </li>
                        </ul>
                    </li>

                    <li class="dev-block">
                        <span class="dev-name">Manuel Bonini</span>
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>

                                <a href="#"><i class="fab fa-github-square"></i></a>
                            </li>
                        </ul>
                    </li>

                    <li class="dev-block">
                        <span class="dev-name">Maurizio Piacenza</span>
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>

                                <a href="#"><i class="fab fa-github-square"></i></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </footer>

</body>
</html>
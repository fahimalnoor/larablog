<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Blog') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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

                            <li class="nav-item">
                            <div class="nav-item" aria-labelledby="nav-item">
                
                                    <a class="nav-link" href="{{ route('home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('home-form').submit();">
                                        {{ __('Home') }}
                                    </a>

                                    
                            </li>

                            <li class="nav-item">

                            <a class="nav-link" href="{{ route('allposts') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('allposts-form').submit();">
                                        {{ __('All Posts') }}
                                    </a>
                                </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                
                                    <a class="dropdown-item" href="{{ route('profile') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                        {{ __('Profile') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('newpost') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('newpost-form').submit();">
                                        {{ __('Create New Post') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ url('home/myposts/'.Auth::user()->email) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('myposts-form').submit();">
                                        {{ __('Your Posts') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="home-form" action="{{ route('home') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
                                    <form id="profile-form" action="{{ route('profile') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
                                    <form id="newpost-form" action="{{ route('newpost') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
                                    <form id="allposts-form" action="{{ route('allposts') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
                                    <form id="myposts-form" action="{{ url('home/myposts/'.Auth::user()->email) }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
                        
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

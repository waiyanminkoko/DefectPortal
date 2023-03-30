<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Logo Icons -->
    <link rel="icon" sizes="192x192" href="/static/android-icon-192x192.png">
    <link rel="apple-touch-icon" href="/static/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/static/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/static/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/static/apple-icon-152x152.png">
    <link rel="shortcut icon" href="/static/favicon.ico"/>

    <!--Local CSS-->
    <!--<link href="{{ asset('/css/styles.css') }}" rel="stylesheet" type="text/css" >-->
    <link href="/css/styles.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HCIBS Defect Portal</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand container-fluid" href="{{ url('/') }}">
                  <img src="/static/hcibslogo.png" alt="HCIBS Logo" width="32" height="32" class="d-inline-block align-text-top">
                  HCIBS Facilities Management Portal
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Defect Portal
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="z-index: 1;">
                                    <h5 class="dropdown-item">
                                         Welcome, {{ Auth::user()->name }}
                                    </h5>

                                    <a class="dropdown-item" href="/dashboard">
                                        {{ __('Defect Dashboard') }}
                                    </a>


                                    <!--<a class="dropdown-item" href="/defect_form_user">
                                        {{ __('Defect Form User') }}
                                    </a>-->

                                    <a class="dropdown-item" href="/defect_form_user_laravel">
                                        {{ __('Defect Form User') }}
                                    </a>

                                    <!--<a class="dropdown-item" href="/defect_form_admin">
                                        {{ __('Defect Form Admin') }}
                                    </a>-->

                                    <a class="dropdown-item" href="/defect_form_admin_laravel">
                                        {{ __('Defect Form Admin') }}
                                    </a>

                                    <a class="dropdown-item" href="/defect_report">
                                        {{ __('Defect Report') }}
                                    </a>


                                    <a class="dropdown-item" href="/logistics">
                                        {{ __('Logisitics') }}
                                    </a>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        <!--Cross Site Forgery attacks on web applications.
                                        CSRF attacks are the unauthorized activities which the authenticated users of the system perform-->
                                    </form>

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="container-fluid text-left" >
              <div class="col col-lg-12">
                @include('inc.messages')
                @yield('content')

                </div>
            </div>
          </div>




        </main>
</body>
</html>

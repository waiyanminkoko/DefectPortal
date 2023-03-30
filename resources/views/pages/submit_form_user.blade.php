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
    <!--<link href="static/styles.css" rel="stylesheet">-->

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
                <a class="navbar-brand container-fluid" href="{{ url('/defect_form_user') }}">
                  <img src="/static/hcibslogo.png" alt="HCIBS Logo" width="32" height="32" class="d-inline-block align-text-top">
                  HCIBS Defect Portal
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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <h2 style = "font-weight: bold;">Successfully Submited</h2>

            <h4><a href ="/defect_form_user">Submit another Form</a></h4>

        </main>
</body>
</html>

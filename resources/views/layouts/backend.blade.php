<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="jquery-3.4.1.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/backend.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
</head>
<body>
    <header id="header-backend">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler collapsible-button collapsed" type="button" data-toggle="collapse"data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul>
                    <li><a href="#" class="nav-item active">DASHBOARD</a></li>
                    <li><a href="#" class="nav-item">ARTICLES</a></li>
                    <li><a href="#" class="nav-item">SECCIONS</a></li>
                    <li><a href="#" class="nav-item">REGIONS</a></li>
                    <li><a href="#" class="nav-item">USUARIS</a></li>
                </ul>
            </div>
            <div class="usuari">
                Benvingut, <b>{{Auth::user()->name}}</b>
            </div>
        </nav>
    </header>

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>

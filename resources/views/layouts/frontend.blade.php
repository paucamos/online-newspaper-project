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
    <script src="{{ asset('js/frontend.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/article_page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/seccions_regions.css') }}" rel="stylesheet">
</head>
<body>
    <header id="header">
        <div class="title-header row">
            <div class="col-lg-6 title-slogan">
                <h1><a href="<?php echo url('/') ?>">Diari Localhost</a></h1>
                <p id="slogan">El millor diari de Catalunya</p>
            </div>
            <div class="col-lg-6 logo">

            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler collapsible-button collapsed" type="button" data-toggle="collapse"data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul>
                    <li><a href="<?php echo url('/') ?>" class="nav-item active-link">INICI</a></li>
                    <li><a href="{{ route('sections', [1]) }}" class="nav-item">POLÍTICA</a></li>
                    <li><a href="{{ route('sections', [5]) }}" class="nav-item">ECONOMIA</a></li>
                    <li><a href="{{ route('sections', [2]) }}" class="nav-item">ESPORTS</a></li>
                    <li>
                        <div class="dropdown">
                            <span class="dropdown-title">REGIONS</span>
                            <div class="dropdown-content">
                                <ul>
                                    <li><a href="{{ route('regions', [4]) }}" class="nav-item">GIRONA</a></li>
                                    <li><a href="{{ route('sections', [3]) }}" class="nav-item">BANYOLES</a></li>
                                    <li><a href="{{ route('sections', [1]) }}" class="nav-item">OLOT</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ route('quisom') }}" class="nav-item">QUI SOM</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer id="footer">
        <div id="footer-container">
            <div id="footer-title">
                <a href="<?php echo url('/') ?>">
                    <h2>Diari localhost</h2>
                </a>
            </div>
            <div id="footer-links">
                <a href="<?php echo url('/') ?>">INICI</a>
                <a href="{{ route('quisom') }}">QUI SOM</a>
                <p>EMAIL: diarilocalhost@gmail.com</p>
                <p><a href="tel:972590000"></a>TELÈFON: 972590000</p>
            </div>
        </div>
        <div id="copyright">
            <p>Copyright &copy; Diari Localhost 2019</p>
        </div>
    </footer>
    
</body>
</html>

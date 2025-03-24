<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ATRP - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    @yield('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb94014f67.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id='app'>
        <div class="container-fluid full-width">
            <div class="row">
                <div class="col-md-3 bg-dark sidebar text-light collapse show" id="sidebar">
                    @include('includes.admin.sidebar')
                </div>
                <main class="col offset-md-3 pt-3 px-4 text-light" role="main" id="main">
                    <div class="d-block d-md-none">
                        <button class="menuToggle mt-3" data-toggle="collapse" href="#sidebar" role="button"><i class="fa fa-bars"></i></button>
                    </div>
                    <div class="row">
                        <div class="col-md-12 p-5">
                            <h1>@yield('title')</h1>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>

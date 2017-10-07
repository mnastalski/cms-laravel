<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>@yield('title', 'Cookie World')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @yield('css')
</head>
<body>

    <header class="container-fluid header-nav sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-4">
                    <a href="{{ route('home') }}"><img class="img-fluid logo" src="{{ asset('assets/img/logo.png') }}" alt="Cookie World"></a>
                </div>

                <div class="col-8 col-md-6 px-0 vcenter">
                    <nav class="text-right align-middle">
                        <a href="{{ route('home') }}"><i class="fa fa-home align-top nav-fa"></i>Home</a>
                        <a href="{{ route('about') }}"><i class="fa fa-info-circle align-top nav-fa"></i>About</a>
                        <a href="{{ route('contact') }}"><i class="fa fa-envelope-o align-top nav-fa"></i>Contact</a>
                    </nav>
                </div>

                <div class="col-1 col-md-2 px-0 mx-0 vcenter">
                    <a class="pull-right small lang-select">
                        Polski<span class="flag-icon flag-icon-pl align-top"></span><i class="fa fa-caret-down align-top hidden-sm-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div id="header-banner">
        <div class="container py-3">
            @section('header_banner')
                menu here
            @endsection
            @yield('header_banner')
        </div>
    </div>

    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1">
    <title>@yield('title', 'Cookie World')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    @yield('css')
</head>
<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-3 px-0">
                    <a href="{{ route('home') }}"><img src="img/logo.png" alt="Cookie World"></a>
                </div>

                <div class="col-7 px-0">
                    <nav class="nav float-right">
                        <a href="{{ route('home') }}" class="nav-link"><i class="fa fa-home align-top nav-fa" aria-hidden="true"></i>Home</a>
                        <a href="{{ route('about') }}" class="nav-link"><i class="fa fa-info-circle align-top nav-fa" aria-hidden="true"></i>About</a>
                        <a href="{{ route('contact') }}" class="nav-link"><i class="fa fa-envelope-o align-top nav-fa" aria-hidden="true"></i>Contact</a>
                    </nav>
                </div>

                <div class="col-2 px-0">
                    <a class="float-right lang-select">
                        Polski<span class="flag-icon flag-icon-pl align-top"></span><i class="fa fa-caret-down align-top" style="margin-top: 1px" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div id="header-banner">
        <div class="container" style="padding: 15px 0">
            @section('header_banner')
                menu here
            @endsection
            @yield('header_banner')
        </div>
    </div>

    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    @yield('js')

</body>
</html>

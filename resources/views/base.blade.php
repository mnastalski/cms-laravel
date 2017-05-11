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

    <header class="container-fluid header-nav sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-4">
                    <a href="{{ route('home') }}"><img class="img-fluid logo" src="img/logo.png" alt="Cookie World"></a>
                </div>

                <div class="col-8 col-md-6 px-0 vcenter">
                    <nav class="text-right align-middle">
                        <a href="{{ route('home') }}"><i class="fa fa-home align-top nav-fa" aria-hidden="true"></i>Home</a>
                        <a href="{{ route('about') }}"><i class="fa fa-info-circle align-top nav-fa" aria-hidden="true"></i>About</a>
                        <a href="{{ route('contact') }}"><i class="fa fa-envelope-o align-top nav-fa" aria-hidden="true"></i>Contact</a>
                    </nav>
                </div>

                <div class="col-1 col-md-2 px-0 mx-0 vcenter">
                    <a class="float-right lang-select">
                        Polski<span class="flag-icon flag-icon-pl align-top"></span><i class="fa fa-caret-down align-top hidden-sm-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div id="header-banner">
        <div class="container">
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

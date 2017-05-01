<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1">
    <title>@yield('title', 'Cookie World')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/main.css">
    @yield('css')
</head>
<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <a href="{{ route('home') }}"><img src="img/logo.png" alt="Cookie World"></a>
                </div>

                <div class="col-7">
                    <nav class="nav float-right">
                        <a href="{{ route('home') }}" class="nav-link"><i class="fa fa-home align-top nav-fa" aria-hidden="true"></i>Home</a>
                        <a href="{{ route('about') }}" class="nav-link"><i class="fa fa-info-circle align-top nav-fa" aria-hidden="true"></i>About</a>
                        <a href="{{ route('contact') }}" class="nav-link"><i class="fa fa-envelope-o align-top nav-fa" aria-hidden="true"></i>Contact</a>
                    </nav>
                </div>

                <div class="col-2">
                    <a class="float-right lang-select">
                        Polski<span class="flag-icon flag-icon-pl align-top" style="margin-top: 1px"></span><i class="fa fa-caret-down align-top" style="margin-top: 2px" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div style="background-color: #7f5817; border-top: 1px solid #372200; border-bottom: 1px solid #372200; height: 92px">
        <div class="container">
            <img src="img/banner_logo.png" class="pull-right">
        </div>
    </div>

    <div class="container">

        @yield('content')

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/b0df2504d8.js"></script>
    @yield('js')

</body>
</html>

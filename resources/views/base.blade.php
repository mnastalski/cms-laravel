<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1">
    <title>@yield('title', 'Cookie World')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    @yield('css')
    <style>
        body {
            background-color: #eaeaea;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
        }

        a {
            color: #000;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        .flag-icon {
            border: 1px solid #aaaaaa;
            border-radius: 2px;
            font-size: 14px;
            line-height: 13px;
            margin: 0 4px 0 2px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-default" style="background-color: #fbfbfb; padding: 7px">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <a href="{{ route('home') }}"><img src="img/logo.png"></a>
                </div>

                <div class="col-4">
                    <a href="{{ route('home') }}" style="display: inline-block; margin: 8px 10px 0; padding: 8px 14px; font-size: 16px; font-weight: bold"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    Categories
                    Cookies
                    About
                    Contact
                </div>

                <div class="col-2">
                    <a style="display: block; cursor: pointer; font-size: 12px; margin-top: 14px; padding: 6px 0; text-align: center; width: 90px">
                        Polski
                        <span class="flag-icon flag-icon-pl"></span>
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div style="background-color: #7f5817; border-top: 1px solid #372200; border-bottom: 1px solid #372200; height: 92px">
        <div class="container">
            <img src="img/banner_logo.png" class="pull-right">
        </div>
    </div>

    <div class="container">

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/b0df2504d8.js"></script>
    @yield('js')

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1">
    <title>@yield('title', 'Cookie World Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    @yield('css')
</head>
<body>

    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @yield('js_vendor')
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    @yield('js')

</body>
</html>

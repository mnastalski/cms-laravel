@extends('admin.base')

@section('title', 'Cookie World Admin Login')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.min.css') }}">
@endsection

@section('content')
    <div class="body-half-1">
    </div>
    <div class="body-half-2">
    </div>

    <div class="container-fluid login-container">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-7 col-md-5 col-lg-4 col-xl-3 text-center text-uppercase login-box">

                <form method="post" class="login-form">
                    {{ csrf_field() }}

                    <a href="/admin"><img src="{{ asset('img/logo_admin.png') }}" class="img-fluid login-logo"></a>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="username" autocomplete="off">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="password" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

            </div>
        </div>
        <div class="copyright text-center">
            <a href="mailto:mail@mail.com">Mateusz Nastalski</a> &copy; 2017
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $('input[name="username"]').focus();
    </script>
@endsection
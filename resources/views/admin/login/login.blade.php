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
            <div class="col-10 col-sm-7 col-md-5 col-lg-4 col-xl-3 text-center login-box">

                <a href="{{ route('admin_login') }}"><img src="{{ asset('img/logo_admin.png') }}" class="img-fluid login-logo"></a>

                <form method="post" action="{{ route('admin_login_post') }}" class="login-form">
                    {{ csrf_field() }}

                    @if ($errors->any())
                        <ul class="alert alert-danger alert-dismissible fade show list-unstyled" data-dismiss="alert" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" name="email" class="form-control" placeholder="username" autocomplete="off">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="password" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

            </div>
        </div>
        <div class="small copyright text-center">
            <a href="https://github.com/mnastalski/" target="_blank">Mateusz Nastalski</a> &copy; 2017
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $('input[name="email"]').focus();
        $('.alert').alert();
    </script>
@endsection
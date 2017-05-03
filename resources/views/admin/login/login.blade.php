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

    <div class="container-fluid" style="position: absolute; top: 27%; width: 100%">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-7 col-md-5 col-lg-4 col-xl-3 text-center text-uppercase login-box">

                <form>
                    <a href="/admin"><img src="{{ asset('img/logo_admin.png') }}" class="img-fluid" style="margin: 10px 0"></a>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="username" autocomplete="off">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" placeholder="password" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

            </div>
        </div>
    </div>
@endsection
@extends('admin.base')

@section('title', 'Cookie World Admin Login')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection

@section('content')
    <div class="body-half-1">
    </div>
    <div class="body-half-2">
    </div>

    <div class="container-fluid login-container">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-7 col-md-5 col-lg-5 col-xl-3 text-center login-box">

                <a href="{{ route('admin.login') }}">
                    <img src="{{ asset('assets/img/logo_admin.png') }}" class="img-fluid mt-4 login-logo">
                </a>

                <form method="post" action="{{ route('admin.login.post') }}" class="px-4 py-2">
                    {{ csrf_field() }}

                    @if ($errors->any())
                        <ul class="alert alert-danger alert-dismissible fade show list-unstyled mt-2 mb-3 p-1"
                            data-dismiss="alert" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="input-group my-2">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="email" name="email" class="form-control text-left" placeholder="email"
                               autocomplete="off" autofocus>
                    </div>

                    <div class="input-group my-2">
                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" name="password" class="form-control text-left" placeholder="password"
                               autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-primary my-2">Login</button>
                </form>

            </div>
        </div>
        <div class="small text-center mt-2">
            <a href="https://github.com/mnastalski/" target="_blank">Mateusz Nastalski</a> &copy; 2017
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $('.alert').alert();
    </script>
@endsection

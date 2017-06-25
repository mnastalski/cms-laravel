@extends('admin.base')

@section('content')
    <div id="admin-container">

        <header>
            <a href="{{ route('admin_dashboard') }}"><img src="{{ asset('img/logo_admin_2.png') }}" alt=""></a>

            <div class="pull-right text-right">
                {{ $user->email }}<br>
                <a href="{{ route('admin_logout') }}" class="logout text-uppercase">logout<i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
        </header>

        <div class="page-container">
            <div class="page-menu">
                <div class="page-menu-list">
                    {{--<div class="page-menu-caret"><i class="fa fa-angle-double-left" aria-hidden="true"></i></div>--}}

                    <a href="{{ route('admin_dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a>
                    <a href="{{ route('admin_dashboard') }}"><i class="fa fa-question-circle" aria-hidden="true"></i>About</a>
                </div>
            </div>

            <div class="content-container">
                @yield('content_container')
            </div>
        </div>

        <footer class="small">
            <a href="https://github.com/mnastalski/" target="_blank">Mateusz Nastalski</a> &copy; 2017
        </footer>

    </div>
@endsection
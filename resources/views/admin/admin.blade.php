@extends('admin.layout')

@section('content')
    <header class="container-fluid">
        <div class="row">
            <div class="col-6">
                <a href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset('assets/img/logo_admin_2.png') }}" alt="">
                </a>
            </div>

            <div class="col-6 text-right">
                <a class="gray-light" href="{{ route('admin.profile') }}">
                    {{ $user->email }}
                    <i class="fa fa-caret-down ml-1"></i>
                </a>

                <br>

                <a href="{{ route('admin.logout') }}" class="smaller font-weight-bold text-uppercase">
                    logout<i class="fa fa-sign-out ml-1" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </header>

    <div class="page-menu">
        {{--<div class="page-menu-caret"><i class="fa fa-angle-double-left" aria-hidden="true"></i></div>--}}

        {!! AdminMenu::add()->route('admin.dashboard')->label('Dashboard')->icon('fa-home')->get() !!}
        {!! AdminMenu::add()->route('admin.languages')->label('Languages')->icon('fa-language')->get() !!}
        {!! AdminMenu::add()->route('admin.phrases')->label('Phrases')->icon('fa-font')->get() !!}
        {!! AdminMenu::add()->route('admin.contents')->label('Content sections')->icon('fa-book')->get() !!}
        {!! AdminMenu::add()->route('admin.shop.categories')->label('Shop categories')->icon('fa-book')->get() !!}
    </div>

    <div class="main-container">

        @hasSection('header')
            <div class="row pt-3 pb-1 mx-3 content-header">
                <div class="px-1">
                    <h2>@yield('header')</h2>

                    @hasSection('description')
                        <span class="smaller">@yield('description')</span>
                    @else
                        <div style="height: 6px"></div>
                    @endif
                </div>

                    {{--
                    <div class="col-md-6 small">
                        Breadcrumb > Crumb > Little crumb
                    </div>
                    --}}
            </div>
        @endif

        <div class="m-3 px-1">
            @include('flash::message')

            @hasSection('btn_bar')
                <div class="mb-3 text-right btn-bar">
                    @yield('btn_bar')
                </div>
            @endif

            @yield('content_container')
        </div>

    </div>

    <footer>
        <a href="https://github.com/mnastalski/" target="_blank">Mateusz Nastalski</a> &copy; 2017
    </footer>
@endsection

@section('js_vendor')
    <script src="{{ asset('assets/vendor/js/tinymce/tinymce.min.js') }}"></script>
@endsection

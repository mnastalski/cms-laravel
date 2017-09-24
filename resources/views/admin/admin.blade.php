@extends('admin.base')

@section('content')
    <div id="admin-container">

        <header>
            <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('assets/img/logo_admin_2.png') }}" alt=""></a>

            <div class="pull-right text-right">
                {{ $user->email }}<br>
                <a href="{{ route('admin.logout') }}" class="logout text-uppercase">logout<i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
        </header>

        <div class="page-container">
            <div class="page-menu">
                <div class="page-menu-list">
                    {{--<div class="page-menu-caret"><i class="fa fa-angle-double-left" aria-hidden="true"></i></div>--}}

                    {!! AdminMenu::add()->route('admin.dashboard')->label('Dashboard')->icon('fa-home')->get() !!}
                    {!! AdminMenu::add()->route('admin.languages')->label('Languages')->icon('fa-language')->get() !!}
                    {!! AdminMenu::add()->route('admin.phrases')->label('Phrases')->icon('fa-font')->get() !!}
                    {!! AdminMenu::add()->route('admin.contents')->label('Content sections')->icon('fa-book')->get() !!}

                </div>
            </div>

            <div class="main-container">
                @hasSection('header')
                    <div class="content-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>@yield('header')</h1>

                                @hasSection('description')
                                    <small>@yield('description')</small>
                                @else
                                    <div style="height: 6px"></div>
                                @endif
                            </div>

                            {{--
                            <div class="col-md-6 d-flex align-items-center justify-content-end small">
                                Breadcrumb > Crumb > Little crumb
                            </div>
                            --}}
                        </div>
                    </div>
                @endif

                <div class="content-container">
                    @include('flash::message')

                    @hasSection('btn_bar')
                        <div class="btn-bar">
                            @yield('btn_bar')
                        </div>
                    @endif

                    @yield('content_container')
                </div>
            </div>
        </div>

        <footer class="small">
            <a href="https://github.com/mnastalski/" target="_blank">Mateusz Nastalski</a> &copy; 2017
        </footer>

    </div>
@endsection

@section('js')
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>

    <script src="{{ asset('js/admin.js') }}"></script>
@endsection
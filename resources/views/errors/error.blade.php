@extends('base')

@section('content')

    @section('error')
        <div class="page-error text-center">
            <h1 class="error-code">@yield('error_code')</h1>
            <small class="error-descr">@yield('error_descr')</small>
        </div>
    @endsection
    @yield('error')

@endsection
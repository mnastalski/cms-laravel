@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-lg-2">
                <div class="mb-3 small font-weight-bold text-uppercase">
                    Your profile
                </div>

                <div class="mb-3">
                    <a href="{{ route('user.profile.password') }}">Change password</a>
                </div>

                <div>
                    <a></a>
                </div>
            </div>

            <div class="col-12 col-lg-9 ml-auto">
                @yield('profile_content')
            </div>
        </div>
    </div>
@endsection

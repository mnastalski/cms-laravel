@extends('layout')

@section('header_banner')
    <div class="row brown-light">
        <div class="col-4 offset-1">
            <h4>We bake and cook and bake and cook</h4>
            <p class="small">We create and make and bake and cookies are great I love ice cream, at condimentum ante
                fringilla vel. Maecenas dapibus neque non nibh porttitor, in malesuada libero tempus. In eu pharetra
                metus. Duis varius arcu dapibus, interdum ipsum ac, condimentum ante.</p>
        </div>

        <div class="col-4 ml-auto text-right">
            @auth
                <p>Welcome {{ $user->email }}</p>

                @if ($user->isAdmin())
                    <a class="btn btn-success" href="{{ route('admin.dashboard') }}" target="_blank">Admin panel</a>
                @endif

                <a class="btn btn-success" href="{{ route('user.logout') }}">Logout</a>
            @endauth

            @guest
                <p>
                    <a class="btn btn-success" href="{{ route('user.login') }}">Login</a>
                    <a class="btn btn-success" href="{{ route('user.register') }}">Register</a>
                </p>

                <a class="brown-light" href="{{ route('user.password.remind') }}">Forgot password</a>
            @endguest
        </div>
    </div>
@endsection

@section('content')
    <div class="container">

        <h1 class="pt-4 item-group-header">categories</h1>

        <div class="row justify-content-around">

            @foreach ($categories as $item)
                <div class="item-group">
                    <img class="img-fluid" src="{{ asset('assets/img/categories/1.png') }}" alt="Cookies">
                    <div class="item-group-label">
                        <a href="{{ route('shop', [$item->slug]) }}" class="btn btn-brown">Check</a>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="pt-4 text-center">
            <a href="{{ route('shop') }}">Check more categories <i class="fa fa-arrow-circle-right"></i></a>
        </div>

        <h1 class="mt-4 item-group-header">most popular</h1>

        <div class="row justify-content-around">
            @foreach ($products_popular as $item)
                <div class="col text-center">
                    <a href="{{ $item->url }}">{{ $item->name }}</a>
                </div>
            @endforeach
        </div>

    </div>
@endsection

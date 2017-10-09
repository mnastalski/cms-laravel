@extends('layout')

@section('header_banner')
    <div class="row">
        <div class="col-4 offset-1 brown-light">
            <h4>We bake and cook and bake and cook</h4>
            <p class="small">We create and make and bake and cookies are great I love ice cream, at condimentum ante
                fringilla vel. Maecenas dapibus neque non nibh porttitor, in malesuada libero tempus. In eu pharetra
                metus. Duis varius arcu dapibus, interdum ipsum ac, condimentum ante.</p>
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

    </div>
@endsection

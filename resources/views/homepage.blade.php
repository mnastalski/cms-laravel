@extends('base')

@section('header_banner')

    <div class="row">
        <div class="col-4 offset-1" style="color: #f9e0c7">
            <h4>We bake and cook and bake and cook</h4>
            <p style="font-size: 80%">We create and make and bake and cookies are great I love ice cream, at condimentum ante fringilla vel. Maecenas dapibus neque non nibh porttitor, in malesuada libero tempus. In eu pharetra metus. Duis varius arcu dapibus, interdum ipsum ac, condimentum ante.</p>
        </div>
    </div>

@endsection

@section('content')

    <div class="container">

        <h1 class="item-group-header">categories</h1>

        <div class="row justify-content-around">

            <div class="col-3">
                <div class="item-group">
                    <img class="img-fluid" src="img/categories/1.png" alt="Cookies">
                    <div class="item-group-label">
                        <a href="#" class="btn btn-primary btn-brown">Check</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="item-group">
                    <img class="img-fluid" src="img/categories/2.png" alt="Cookies">
                    <div class="item-group-label">
                        <a href="#" class="btn btn-primary btn-brown">Check</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="item-group">
                    <img class="img-fluid" src="img/categories/3.png" alt="Cookies">
                    <div class="item-group-label">
                        <a href="#" class="btn btn-primary btn-brown">Check</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center" style="margin: 20px 0 30px">
            <a href="#">Check more categories <i class="fa fa-arrow-circle-right " aria-hidden="true"></i></a>
        </div>

        <h1 class="item-group-header">most popular</h1>

    </div>

@endsection
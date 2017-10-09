@extends('shop.layout')

@section('shop_content')
    <h1 class="item-group-header">{{ $product->name }}</h1>

    <p>Price: ${{ $product->price }}</p>

    <p class="text-justify">{{ $product->description }}</p>
@endsection

@extends('shop.layout')

@section('shop_content')
    @foreach ($products as $item)
        <div>
            <a href="{{ route('shop.product.view', [$item->category->slug, $item->slug]) }}">{{ $item->name }}</a>
        </div>
    @endforeach
@endsection

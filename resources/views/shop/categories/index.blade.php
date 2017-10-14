@extends('shop.layout')

@section('shop_content')
    @foreach ($products as $item)
        <div>
            <a href="{{ $item->url }}">{{ $item->name }}</a>
        </div>
    @endforeach
@endsection

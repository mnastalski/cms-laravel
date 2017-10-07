@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-lg-2">
                @foreach ($categories as $item)
                    <div>{{ $item->name }}</div>
                @endforeach
            </div>

            <div class="col-12 col-lg-9 ml-auto">
                // products
            </div>
        </div>
    </div>
@endsection

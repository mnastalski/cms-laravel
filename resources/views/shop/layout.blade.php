@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-lg-2">
                <div class="mb-3 small font-weight-bold text-uppercase">
                    CATEGORIES
                </div>

                <div class="mb-3">
                    <a href="{{ route('shop') }}">All categories</a>
                </div>

                @foreach (\App\ShopCategory::whereNotNull('parent_id')->withCount('products')->defaultOrder()->get() as $item)
                    <div>
                        <a href="{{ route('shop', [$item->slug]) }}">{{ $item->name . ' (' . $item->products_count . ')' }}</a>
                    </div>
                @endforeach
            </div>

            <div class="col-12 col-lg-9 ml-auto">
                @yield('shop_content')
            </div>
        </div>
    </div>
@endsection

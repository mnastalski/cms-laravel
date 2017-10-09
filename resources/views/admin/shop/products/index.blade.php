@extends('admin.admin')

@section('header', 'Shop products')

@section('btn_bar')
    {!! AdminUtil::btnBar(route('admin.shop.products.create'), 'Add product') !!}
@endsection

@section('content_container')
    <table class="table table-striped table-bordered table-actions">
        <thead>
            <tr>
                <th style="width: 80px">ID</th>
                <th style="width: 140px">Image</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Category</th>
                <th style="width: 80px">Views</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($products as $key => $item)
                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        {{ $item->image }}
                    </td>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ $item->slug }}
                    </td>
                    <td>
                        {{ $item->category->name }}
                    </td>
                    <td>
                        {{ $item->views }}
                    </td>
                    <td>
                        {!! AdminUtil::btnEdit(route('admin.shop.products.create', [$item->id])) !!}
                        {!! AdminUtil::btnDelete(route('admin.shop.products.destroy', [$item->id])) !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

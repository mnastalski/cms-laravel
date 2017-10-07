@extends('admin.admin')

@section('header', 'Shop categories')

@section('btn_bar')
    {!! AdminUtil::btnBar(route('admin.shop.categories.create'), 'Add category') !!}
@endsection

@section('content_container')
    <table class="table table-striped table-bordered table-actions">
        <thead>
            <tr>
                <th class="col-md-1">ID</th>
                <th style="width: 140px">Image</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($categories as $key => $item)
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
                        {!! AdminUtil::btnEdit(route('admin.shop.categories.create', [$item->id])) !!}
                        {!! AdminUtil::btnDelete(route('admin.shop.categories.destroy', [$item->id])) !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

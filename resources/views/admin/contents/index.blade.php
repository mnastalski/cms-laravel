@extends('admin.admin')

@section('header', 'Contents')

@section('btn_bar')
    {!! AdminUtil::btnBar(route('admin.contents.create'), 'Add section') !!}
@endsection

@section('content_container')
    <table class="table table-striped table-bordered table-v-middle">
        <thead>
            <tr>
                <th class="col-md-1">ID</th>
                <th>Slug</th>
                <th>Title</th>
                <th>Added</th>
                <th>Updated</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @forelse ($contents as $key => $item)
                <tr>
                    <td></td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
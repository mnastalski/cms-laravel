@extends('admin.admin')

@section('header', 'Available languages')

@section('btn_bar')
    {!! AdminUtil::btnBar(route('admin.languages'), 'Add language') !!}
@endsection

@section('content_container')
    <table class="table table-striped table-bordered table-v-middle">
        <thead>
            <tr>
                <th class="col-md-1">ID</th>
                <th>Code</th>
                <th>Language</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @forelse ($languages as $key => $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->lang }}</td>
                    <td><span class="flag-icon flag-icon-{{ $item->lang == 'en' ? 'gb' : $item->lang }}"></span> {{ $item->getLangName() }}</td>
                    <td>{{ $item->active ? 'Active' : 'Inactive' }}</td>
                    <td class="text-right">
                        @if ($item->active)
                            {!! AdminUtil::btn(route('admin.languages'), 'fa-eye-slash', 'Deactivate') !!}
                        @else
                            {!! AdminUtil::btn(route('admin.languages'), 'fa-eye', 'Activate') !!}
                        @endif

                        @if ($item->lang !== \Lang::getFallback())
                            {!! AdminUtil::btnDelete(route('admin.languages'), 'Delete') !!}
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
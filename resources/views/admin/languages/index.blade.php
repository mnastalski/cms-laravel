@extends('admin.admin')

@section('header', 'Available languages')

@section('btn_bar')
    {!! AdminUtil::btnBar(route('admin.languages'), 'Add language') !!}
@endsection

@section('content_container')
    <table class="table table-striped table-bordered table-actions">
        <thead>
            <tr>
                <th class="col-md-1">ID</th>
                <th>Code</th>
                <th>Language</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($languages as $key => $item)
                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        {{ $item->key }}
                    </td>
                    <td>
                        <span class="flag-icon flag-icon-{{ $item->key == 'en' ? 'gb' : $item->key }}"></span>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ $item->active ? 'Active' : 'Inactive' }}
                    </td>
                    <td>
                        @if ($item->active)
                            {!! AdminUtil::btn(route('admin.languages'), 'fa-eye-slash', 'Deactivate') !!}
                        @else
                            {!! AdminUtil::btn(route('admin.languages'), 'fa-eye', 'Activate') !!}
                        @endif

                        @if ($item->key !== \Lang::getFallback())
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

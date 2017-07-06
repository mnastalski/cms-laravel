@extends('admin.admin')

@section('header', 'Phrases')

@section('btn_bar')
    {!! AdminUtil::btnBar(route('admin.phrases'), 'Add phrase') !!}
@endsection

@section('content_container')
    <table class="table table-striped table-bordered table-v-middle">
        <thead>
            <tr>
                <th class="col-md-1">ID</th>
                <th>Phrase</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @forelse ($phrases as $key => $item)
                <tr>
                    <td></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
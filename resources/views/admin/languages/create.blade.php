@extends('admin.admin')

@section('header', ($model_data ? 'Edit' : 'Add') . ' language')

@section('content_container')
    {!! BootForm::open(['model' => $model_data]) !!}

    @if ($model_data)
        {!! BootForm::text('name', 'Language', $model_data->name, ['disabled' => true]) !!}
    @else
        {!! BootForm::select('key', 'Language', $languages) !!}
    @endif

    {!! BootForm::text('icon', 'Icon') !!}

    {!! BootForm::checkbox('is_active', 'Active', 1, ['checked' => true]) !!}

    {!! BootForm::submit('Save') !!}

    {!! AdminUtil::btnCancel() !!}

    {!! BootForm::close() !!}
@endsection

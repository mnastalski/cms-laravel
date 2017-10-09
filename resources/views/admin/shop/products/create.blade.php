@extends('admin.admin')

@section('header', ($model_data ? 'Edit' : 'Add') . ' shop product')

@section('content_container')
    {!! BootForm::open(['model' => $model_data]) !!}

    {!! BootForm::text('slug') !!}

    {!! BootForm::text('name', 'name*') !!}

    {!! BootForm::select('category_id', 'category*', $categories) !!}

    {{--{!! BootForm::file('image') !!}--}}

    {!! BootForm::submit('Save') !!}

    {!! AdminUtil::btnCancel() !!}

    {!! BootForm::close() !!}
@endsection

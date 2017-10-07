@extends('admin.admin')

@section('header', ($model_data ? 'Edit' : 'Add') . ' shop category')

@section('content_container')
    {!! BootForm::open(['model' => $model_data]) !!}

    {!! BootForm::text('slug') !!}

    {!! BootForm::text('name', 'name*') !!}

    {!! BootForm::select('parent_id', 'parent category*', $categories) !!}

    {{--{!! BootForm::file('image') !!}--}}

    {!! BootForm::checkbox('is_featured', 'Featured') !!}

    {!! BootForm::submit('Save') !!}

    {!! AdminUtil::btnCancel() !!}

    {!! BootForm::close() !!}
@endsection

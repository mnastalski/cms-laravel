@extends('admin.admin')

@section('header', ($model_data ? 'Edit' : 'Add') . ' shop product')

@section('content_container')
    {!! BootForm::open(['model' => $model_data]) !!}

    {!! BootForm::text('name', 'name*') !!}

    {!! BootForm::text('slug') !!}

    {!! BootForm::number('price', 'price*', null, ['min' => '0.01', 'max' => '9999.99', 'step' => '0.01']) !!}

    {!! BootForm::select('category_id', 'category*', $categories) !!}

    {{--{!! BootForm::file('image') !!}--}}

    {!! BootForm::textarea('description') !!}

    {!! BootForm::submit('Save') !!}

    {!! AdminUtil::btnCancel() !!}

    {!! BootForm::close() !!}
@endsection
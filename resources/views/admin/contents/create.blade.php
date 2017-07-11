@extends('admin.admin')

@section('header', 'Add content section')

@section('content_container')
    {!! BootForm::open(['model' => $model_data]) !!}

    {!! BootForm::text('key') !!}

    {!! BootForm::text('title') !!}

    {!! BootForm::textarea('content', null, null, ['class' => 'tinymce', 'rows' => 16]) !!}

    {!! BootForm::submit('Save') !!}

    {!! AdminUtil::btnCancel() !!}

    {!! BootForm::close() !!}
@endsection

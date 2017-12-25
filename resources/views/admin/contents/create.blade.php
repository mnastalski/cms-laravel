@extends('admin.admin')

@section('header', ($model_data ? 'Edit' : 'Add') . ' content section')

@section('content_container')
    {!! BootForm::open(['model' => $model_data]) !!}

    {!! BootForm::text('key') !!}

    {!! BootForm::text('title') !!}

    {!! BootForm::textarea('content', null, null, ['class' => 'tinymce', 'rows' => 16]) !!}

    {!! AdminUtil::saveStayCancel(route('admin.contents')) !!}

    {!! BootForm::close() !!}
@endsection

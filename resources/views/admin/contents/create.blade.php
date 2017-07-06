@extends('admin.admin')

@section('header', 'Add content section')

@section('content_container')
    {!! BootForm::open(['store' => 'admin.contents']) !!}

    {!! BootForm::text('slug') !!}

    {!! BootForm::submit() !!}

    {!! BootForm::close() !!}
@endsection

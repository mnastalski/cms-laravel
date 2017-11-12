@extends('admin.admin')

@section('header', 'Add language')

@section('content_container')
    {!! BootForm::open() !!}

    {!! BootForm::select('key', 'Language', $languages) !!}

    {!! BootForm::checkbox('is_active', 'Active', 1, ['checked' => true]) !!}

    {!! BootForm::submit('Save') !!}

    {!! AdminUtil::btnCancel() !!}

    {!! BootForm::close() !!}
@endsection

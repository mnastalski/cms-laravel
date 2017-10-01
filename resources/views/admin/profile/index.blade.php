@extends('admin.admin')

@section('header', 'Your profile')

@section('content_container')
    {!! BootForm::open() !!}

    {!! BootForm::staticField('static', 'Email', $user->email) !!}

    {!! BootForm::password('password', 'Current password') !!}

    {!! BootForm::password('password_new', 'New password') !!}

    {!! BootForm::password('password_new_confirmation', 'Confirm new password') !!}

    {!! BootForm::submit('Save') !!}

    {!! AdminUtil::btnCancel() !!}

    {!! BootForm::close() !!}
@endsection

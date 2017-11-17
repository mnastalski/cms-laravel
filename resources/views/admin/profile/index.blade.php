@extends('admin.admin')

@section('header', 'Your profile')

@section('content_container')
    {!! BootForm::open() !!}

    {!! BootForm::text('static', 'Email', $user->email, ['disabled' => true]) !!}

    {!! BootForm::password('password', 'Current password') !!}

    {!! BootForm::password('password_new', 'New password') !!}

    {!! BootForm::password('password_new_confirmation', 'Confirm new password') !!}

    {!! BootForm::submit('Save') !!}

    {!! AdminUtil::btnCancel(route('admin')) !!}

    {!! BootForm::close() !!}
@endsection

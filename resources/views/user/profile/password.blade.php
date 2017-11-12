@extends('user.profile.layout')

@section('profile_content')
    <h1 class="py-4 item-group-header">Change password</h1>

    {!! BootForm::open() !!}

    <div class="form-group">
        {!! BootForm::password('password', 'Password') !!}
    </div>

    <div class="form-group">
        {!! BootForm::password('password_new', 'New password') !!}
    </div>

    <div class="form-group">
        {!! BootForm::password('password_new_confirmation', 'Confirm new password') !!}
    </div>

    <div class="form-group text-center">
        {!! BootForm::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! BootForm::close() !!}
@endsection

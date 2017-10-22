@extends('layout')

@section('content')
    <div class="container" style="max-width: 500px">
        <h1 class="py-4 item-group-header">Password reset</h1>

        {!! BootForm::open(['route' => 'user.password.reset.post']) !!}

        {!! BootForm::hidden('token', $token) !!}

        {!! BootForm::email('email', 'Email', $email or old('email')) !!}

        {!! BootForm::password('password') !!}

        {!! BootForm::password('password_confirmation') !!}

        <div class="form-group text-center">
            {!! Form::submit('Change password', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! BootForm::close() !!}
    </div>
@endsection

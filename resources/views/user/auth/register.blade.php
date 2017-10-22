@extends('layout')

@section('content')
    <div class="container" style="max-width: 500px">
        <h1 class="py-4 item-group-header">Create a new account</h1>

        {!! BootForm::open() !!}

        {!! BootForm::email('email') !!}

        {!! BootForm::password('password') !!}

        {!! BootForm::password('password_confirmation') !!}

        <div class="form-group text-center">
            {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! BootForm::close() !!}
    </div>
@endsection

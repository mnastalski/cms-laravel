@extends('layout')

@section('content')
    <div class="container" style="max-width: 500px">
        <h1 class="py-4 item-group-header">Log in</h1>

        @if ($errors->count() > 0)
            <ul class="alert alert-danger alert-dismissible fade show list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open() !!}

        <div class="form-group">
            {!! Form::label('email') !!}
            {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password') !!}
            {!! Form::password('password', ['id' => 'password', 'class' => 'form-control']) !!}
        </div>

        <div class="form-group text-center">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection

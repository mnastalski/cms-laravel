@extends('user.profile.layout')

@section('profile_content')
    Welcome to your profile page

    <div class="mt-4">
        {!! BootForm::email('email', 'Email', $user->email, ['disabled' => true]) !!}
    </div>
@endsection

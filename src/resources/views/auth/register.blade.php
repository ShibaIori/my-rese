@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class='wrap'>
    <h2>Registration</h2>
    <form method="POST" action="{{ route('register') }}" class='registration'>
        @csrf

        <!-- Name -->

        <div class='inner'>
            <div class='icon'>
                <img src="{{ asset('img/username.png') }}" alt="">
            </div>
            <input id="name" class="input" type="text" name="name" :value="old('name')" placeholder='Username' required autofocus>
        </div>


        <!-- Email Address -->
        <div class="inner">
            <div class='icon'>
                <img src="{{ asset('img/email.png') }}" alt="">
            </div>
            <input id="email" class="input" type="email" name="email" :value="old('email')" placeholder='Email' required>
        </div>

        <!-- Password -->
        <div class="inner">
            <div class='icon'>
                <img src="{{ asset('img/password.png') }}" alt="">
            </div>
            <input id="password" class="input" type="password" name="password" placeholder='Password' required autocomplete="new-password">
        </div>
        <button type="submit" class='button'>登録</button>
    </form>
</div>
@endsection
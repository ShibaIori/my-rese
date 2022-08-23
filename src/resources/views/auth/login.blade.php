@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<div class='wrap'>
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}" class='login'>
        @csrf

        <!-- Email Address -->
        <div class='inner'>
            <div class='icon'>
                <img src="{{ asset('img/email.png') }}" alt="">
            </div>
            <input id="email" class="input" type="email" name="email" :value="old('email')" placeholder='Email' required autofocus>
        </div>

        <!-- Password -->
        <div class='inner'>
            <div class='icon'>
                <img src="{{ asset('img/password.png') }}" alt="">
            </div>
            <input id="password" class="input" type="password" name="password" placeholder='Password' required autocomplete="current-password">
        </div>

        <button type="submit" class='button'>ログイン</button>
    </form>
</div>
@endsection
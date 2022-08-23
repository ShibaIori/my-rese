@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class='wrap'>
  <p class='thanks'>会員登録ありがとうございます</p>
  <a href="/login" class='button'>ログインする</a>
</div>
@endsection
@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class='wrap'>
  <p class='thanks'>ご予約ありがとうございます</p>
  <a href="/" class='button'>戻る</a>
</div>
@endsection
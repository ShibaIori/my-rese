@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class='list'>
  @foreach ($items as $item)
  <div class='shop_card'>
    <div class='shop_img'>
      <img src="{{ $item->image }}" alt="no image">
    </div>
    <div class='shop_wrap'>
      <h2 class='shop_name'>{{ $item->name }}</h2>
      <div class='shop_tag'>
        <p class='area'>#{{ $item->area->name }}</p>
        <p class='genre'>#{{ $item->genre->name }}</p>
      </div>
      <div class='shop_button'>
        <a href="/detail/{{ $item->id }}" class='shop_detail'>詳しく見る</a>
        @if( isset($item->isFavorite) )
        <form action="/favorite/delete?shop_id={{ $item->id }}" method="POST">
          @csrf
          <button type="submit"><div class='favorite red'></div></button>
        </form>
        @else
        <form action="/favorite" method="POST">
          @csrf
          <input type="hidden" name='user_id' value='{{ Auth::id() }}'>
          <input type="hidden" name='shop_id' value='{{ $item->id }}'>
          <button type="submit"><div class='favorite grey'></div></button>
        </form>
        @endif
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection

@section('js')
<script src="{{ asset('js/index.js') }}"></script>
@endsection
@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<h2 class='user_name'>{{ $item->name }}さん</h2>
<div class='wrap'>
  <div class='reserve'>
    <h3 class='reserve_ttl'>予約状況</h3>
    @foreach($item->reserves as $obj)
    <div class='reserve_card'>
      <div class='flex'>
        <div class='icon'>
          <img src="{{ asset('img/time.png') }}" alt="">
        </div>
        <h4 class='reserve_num'>予約{{ $loop->iteration }}</h4>
        <form action="/reserve/delete?id={{ $obj->id }}" method="POST" class='reserve_delete'>
          @csrf
          <button type='submit' class='delete_button'></button>
        </form>
      </div>
      <table>
        <tr>
          <th width="25%">Shop</th>
          <td width="75%">{{ $obj->shop->name }}</td>
        </tr>
        <tr>
          <th width="25%">Date</th>
          <td width="75%">{{ $obj->date }}</td>
        </tr>
        <tr>
          <th width="25%">Time</th>
          <td width="75%">{{ $obj->time }}</td>
        </tr>
        <tr>
          <th width="25%">Number</th>
          <td width="75%">{{ $obj->number }}人</td>
        </tr>
      </table>
    </div>
    @endforeach
  </div>
  <div class='favorite-shop'>
    <h3 class='favorite_ttl'>お気に入り店舗</h3>
    <div class='list'>
      @foreach($item->favorites as $obj)
      <div class='shop_card'>
        <div class='shop_img'>
          <img src="{{ $obj->shop->image }}" alt="no image">
        </div>
        <div class='shop_wrap'>
          <h2 class='shop_name'>{{ $obj->shop->name }}</h2>
          <div class='shop_tag'>
            <p>#{{ $obj->shop->area->name }}</p>
            <p>#{{ $obj->shop->genre->name }}</p>
          </div>
          <div class='shop_button'>
            <a href="/detail/{{ $item->id }}" class='shop_detail'>詳しく見る</a>
            <form action="/favorite/delete?shop_id={{ $obj->shop->id }}" method="POST">
              @csrf
              <button type="submit">
                <div class='favorite red'></div>
              </button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
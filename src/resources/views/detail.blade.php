@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class='wrap'>
  <div class='shop'>
    <a href="/" class='back'><</a>
    <h2 class='shop_name'>{{ $item->name }}</h2>
    <div class='shop_img'>
      <img src="{{ $item->image }}" alt="no image">
    </div>
    <div class='shop_tag'>
      <p>#{{ $item->area->name }}</p>
      <p>#{{ $item->genre->name }}</p>
    </div>
    <p class='shop_sentence'>{{ $item->sentence }}</p>
  </div>

  <div class='reserve'>
    <div class='outer'>
      <h3>予約</h3>
      <form action="/reserve" method="POST" id= "reserve" class='reserve_form'>
        @csrf
        <input type="hidden" name='user_id' value='{{ Auth::id() }}'>
        <input type="hidden" name='shop_id' value='{{ $item->id }}'>
        <input type="date" name='date' id="date" oninput="inputCheck('date', 'checkDate')">
        <input type="time" name='time' id="time" oninput="inputCheck('time', 'checkTime')">
        <div class='triangle'>
          <select name='number' id="number" oninput="selectCheck('number', 'checkNumber')">
            @for ($i = 0; $i < 10; $i++ )
            <option value="{{ $i + 1 }}">{{ $i + 1 }}人</option>
            @endfor
          </select>
        </div>
      </form>
      <div class='inner'>
        <table>
          <tr>
            <th width="25%">Shop</th>
            <td width="75%">{{ $item->name }}</td>
          </tr>
          <tr>
            <th width="25%">Date</th>
            <td id="checkDate" width="75%"></td>
          </tr>
          <tr>
            <th width="25%">Time</th>
            <td id="checkTime" width="75%"></td>
          </tr>
          <tr>
            <th width="25%">Number</th>
            <td id="checkNumber" width="75%">1人</td>
          </tr>
        </table>
      </div>
    </div>
    <button type='submit' form="reserve">予約する</button>
  </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/detail.js') }}"></script>
@endsection
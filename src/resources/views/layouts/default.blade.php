<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/default.css') }}">
  @yield('css')
  <title>Rese</title>
</head>

<body>
  <header class='header'>
    <div class='header-inner'>
      <nav class='nav' id='nav'>
        <ul>
          @auth
          <li><a href="/">Home</a></li>
          <li>
            <form action="/logout" method="POST">
              @csrf
              <button type='submit'>Logout</button>
            </form>
          </li>
          <li><a href="/mypage">Mypage</a></li>
          @endauth

          @guest
          <li><a href="/">Home</a></li>
          <li><a href="/register">Registration</a></li>
          <li><a href="/login">Login</a></li>
          @endguest
        </ul>
      </nav>
      <div class='menu' id='menu'>
        <span class="menu_line-top"></span>
        <span class="menu_line-middle"></span>
        <span class="menu_line-bottom"></span>
      </div>
      <h1 class='title'>Rese</h1>
    </div>
    @if(Request::is('/'))
    <form action="" method="GET" class='search'>
      <div class='triangle'>
        <select id="area">
          <option value="0">All area</option>
          @foreach($areas as $area)
          <option value="{{ $area->name }}">{{ $area->name }}</option>
          @endforeach
        </select>
      </div>
      <div class='triangle'>
        <select id="genre">
          <option value="0">All genre</option>
          @foreach($genres as $genre)
          <option value="{{ $genre->name }}">{{ $genre->name }}</option>
          @endforeach
        </select>
      </div>
      <div class='search-mark'>
        <input type="search" placeholder='Search ...' id="text">
      </div>
      <input type="text" class='dummy'>
    </form>
    @endif
  </header>
  <div class='content'>
    @yield('content')
  </div>

  <script src="{{ asset('js/default.js') }}"></script>
  @yield('js')
</body>

</html>
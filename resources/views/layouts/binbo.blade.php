<!doctype html>
<html>
  <head>
    
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>一万円生活</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <body>
    <div class="wrapper">
      <header class='header'>
        <div class="header__left">
          <a href="/" class="header-title">一万円生活</a>
        </div>
        <div class="header__right">
          <a href ="/posts/add" class="header-list" >
            投稿
          </a>
          <a href ="#" class="header-list" >
            ログアウト
          </a>
        </div>
      </header>
      @yield('content')

    </div>
    <footer class="footer">
        <div class="footer-text">
          ©copy-right2020 itiman-seikatsu
        </div>
    </footer> 

  </body>

</html>
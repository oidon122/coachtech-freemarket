<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>COACHTECHフリマ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('css')
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <img class="header__logo" src="{{ asset('image/logo.svg') }}" alt="Logo">
      @auth
      <div class="header__inner__search">
        <input type="text" placeholder="なにをお探しですか？">
      </div>
      <nav>
        <ul class="header__inner__nav">
          <li class="header-nav__item">
            <form action="/logout" method="post">
              @csrf
              <button class="header-nav__logout">ログアウト</button>
            </form>
          </li>
          <li class="header-nav__item">
            <a class="header-nav__link" href="/mypage">マイページ</a>
          </li>
          <li class="header-nav__item">
            <a class="header-nav__button" href="{{ route('items.show') }}">出品</a>
          </li>
        </ul>
      </nav>
      @endauth
    </div>
  </header>
  <main class="main">
    @yield('content')
  </main>
</body>

</html>
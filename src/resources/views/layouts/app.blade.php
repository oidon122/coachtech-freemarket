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
    @yield('header')
    </div>
  </header>
  <main class="main">
    @yield('content')
  </main>
</body>

</html>
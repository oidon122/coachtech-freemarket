@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/page.css') }}">
@endsection

@section('header')
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
          <button class="header-nav__button">出品</button>
        </li>
      </ul>
  </nav>
@endsection

@section('content')
<div class="tabs">
  <div class="tab">おすすめ</div>
  <div class="tab active">マイリスト</div>
</div>

<div class="product-list">
  <div class="product">
    <img src="商品画像パス" alt="商品画像">
    <p class="product-name">商品名</p>
  </div>
  <div class="product">
    <img src="商品画像パス" alt="商品画像">
    <p class="product-name">商品名</p>
  </div>
  <div class="product">
    <img src="商品画像パス" alt="商品画像">
    <p class="product-name">商品名</p>
  </div>
</div>
@endsection
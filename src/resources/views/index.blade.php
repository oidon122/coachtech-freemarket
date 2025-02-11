@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/page.css') }}">
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
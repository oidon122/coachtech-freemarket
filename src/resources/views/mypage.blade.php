@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/page.css') }}">
@endsection

@section('content')
<div class="profile">
  <img src="{{ asset('storage/' . (auth()->user()->profile->image ?? 'default-avatar.png')) }}" alt="プロフィール画像" class="profile-image">
  <h2 class="text-xl">{{ Auth::user()->name }}</h2>
  <a href="{{ route('profile') }}" class="edit-profile-button" >プロフィール編集</a>
</div>
<div class="tabs">
  <a href="?tab=sell" class="tab {{ request()->query('tab') == 'sell' ? 'active' : '' }}">出品した商品</a>
  <a href="?tab=buy" class="tab {{ request()->query('tab') == 'buy' ? 'active' : '' }}">購入した商品</a>
</div>

<div class="product-list">
  @if (request()->query('tab') == 'sell')
  @elseif (request()->query('tab') == 'buy')
  @else
  @endif
</div>
@endsection
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
  <a href="?tab=sell" class="tab {{ $tab == 'sell' ? 'active' : '' }}">出品した商品</a>
  <a href="?tab=buy" class="tab {{ $tab == 'buy' ? 'active' : '' }}">購入した商品</a>
</div>
<div class="product-list">
  @if ($tab === 'sell')
    @if ($sellItems->isEmpty())
      <p>出品した商品はありません。</p>
    @else
      @foreach ($sellItems as $item)
        <div class="product-card">
          <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/no-image.png') }}" alt="{{ $item->name }}" class="product-image">
          <h3 class="product-title">{{ $item->name }}</h3>
        </div>
      @endforeach
    @endif
  @elseif ($tab === 'buy')
    <p>購入した商品を表示する処理を追加予定</p>
  @else
    <p>タブを選択してください。</p>
  @endif
</div>
@endsection
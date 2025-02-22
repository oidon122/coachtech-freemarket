@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/page.css') }}">
@endsection

@section('content')
<div class="item-container">
    <div class="item-image">
        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
    </div>
    <div class="item-details">
        <h1>{{ $item->name }}</h1>
        <p class="brand">{{ $item->brand }}</p>
        <p class="price">¥{{ number_format($item->price) }} (税込)</p>
        <button class="purchase-button">購入手続きへ</button>
        <h2>商品説明</h2>
        <p>カラー：{{ $item->color }}</p>
        <p>{!! nl2br(e($item->description)) !!}</p>
        <h2>商品の情報</h2>
        <p>カテゴリー: {{ $item->category ? $item->category->pluck('name')->implode(', ') : '未設定' }}</p>
        <p>商品状態: {{ $item->condition }}</p>
        <h2>コメント({{ $item->comments->count() }})</h2>
        @foreach ($item->comments as $comment)
            <div class="comment">
                <strong>{{ $comment->user->name }}</strong>
                <p>{{ $comment->text }}</p>
            </div>
        @endforeach
        <textarea placeholder="商品へのコメント"></textarea>
        <button class="comment-button">コメントを送信する</button>
    </div>
</div>
@endsection

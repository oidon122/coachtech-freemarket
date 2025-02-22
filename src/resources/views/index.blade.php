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
  @foreach($exhibitions as $exhibition)
  <div class="product-card">
    <img src="{{ asset('storage/' . $exhibition->image) }}" alt="{{ $exhibition->name }}" class='product-image'>
    <p class="product-title">{{ $exhibition->name }}</p>
  </div>
  @endforeach
</div>
@endsection
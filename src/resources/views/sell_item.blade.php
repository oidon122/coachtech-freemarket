@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
  <link rel="stylesheet" href="{{ asset('css/page.css') }}">
@endsection

@section('content')
<div class="form">
  <h2 class="form-title">商品を出品</h2>
  <form action="{{ route('items.sell') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="item-image">
      <label for="image" class="form__label--item">商品画像</label>
      <div class="image-upload-box">
        <label class="image-upload-button">
          画像を選択する
          <input type="file" id="image" name="image" hidden>
        </label>
      </div>
    </div>
    <h3 class="form__subtitle">商品の詳細</h3>
      <div class="form__input">
        <label for="category" class="form__label--item">カテゴリー</label>
        <div class="category-options">
          @foreach($categories as $category)
            <input type="checkbox" id="category_{{ $category->id }}" name="category_ids[]" value="{{ $category->id }}" hidden>
            <label for="category_{{ $category->id }}">{{ $category->name }}</label>
          @endforeach
        </div>
        <label for="condition" class="form__label--item">商品状態</label>
        <div class="select-wrapper">
          <select class="form__input" id="condition" name="condition" required>
            <option value="" hidden>選択してください</option>
            <option value="良好">良好</option>
            <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
            <option value="やや傷や汚れあり">やや傷や汚れあり</option>
            <option value="状態が悪い">状態が悪い</option>
          </select>
        </div>
      </div>
    <h3 class="form__subtitle">商品名と説明</h3>
      <div class="form__input">
        <label for="name" class="form__label--item">商品名</label>
        <input type="text" class="form-control" id="name" name="name" required>
        <label for="description" class="form__label--item">商品説明</label>
        <textarea class="form-control" id="description" name="description"></textarea>
        <label for="price" class="form__label--item">価格</label>
        <input type="number" class="form-control" id="price" name="price" min="0" step="1" placeholder="¥" required>
      </div>
    <button type="submit" class="form__button">出品する</button>
  </form>
</div>
@endsection
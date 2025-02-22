@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
  <div class="form">
    <h2 class="form-title">ログイン</h2>
  </div>
  <div class="form__group">
    <form class="login" action="/login" method="post">
      @csrf
      <div class="form__input">
        <span class="form__label--item">ユーザー名/メールアドレス</span>
        <input class="form__input-user" type="email" name="email" value="{{ old('email') }}">
        <div class="form__error">
          @error('email')
          <p>{{ $message }}</p>
          @enderror
        </div>
      </div>
      <div class="form__input">
        <span class="form__label--item">パスワード</span>
        <input class="form__input-user" type="password" name="password">
        <div class="form__error">
          @error('password')
          <p>{{ $message }}</p>
          @enderror
        </div>
      </div>
      <input class="form__button" type="submit" value="ログインする">
    </form>
  </div>
  <div class="user-link">
    <a class="link" href="/register">会員登録はこちら</a>
  </div>
@endsection
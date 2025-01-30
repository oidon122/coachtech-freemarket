@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
  <div class="form">
    <h2 class="form-title">会員登録</h2>
  </div>
  <div class="form__group">
    <form class="register" action="/register" method="post">
      @csrf
      <div class="form__input">
        <span class="form__label--item">ユーザー名</span>
        <input class="form__input-user" type="name" name="name" value="{{ old('name') }}">
        <div class="form__error">
          @error('name')
          <p>{{ $message }}</p>
          @enderror
        </div>
      </div><div class="form__input">
        <span class="form__label--item">メールアドレス</span>
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
      <div class="form__input">
        <span class="form__label--item">確認用パスワード</span>
        <input class="form__input-user" type="password" name="password_confirmation">
        <div class="form__error">
          @error('password_confirmation')
          <p>{{ $message }}</p>
          @enderror
        </div>
      </div>
      <input class="form__button" type="submit" value="登録する">
    </form>
  </div>
  <div class="user-link">
    <a class="link" href="/login">ログインはこちら</a>
  </div>
@endsection
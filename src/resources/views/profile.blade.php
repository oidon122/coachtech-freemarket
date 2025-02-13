@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page.css') }}">
@endsection

@section('content')
<div class="form">
    <h2 class="form-title">プロフィール設定</h2>
    <form action="{{ route('profile') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="image">
            <img class="profile-image" src="{{ asset('storage/' . (auth()->user()->profile->image ?? 'default-avatar.png')) }}" alt="プロフィール画像">
            <label class="image-upload-button">
                画像を選択する
                <input type="file" name="image"  accept="image/*" hidden>
            </label>
        </div>
        <div class="form__error">
        @error('image')
        <p>{{ $message }}</p>
        @enderror
        </div>
        <div class="form__input">
            <span class="form__label--item">ユーザー名</span>
            <input type="text" name="name" class="form__input-user" value="{{ auth()->user()->name }}" required>
        </div>
        <div class="form__input">
            <span class="form__label--item">郵便番号</span>
            <input type="text" name="postal_code" class="form__input-user" value="{{ old('postal_code', $user->profile->postal_code ?? '') }}">
        </div>
        <div class="form__error">
        @error('postal_code')
        <p>{{ $message }}</p>
        @enderror
        </div>
        <div class="form__input">
            <span class="form__label--item">住所</span>
            <input type="text" name="address" class="form__input-user" value="{{ old('address', auth()->user()->profile->address ?? '') }}">
        </div>
        <div class="form__error">
        @error('address')
        <p>{{ $message }}</p>
        @enderror
        </div>
        <div class="form__input">
            <span class="form__label--item">建物名</span>
            <input type="text" name="building" class="form__input-user" value="{{ old('building', auth()->user()->profile->building ?? '') }}">
        </div>
        <button type="submit" class="form__button">更新する</button>
    </form>
</div>
@endsection
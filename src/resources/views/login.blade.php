@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('title','ログインページ')

@section('button','register')
  
@section('content')
  <div class="login-form">
    <h2>Login</h2>
    <div class="login-input">
      <form class="login-form" action="/admin" method="post"> 
        @csrf
        <label for="email">メールアドレス</label>
        <input type="text" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" class="input-name">
        @error('email')
        <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="password">パスワード</label>
        <input type="text" id="password" name="password" placeholder="例: coachtechno6" value="{{ old('password') }}" class="input-name">
        @error('password')
          <div class="error-message">{{ $message }}</div>
        @enderror

        <div class="login-btn-group">
          <button type="submit" class="login-btn">ログイン</button>
        </div>
      </form>
    </div>
  </div>
@endsection
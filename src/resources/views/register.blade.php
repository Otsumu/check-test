@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@section('title','登録ページ')

@section('button','login')
  
@section('content')
  <div class="register-form">
    <h2>Register</h2>
    <div class="register-input">
      <form class="register-form" action="/login" method="post"> 
        @csrf        
        <label for="name">お名前</label>
        <input type="text" id="name" name="name" placeholder="例: test@example.com" value="{{ old('name') }}" class="input-name">

        <label for="email">メールアドレス</label>
        <input type="text" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" class="input-name">

        <label for="password">パスワード</label>
        <input type="text" id="password" name="password" placeholder="例: coachtechno6" value="{{ old('password') }}" class="input-name">

        <div class="register-btn-group">
          <button type="submit" class="register-btn">登録</button>
        </div>
      </form>
    </div>
  </div>
@endsection

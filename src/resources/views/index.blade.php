@extends('layouts.app')

@yield('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@section('title','お問い合わせ')

<main>
@section('content')
  <div class="contact-form">
    <h2>Contact</h2>
  </div>  
    <div class="form__error">
    @if ($errors->any())
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    @endif
    </div>

      <form class="contact-form" action="/confirm" method="post">
        @csrf
        <table>
          <tr>
            <td>
              <label for="last_name">お名前<span class="required"> ※ </span></label>
            </td>
            <td colspan="2" class="name-fields">
              <input type="text" id="last_name" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}" class="input-name">
              <input type="text" id="first_name" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}" class="input-name">
            </td>
            </tr>
            <tr>
              <td><label>性別<span class="required"> ※ </span></label></td>
              <td colspan="2">
                <div class="radio-group">
                  <input type="radio" id="male" name="gender" value="男性" class="radio-custom">
                  <label for="male">男性</label>
                  <input type="radio" id="female" name="gender" value="女性" class="radio-custom">
                  <label for="female">女性</label>
                  <input type="radio" id="other" name="gender" value="その他" class="radio-custom">
                  <label for="other">その他</label>
                </div>
              </td>
            </tr>
            <tr>
              <td><label for="email">メールアドレス<span class="required"> ※ </span></label></td>
              <td colspan="4">
                <input type="email" id="email" name="email" placeholder="例: text@example.com" value="{{ old('email') }}"class="input-field">
              </td>
            </tr>
            <tr>
              <td><label for="tel">電話番号<span class="required"> ※ </span></label></td>
              <td colspan="2">
                <div class="phone-fields">
                  <input type="text" id="phone1" name="tel" placeholder="例: 000" value="{{ old('phone1') }}" class="input-field">
                  <span>  -  </span>
                  <input type="text" id="phone2" name="tel" placeholder="例: 1234" value="{{ old('phone2') }}" class="input-field">
                  <span>  -  </span>
                  <input type="text" id="phone3" name="tel" placeholder="例: 5678" value="{{ old('phone3') }}" class="input-field">
                </div>
              </td>
            </tr>
            <tr>
              <td><label for="address">住所<span class="required"> ※ </span></label></td>
              <td colspan="2"><input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"class="input-field"></td>
            </tr>
            <tr>
              <td><label for="building">建物名</label></td>
              <td colspan="2"><input type="text" id="building" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}" class="input-field"></td>
            </tr>
            <tr>
              <td><label for="contact_type">お問い合わせの種類<span class="required"> ※ </span></label></td>
              <td colspan="2">
                <select class="select-field" name="category__id" id="category__id">
                  <option value="">選択してください</option>
                  <option value="delivery">商品のお届けについて</option>
                  <option value="exchange">商品の交換について</option>
                  <option value="trouble">商品トラブル</option>
                  <option value="inquiry">ショップへのお問い合わせ</option>
                  <option value="other">その他</option>
              </select>
              
              </td>
            </tr>
            <tr>
              <td><label for="contact_content">お問い合わせの内容<span class="required"> ※ </span></label></td>
              <td colspan="2">
                <textarea name="content" rows="3" cols="40" placeholder="お問い合わせの内容をご記載ください" class="input-field"></textarea>
              </td>
            </tr>
        </table>

        <div class="btn-group">
          <button type="submit" class="confirm-btn">確認画面</button>
        </div> 
      </form>
</main>
@endsection
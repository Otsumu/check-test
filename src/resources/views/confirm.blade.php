@extends('layouts.app')

@yield('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@section('title','入力内容確認')

<main>
  @section('content')
  <div class="container">
      <h2>Confirm</h2>
      <div class="contact-info">
          <table class="table">
            <tbody>
              <tr>
                <td class="label">お名前</td>
                <td class="value">{{ $contact['last_name'] }}　{{ $contact['first_name'] }}</td>
              </tr>
              <tr>
                <td class="label">性別</td>
                <td class="value" colspan="2">{{ isset($contact['gender']) ? $contact['gender'] : '' }}</td>
              </tr>
              <tr>
                <td class="label">メールアドレス</td>
                <td class="value" colspan="2">{{ $contact['email'] }}</td>
              </tr>
              <tr>
                <td class="label">電話番号</td>
                <td class="value">{{ $contact['phone1'] }} - {{ $contact['phone2'] }} - {{ $contact['phone3'] }}</td>
              </tr>
              <tr>
                <td class="label">住所</td>
                <td class="value" colspan="2">{{ $contact['address'] }}</td>
              </tr>
              <tr>
                <td class="label">建物名</td>
                <td class="value" colspan="2">{{ $contact['building'] }}</td>
              </tr>
              <tr>
                <td class="label">お問い合わせの種類</td>
                <td class="value" colspan="2">{{ $contact['contact__type'] }}</td>
              </tr>
              <tr>
                <td class="label content-label">お問い合わせの内容</td>
                <td class="value content-value">{{ $contact['message'] }}</td>
              </tr>
            </tbody>
          </table>
  
      <div class="btn-group">
        <form class="form" action="/thanks" method="post">
        @csrf
          <button type="submit" class="confirm-btn">送信</button>
        </form>
        <form action="/input" method="get">
          <button type="submit" class="confirm-btn">修正</button>
        </form>
      </div>
  </div>
@endsection

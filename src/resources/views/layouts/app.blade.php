<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet"> 
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <h1>FashionablyLate</h1>
        <div class="header__right">
          @yield('button')
          <button class="meatball">
            <span class="meatball-ball"></span>
            <span class="meatball-ball"></span>
            <span class="meatball-ball"></span>
          </button>
        </div>
      </div>    
  </header>
  
  <main>
    @yield('content')
  </main>
</body>
</html>  
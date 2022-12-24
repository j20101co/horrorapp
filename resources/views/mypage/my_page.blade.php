<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Mypage</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <h1>マイページ</h1>
      <div class='mypage'>
          <h2 class='username'>{{ $user->name }}</h2>
          <h3>プロフィール</h3>
          <p class='body'>{{ $user->profile }}</p>
          <h3>メールアドレス</h3>
          <input class='email' value='{{ $user->email }}'>
      </div>
  </body>
</html>
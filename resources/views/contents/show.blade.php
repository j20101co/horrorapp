<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Reviews</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <h1 class="title">
        {{ $content->title }}
      </h1>
      <div class="content">
        <div class="content__post">
          <h3>本文</h3>
          <p>{{ $content->image_path }}</p>
        </div>
      </div>
      <a href="/contents/{{ $content->id }}">投稿作成</a>
      <div class="footer">
        <a href="/reviews">戻る</a>
      </div>
    </body>
  </body>
</html>

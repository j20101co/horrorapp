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
        {{ $review->title }}
      </h1>
      <div class="content">
        <div class="content__post">
          <h3>本文</h3>
          <p>{{ $review->body }}</p>
          <h3>{{ $review->review }}</h3>
        </div>
      </div>
      <div class="edit"><a href="/reviews/{{ $review->id }}/edit">edit</a></div>
      <div class="footer">
        <a href="/reviews">戻る</a>
      </div>
    </body>
  </body>
</html>

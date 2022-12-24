<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Reviews</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <h1>編集画面</h1>
        <form action="/reviews/{{ $review->id }}" method="POST">
          @csrf
          <!--@method('PUT')-->
          <div class='content__title'>
            <h2>タイトル</h2>
            <input type='text' name='review[title]' value="{{ $review->title }}">
          </div>
          <div class='content__body'>
            <h2>本文</h2>
            <input type='text' name='review[body]' value="{{ $review->body }}">
          </div>
          <div class="form-group">
          <label for="category-id">{{ __('評価') }}</label>
          <select class="form-control" id="review" name="review[review]">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
          <input type=hidden name="review[user_id]" value='{{ $auth->id }}'/>
          <input type="submit" value="保存">
  </body>
</html>

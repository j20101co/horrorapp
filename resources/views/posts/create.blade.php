<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Reviews</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <h1>投稿作成</h1>
        <form action="/reviews" method="POST">
          @csrf
        <div class='title'>
          <h2>{{ $content->title }}</h2>
          <input type="text" name="review[title]" placeholder="タイトル"/>
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
        <div class="body">
          <h2>Body</h2>
          <textarea name="review[body]" placeholder="お疲れ様です"></textarea>
        </div>
        <input type=hidden name="review[user_id]" value='{{ $auth->id }}'/>
        <input type="submit" value="store"/>
     </form>
     <div class="footer">
      <a href="/">戻る</a>
     </div>
  </body>
</html>

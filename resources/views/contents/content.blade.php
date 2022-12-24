<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Reviews</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <h1>作品一覧</h1>
      <h2>カテゴリー</h2>
      <select class="form-control" id="content" name="content[content]">
        <option value="1">映画</option>
        <option value="2">漫画</option>
        <option value="3">小説</option>
        <option value="4">ゲーム</option>
        <option value="5">アニメ</option>
        <option value="6">お化け屋敷</option>
      </select>
      
      <div class='contents'>
        @foreach($contents as $content)
        <div class='content'>
          <h3 class='title'>
            <a href="/contents/detail/{{ $content->id }}">{{ $content->title }}</a>
          </h3>
	      </div>
        @endforeach
      </div>
    </body>
</html>

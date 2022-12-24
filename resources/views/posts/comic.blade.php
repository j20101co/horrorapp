<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Reviews</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <h1>漫画投稿一覧</h1>
      <a href='/reviews/create'>投稿作成</a>
      <div class='posts'>
        @foreach($reviews as $review)
        <div class='post'>
          <h2 class='title'>{{ $review->title }}</h2>
          <p class='body'>{{ $review->body }}</p>
          <form action="/reviews/{{ $review->id }}" id="form_{{ $review->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $review->id }})">delete</button>
            </form>
            </button>
          </form>
	</div>
         @endforeach
      </div>
      <script>
        function deletePost(id) {
          'use strict'
          
          if (confirm('削除すると復元できません。')){
            document.getElementById(`form_${id}`).submit();
          }
        }
      </script>
  </body>
</html>

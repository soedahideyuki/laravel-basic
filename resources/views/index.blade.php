<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel基礎</title>
</head>
<body>
  <!-- １０章 -->
  <!-- <p>Hello, world!</p>
  <p>これはindex.blade.phpファイルです。</p> -->

  <!-- １１章 -->
  <p>こんにちは、{{ $name }} さん。</p>
  <ul>
    @foreach($languages as $language)
    <li>{{ $language }}</li>
    {{-- @endforeach --}}  
    <!-- 質問　コメントアウトについて -->
  </ul>
</body>
</html>
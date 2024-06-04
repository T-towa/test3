<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
</head>
<body>
    <h1 class = 'title'>
        {{ $post->title}}
    </h1>
    <div class = 'content_post'>
        <h3>本文</h3>
        <p>{{ $post->body }}</p>
    </div>
    <div class = 'footer'>
        <a href="/">戻る</a>
    </div>
</body>
</html>
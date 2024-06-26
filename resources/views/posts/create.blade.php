<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
</head>
<body>
    <h1>Blog Name</h1>
    <form action="/posts" method="POST">
        @csrf <!-- セキュリティ担保ため他のサイトからのリクエスト送信を許容しない -->
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="post[title]" placeholder="タイトル" value={{ old('post.title')}}>
            <p class='title__error' style = "color:red">{{ $errors->first('post.title')}}</p>
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="post[body]" placeholder="今日も一日お疲れ様でした">{{old('post.body')}}</textarea>
            <p class='body__error' style = "color:red">{{ $errors->first('post.body')}}</p>
        </div>
        <input type="submit" value="store">
    </form>
    <div class = 'footer'>
        <a href="/">戻る</a>
    </div>
</body>
</html>

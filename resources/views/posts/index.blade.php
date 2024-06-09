<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
</head>
<body>
    <h1>Blog Name</h1>
    <a href="/posts/create">create</a>
    <div class='posts'>
        @foreach ($p as $post)
            <div>
                <a href="/posts/{{ $post->id}}">
                    <h2>{{ $post->title }}</h2>
                </a>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach
    </div>
    <div>
        {{ $p->links() }}
    </div>
</body>
</html>
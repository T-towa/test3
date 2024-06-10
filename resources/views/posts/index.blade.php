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
                <form action="/posts/{{ $post->id}}" id="form_{{ $post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id}})">delete</button>
                </form>
            </div>
        @endforeach
    </div>
    <div>{{ $p->links() }}</div>
    <script>//この位置に指定するのは処理を高速化するため
        function deletePost(id){
            'use strict'
            
            if(confirm('削除すると復元できません。\n本当に削除しますか?')){
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</body>
</html>
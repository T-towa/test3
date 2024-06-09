<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;


class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->getPaginateByLimit(1);
        //$posts = $post::orderBy('updated_at', 'desc')->paginate(5); // 5件ごとにページネーション
        return view('posts.index', ['p' => $posts]);
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();//SQLのINSERET
        return redirect('/posts/'. $post->id);
    }
}

<?php

// app/Http/Controllers/PostController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->getPaginateByLimit(1);
        //$posts = $post::orderBy('updated_at', 'desc')->paginate(5); // 5件ごとにページネーション
        return view('posts.index', ['p' => $posts]);
    }
}

<?php

// app/Http/Controllers/PostController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->take(10)->get();
        return view('posts.index', ['posts' => $posts]);
    }
}

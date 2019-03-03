<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;

class HomeController extends Controller
{
    public function indexAdmin()
    {
        $posts = Post::all();
        $tags = Tag::all();
        return view('admin.index', compact('posts', 'tags'));
    }

    public function index()
    {
        $posts = Post::all();
        $tags = Tag::all();
        return view('front.index', compact('posts', 'tags'));
    }
    
    

    public function show(Post $post)
    {
       return view('front.show', compact('post'));
    }
}

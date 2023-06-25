<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {


        return view ('home', [
            "title" => "Home",
            "active" => 'home',
            "home" => Post::latest()->filter(request(['search']))->paginate(7)->withQueryString()
        ]);
    }


    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'home',
            'post' => $post
        ]);
    }
}

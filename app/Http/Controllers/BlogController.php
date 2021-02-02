<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $posts = \App\Post::where('status','=','published')
        ->orderBy('created_at','desc')
        ->paginate(6);
        return view('blog.index',compact('posts'));
    }
}

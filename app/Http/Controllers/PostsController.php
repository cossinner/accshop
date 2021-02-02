<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $produs=$_POST("nume1");
        return view('home');
    }
    public function post(post $post)
    {
        $Key ='blog' . $post->id;
        if(\Session::has($Key)){

            \DB::table('posts')
            ->where('id',$post->id)
            ->increment('view_count', 1);
            \Session::put($Key, 1);
        }
    }
}

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post.',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    return view('post', [
        'post' => $posts[$post] ?? 'Nothing here yet.'
    ]);

});*/
Route::get('/', function () {
    return view('home');
});
Route::get('/about',function() {
    return view('about');
});
Route::get('/shop',function() {
    return view('shop');
});
Route::get('/contact',function() {
    return view('contact');
});
Route::get('/logout',function() {
    return view('logout');
});
//Route::get('/posts/{post}', 'PostsController$show');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

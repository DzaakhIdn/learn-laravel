<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/blog', function () {
    $posts = Post::all();
    return view('blog', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/post/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

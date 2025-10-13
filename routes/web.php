<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/blog', function () {
    $posts = Post::all();
    // dd($posts);
    return view('blog', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    // dd($post);
    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/author/{user}', function (User $user) {
    // dd($post);
    return view('author', ['title' => 'Posts By ' . $user->name, 'posts' => $user->posts, 'author' => $user]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

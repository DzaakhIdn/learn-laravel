<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/blog', function () {
    // $posts = Post::with(['category', 'author'])->get();
    $posts = Post::latest()->filter(request(['keyword']))->get();
    // dd($posts);
    return view('blog', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    // dd($post);
    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/author/{user:username}', function (User $user) {
    // dd($post);
    // $posts = $user->posts->load(['author', 'category']);
    return view('author', ['title' => 'Posts By ' . $user->name, 'posts' => $user->posts, 'author' => $user]);
});

Route::get('/categories', function () {
    $categories = Category::all();
    return view('categories', ['title' => 'Category Page', 'categories' => $categories]);
});

Route::get('/single-category/{category:slug}', function (Category $category) {
    // $categories = $category->posts->load(['author', 'category']);
    $posts = $category->posts->filter(request(['keyword']));
    return view('singel-category', ['title' => 'Category Page', 'category' => $category, 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

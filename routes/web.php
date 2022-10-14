<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('home', [
        'active' => 'home',
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view(
        'about',
        [
            'active' => 'about',
            'title' => 'About',
            'name' => "Arif Budiman Arrosyid",
            "email" => "arifbudimanarrosyid@gmail.com",
            "image" => "logo.png"
        ]
    );
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'active' => 'categories',
        'title' => 'Categories',
        'categories' => Category::all()

    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'active' => 'categories',
//         'title' => "Posts by Category: $category->name",
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'active' => 'posts',
//         'title' => "Post by Author: $author->name",
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });

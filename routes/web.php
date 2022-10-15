<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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
// Login Route
Route::get('/login', [LoginController::class, 'index'])
    ->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

//Logut Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Route
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')
    ->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard.index');
})
    ->middleware(['auth'])->name('dashboard');

Route::resource('dashboard/posts', DashboardPostController::class)->middleware(['auth']);

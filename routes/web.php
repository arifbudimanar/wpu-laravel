<?php

use App\Http\Controllers\AdminCategoryController;
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

// Home Route
Route::get('/', function () {
    return view('home', [
        'active' => 'home',
        'title' => 'Home',
    ]);
});

// About Route
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

// Blog Route
Route::get('/blog', [PostController::class, 'index']);

// Single Post Route
Route::get('post/{post:slug}', [PostController::class, 'show']);

// Categories Route
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

// Dashboard Post Route
Route::resource('dashboard/posts', DashboardPostController::class)->middleware(['auth']);

// Dashboard Category Route
Route::resource('dashboard/categories', AdminCategoryController::class)->except([''])
    ->middleware(['admin']);


// Ketik 'php artisan route:list' untuk melihat daftar route yang telah dibuat.

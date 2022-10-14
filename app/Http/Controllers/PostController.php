<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts', [
            'active' => 'posts',
            'title' => 'All Posts' . $title,
            // 'posts' => Post::all()

            //Eager Loading
            // 'posts' => Post::latest()->get()

            //Lazy Loading
            // 'posts' => Post::latest()->get()

            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate('7')->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'active' => 'posts',
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}

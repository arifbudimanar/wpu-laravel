@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{
                    $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a>
            </p>
            {{-- <p>{{ $post->excerpt }}</p> --}}

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>



            <a href="/blog">Back</a>

        </div>
    </div>
</div>
@endsection




{{-- <h1>Post</h1>
@dd($post)

<article class="mb-5">

    <h2>{{ $post->title }}</h2>
    <h5>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
        in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}
    </h5>
    </a>
    <p>{{ $post->excerpt }}</p>
    {!!$post->body!!}
</article>

<a href="/blog">Back</a> --}}



{{-- Post::create([
'title' => 'Judul Post Kedua',
'slug' => 'judul-post-kedua',
'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>',
'category_id' => 1
]); --}}

{{-- Category::create([
'name' => 'Personal',
'slug' => 'personal'
]); --}}

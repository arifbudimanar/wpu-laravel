@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span> Back</a>
            <a href="" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"> <span data-feather="trash"></span> Delete</a>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid mt-3">

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>
        </div>
    </div>
</div>
@endsection

@extends('layouts.main')
@section('container')
<h1 class="mb-5">Post Categories</h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <a href="/categories/{{ $category->slug }}">
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img"
                        alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-5 fs-3"
                            style="background-color: rgba(0, 0, 0, 0.5)">{{ $category->name }}
                        </h5>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

{{-- @foreach ($categories as $category)

<article class="mb-5">
    <h2>
        <a href="/categories/{{ $category->slug }}">
            {{ $category->name }}
        </a>
    </h2>

</article>

@endforeach --}}

@endsection

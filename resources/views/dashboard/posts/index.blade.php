@extends('dashboard.layouts.main')
@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Posts</h1>
    </div>
    <div class="table-responsive">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table table-striped col-lg-8">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"
                                class="align-text-bottom"></span></a>
                        <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-warning"><span data-feather="edit"
                                class="align-text-bottom"></span></a>
                        <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-danger"><span data-feather="trash"
                                class="align-text-bottom"></span></a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</main>
@endsection

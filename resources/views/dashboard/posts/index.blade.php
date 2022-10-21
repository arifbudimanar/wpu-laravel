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
        @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <table class="table table-striped col-lg-8">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Judul</th>
                    @can('admin')
                    <th scope="col">Author</th>
                    @endcan
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    @can('admin')
                    <td>{{ $post->author->name }}</td>
                    @endcan
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"
                                class="align-text-bottom"></span></a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span
                                data-feather="edit" class="align-text-bottom"></span></a>

                        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                <span data-feather="trash" class="align-text-bottom"></span>
                            </button>
                        </form>

                    </td>
                </tr>

                @endforeach


            </tbody>

        </table>
        {{-- @can('admin')
        {{ $posts->links() }}
        @endcan --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    </div>

</main>

@endsection

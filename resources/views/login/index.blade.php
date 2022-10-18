@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-signin w-100 m-auto">

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

            <form action="/login" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                        autofocus required @error('email') is-invalid @enderror value="{{ old('email') }}">
                    <label for="email">Email address</label>

                    @error('email')
                    <div class="invalid-feedback"></div>
                    {{ $message }}
                    @enderror

                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        required @error('password') is-invalid @enderror>
                    <label for="password">Password</label>

                    @error('password')
                    <div class="invalid-feedback"></div>
                    {{ $message }}
                    @enderror

                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            </form>

            <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now.</a></small>
        </main>
    </div>
</div>

@endsection

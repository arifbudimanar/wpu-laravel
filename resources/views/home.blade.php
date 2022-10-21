@extends('layouts.main')

@section('container')


<main>
    <div class="container py-4">

        <div class="py-14 p-5 bg-light my-auto rounded-3 mb-5">
            <div class="container align-middle">
                <div class="row ">
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-12 text-center">
                        <span class="fs-4 text-dark ls-md text-uppercase
                fw-semi-bold">make a better post</span>

                        </span>
                        <!-- heading  -->
                        <h2 class="display-3 mt-4 mb-3 text-dark fw-bold">Learn, Write, Share and Grow.</h2>
                        <!-- para  -->
                        <p class="lead text-dark px-lg-8 mb-6"> Design for sharing code,
                            made by developers for developers,
                            build with Laravel 8 and Bootstrap.</p>
                        <a href="/register" class="btn btn-success">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one
                    in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it
                    to your liking.</p>
                <button class="btn btn-primary btn-lg" type="button">Example button</button>
            </div>
        </div>


        <div class="row align-items-md-stretch">
            <div class="col-md-6 mb-2">
                <div class="h-100 p-5 mb-2 bg-dark text-light rounded-3">
                    <h2>Change the background</h2>
                    <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look.
                        Then, mix and match with additional component themes and more.</p>
                    <button class="btn btn-outline-light" type="button">Example button</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Add borders</h2>
                    <p>Or, keep it light and add a border for some added definition to the boundaries of your content.
                        Be sure to look under the hood at the source HTML here as we've adjusted the alignment and
                        sizing of both column's content for equal-height.</p>
                    <button class="btn btn-outline-secondary" type="button">Example button</button>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2022 - made with Laravel 8 and Bootstrap 5
            </footer>
        </div>


    </div>
</main>



@endsection

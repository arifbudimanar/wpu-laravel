@extends('layouts.main')

@section('container')

<h1>About</h1>
<h2>{{ $name }}</h2>
<p>{{ $email }}</p>
<img src="/image/{{ $image }}" alt="{{ $image }}" width="100">

@endsection

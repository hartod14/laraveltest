@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-4">{{ $post->title }} </h1>
                <a href="/dashboard/posts" class="btn btn-success">Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-success">Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                <p>By <a href="/posts?author={{ $post->author->username }} "
                        class="text-decoration-none">{{ $post->author->name }} </a> in
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                        {{ $post->category->name }}
                    </a>
                </p>
                <img src="https://img.freepik.com/free-photo/rear-view-programmer-working-all-night-long_1098-18697.jpg?t=st=1657860992~exp=1657861592~hmac=d922aa9e0a1ea261fdc28ced9b1b1fa9595471c283da1ed5305628a342b648ac&w=740"
                    class="img-fluid mb-3" alt="{{ $post->category->name }}">
                <p> {{ $post->body }}</p>
            </div>
        </div>
    </div>
@endsection

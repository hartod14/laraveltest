@extends('layouts/main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." value="{{request('search') }}" name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if($posts->count())
<div class="card mb-3">
    <a href="/posts/{{$posts[0]->slug}}"><img src="https://img.freepik.com/free-photo/rear-view-programmer-working-all-night-long_1098-18697.jpg?t=st=1657860992~exp=1657861592~hmac=d922aa9e0a1ea261fdc28ced9b1b1fa9595471c283da1ed5305628a342b648ac&w=740" class="card-img-top" alt="..."></a>
    <div class="card-body text-center">
        <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none text-dark">
            <h3 class="card-title">{{ $posts[0]->title }} </h3>
        </a>
        <p>
            <small>
                By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }} </a> in
                <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                    {{ $posts[0]->category->name }}
                </a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt  }} </p>
        <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none btn btn-primary">Read More...</a>
    </div>
</div>


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="https://img.freepik.com/free-photo/rear-view-programmer-working-all-night-long_1098-18697.jpg?t=st=1657860992~exp=1657861592~hmac=d922aa9e0a1ea261fdc28ced9b1b1fa9595471c283da1ed5305628a342b648ac&w=740" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title  }}</h5>
                    <small>
                        By. <a href="/posts?author={{$post->author->username}} " class="text-decoration-none">{{ $post->author->name }} </a> in
                        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                            {{ $post->category->name }}
                        </a> {{ $post->created_at->diffForHumans() }}
                    </small>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No Post Found!</p>
@endif

<div class="d-flex justify-content-end">{{ $posts->links() }}</div>


@endsection
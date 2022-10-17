@extends('layouts.main')
@section('container')
    <h1 class="mb-3">Post Category : {{ $category->name }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="/categories" class="btn btn-primary mb-4">Kembali ke Categories</a>
        </div>
        <div class="col-md-6">
            <form action="/categories/{{ $category->slug }}">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    @if ($posts->count())
        <div class="card mb-3 shadow">
            @if ($posts[0]->image)
                <div style="max-height: 310px; overflow: hidden;">
                    <img src="{{ asset('storage/'.$posts[0]->image) }}" alt="" class="card-img-top">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x200?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
            @endif
            <div class="card-body text-center">
                <h5 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a></h5>
                <p>
                    <small class="text-muted">
                        By. <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary btn-sm">Read More</a>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 col-sm-12 mb-3">
                        <div class="card shadow">
                            <div class="position-absolute px-2 py-1 text-white rounded-3 mt-2 ms-2" style="background-color: rgba(0, 0, 0, 0.6)">
                                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <img src="{{ asset('storage/'.$post->image) }}" alt="" class="card-img-top">
                            @else
                                <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" class="card-img-top" alt="...">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
                                <p>
                                    <small class="text-muted">
                                        By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ Str::substr($post->excerpt, 0, 100) }}...</p>
                                <a href="/blog/{{ $post->slug }}" class="btn btn-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="alert alert-danger text-center shadow" role="alert">
            No Post Found.
        </div>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
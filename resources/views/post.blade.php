@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                @if ($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid mb-3">
                @else
                    <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" alt="" class="img-fluid mb-3">
                @endif
                {!! $post->body !!}

                <a href="/blog" class="btn btn-primary mt-4">Kembali ke Post</a>
            </div>
        </div>
    </div>
@endsection
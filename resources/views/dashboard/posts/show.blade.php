@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5 mt-3">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                
                <a href="/dashboard/posts" class="btn btn-sm btn-info text-white mb-3"><span class="align-text-bottom" data-feather="arrow-left"></span> Back</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning text-white mb-3"><span class="align-text-bottom" data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-sm btn-danger text-white mb-3" onclick="return confirm('Are you sure?')"><span class="align-text-bottom" data-feather="trash"></span> Delete</button>
                </form>

                @if ($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid mb-3">
                @else
                    <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" alt="" class="img-fluid mb-3">
                @endif
                {!! $post->body !!}

            </div>
        </div>
    </div>
@endsection
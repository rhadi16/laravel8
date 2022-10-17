@extends('layouts.main')
@section('container')
    <h1 class="mb-4">List Authors</h1>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($authors as $author)
            <div class="col-sm-6 col-md-3 col-lg-2 mb-4">
                <a href="/authors/{{ $author->username }}">
                    <div class="card text-bg-dark shadow">
                        <img src="img-profile/student.png" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-6" style="background-color: rgba(0, 0, 0, .7)">
                                <span class="text-capitalize">{{ $author->name }}</span>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
@extends('layouts.main')
@section('container')
    <div class="row justify-content-center mt-7">
        <div class="col-md-5 mt-4 mb-5">
            <main class="form-signin w-100 m-auto text-center">
                <form action="/register" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Registration</h1>
                
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required name="name" value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required name="username" value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required name="email" value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required name="password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Registration</button>
                    <p class="mt-2 mb-3 text-muted">Have an Account? <a href="/login">Login!</a></p>
                </form>
            </main>
        </div>
    </div>
@endsection
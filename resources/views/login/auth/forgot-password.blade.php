@extends('layouts.main')
@section('container')
    <div class="row justify-content-center mt-7">
        <div class="col-md-5 mt-4 mb-5">
            <main class="form-signin w-100 m-auto text-center">
                <form action="/forgot-password" method="POST">
                    @csrf
                    <img class="mb-4" src="img-login/bootstrap-logo.svg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Forgot Password</h1>

                    @if (session()->has('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Send Link</button>
                    <p class="mt-2 text-muted">Have an account? <a href="/login">Login!</a></p>
                </form>
            </main>
        </div>
    </div>
@endsection
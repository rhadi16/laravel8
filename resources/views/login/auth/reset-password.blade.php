@extends('layouts.main')
@section('container')
    <div class="row justify-content-center mt-7">
        <div class="col-md-5 mt-4 mb-5">
            <main class="form-signin w-100 m-auto text-center">
                <form action="/reset-password" method="POST">
                    @csrf
                    <img class="mb-4" src="{{ URL::asset('img-login/bootstrap-logo.svg') }}" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Reset Password</h1>

                    @if (session()->has('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->token }}">

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email', $request->email) }}" readonly>
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="New Password" name="password">
                        <label for="password">New Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Password Confirmation" name="password_confirmation">
                        <label for="password_confirmation">Password Confirmation</label>
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Reset Password</button>
                </form>
            </main>
        </div>
    </div>
@endsection
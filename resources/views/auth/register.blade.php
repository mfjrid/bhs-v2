@extends('layouts.fullpage')

@section('content')
    <div class="container-bhs">
        <div class="container pt-2">
            <div class="row justify-content-center pt-4 mt-md-4">
                <div class="col-md-9" style="background-color: rgb(19, 21, 23);">
                    <div class="row align-items-center">
                        <div class="col-lg-5 p-2">
                            <div class="position-relative overflow-hidden"><img
                                    src="https://images.unsplash.com/photo-1572883454114-1cf0031ede2a?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YnVpbGRpbmdzfGVufDB8MXwwfHw%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60"
                                    alt="" class="w-100">
                            </div>
                        </div>
                        <div class="col-lg-7 p-4">
                            <div class="mb-5">
                                <h3 class="fw-bold">Create an Account</h3>
                                <p>Create your own account for free.</p>
                            </div>
                            <form method="POST" action="{{ route('register') }}" class="mb-4">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" placeholder="Name" autofocus
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" placeholder="email" required
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            id="username" name="username" placeholder="username" required
                                            value="{{ old('username') }}">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password" name="password" placeholder="password" required
                                            autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation" placeholder="re-type password" required
                                            autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary d-block">Register</button>
                                </div>
                            </form>
                            <div class="text-small text-center"> Already registered? <a href="/login"
                                    class="">Login</a> <br>
                                or <a href="/" class="">Back to Home</a>. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

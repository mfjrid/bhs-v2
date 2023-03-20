@extends('layouts.fullpage')

@section('title')
    Login
@endsection

@section('content')
    <div class="container-bhs">
        <div class="container pt-2">
            <div class="row justify-content-center pt-4 mt-md-4">
                <div class="col-md-9" style="background-color: rgb(19, 21, 23);">
                    <div class="row align-items-center">
                        <div class="col-md-7 p-2">
                            <div class="position-relative overflow-hidden"><img
                                    src="https://g2.img-dpreview.com/81C81CB44922409EA3C99FA3E42369CD.jpg" alt=""
                                    class="w-100">
                                <div class="quotes">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda,
                                        beatae.</p><strong>Artist</strong>
                                    <p>— Judul</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 p-4">
                            <div class="mb-5">
                                <h3 class="fw-bold">Account Login</h3>
                                <p>Login to access our feature.</p>
                            </div>
                            <form action="{{ route('login') }}" method="POST" class="mb-4">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        id="username" name="username" placeholder="username" value="{{ old('username') }}"
                                        required autofocus>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" placeholder="password" value="{{ old('password') }}"
                                        required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="d-grid"><button type="submit" class="btn btn-primary d-block">Login</button>
                                </div>
                            </form>
                            <div class="text-small text-center"> Don't have an Account? <a href="{{ route('register') }}"
                                    class="">Register</a><br> or <a href="{{ route('home') }}" class="">Back to
                                    Home</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

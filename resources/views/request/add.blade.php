@extends('layouts.app')

@section('title')
    Add Requests
@endsection

@push('style')
    <link rel="stylesheet" href="{{ url('/') }}/dist/sweetalert/dark.css">
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-md-4">
            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                    </div>
                    <div class="col-lg-7 p-4">
                        <div class="mb-4">
                            <h3 class="fw-bold">Send a Requests</h3>
                            <p>Create a request as <b>{{ Auth::user()->name }}</b>.</p>
                        </div>

                        <form method="POST" action="{{ route('store-request') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="category_id" class="form-label">Select Category</label>
                                    <select class="form-select" name="category_id" required>
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @empty
                                            <option value="0">No Category</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="quality_id" class="form-label">Select Quality</label>
                                    <select class="form-select" name="quality_id" required>
                                        @forelse ($qualities as $quality)
                                            <option value="{{ $quality->id }}">{{ $quality->name }}</option>
                                        @empty
                                            <option value="0">Quality Doesn't Exist.</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="url" class="form-label">YouTube URL</label>
                                    <input type="url" class="form-control @error('url') is-invalid @enderror"
                                        id="url" name="url"
                                        placeholder="https://youtube.com/dhsajkdhskdsadgsauidas" required
                                        autocomplete="off">
                                    @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="message" class="form-label">Special Message (Optional)</label>
                                    <input type="text" class="form-control @error('message') is-invalid @enderror"
                                        id="message" name="message" placeholder="Message" maxlength="100"
                                        autocomplete="off">
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary d-block">Send Request</button>
                            </div>
                        </form>
                        <div class="text-small text-center mt-3"><a href="{{ route('home') }}" class="">Back to
                                Home</a>. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ url('/') }}/dist/sweetalert/sweetalert2.min.js"></script>
    <script>
        @if ($message = session('success'))
            Swal.fire(
                'Request Sent!',
                '{{ $message }}',
                'success'
            )
        @endif
    </script>
@endpush

@extends('layouts.app')

@section('title')
    Add Requests
@endsection

@section('content')
    <div class="container pt-md-5">
        <div class="row justify-content-center mt-md-4">
            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                    </div>
                    <div class="col-lg-7 p-4">
                        <div class="mb-5">
                            <h3 class="fw-bold">Send a Requests</h3>
                            <p>Create a request as <b>Fajar</b>.</p>
                        </div>

                        <form class="">
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
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="url" class="form-label">YouTube URL</label>
                                    <input type="url" class="form-control" id="url" name="url"
                                        placeholder="https://youtube.com/dhsajkdhskdsadgsauidas" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="message" class="form-label">Special Message (Optional)</label>
                                    <input type="text" class="form-control" id="message" name="message"
                                        placeholder="Message">
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary d-block">Send Request</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

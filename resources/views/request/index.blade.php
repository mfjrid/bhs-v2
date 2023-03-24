@extends('layouts.app')

@section('title')
    All Requests
@endsection

@section('content')
    <div class="container pt-md-5">
        <div class="row pt-md-5">
            <div class="col-md-12 text-center mb-3">
                <h1 class="h1-bhs">
                    <span class="text-bhs">All Request</span> List
                </h1>
                <p>See yours and others requests list.</p>
            </div>
            <div class="nav-item text-center">
                <a class="btn btn-primary" href="{{ route('add-request') }}">Make a Request</a>
            </div>
        </div>
        <div class="row mt-4 pt-md-5">
            <table class="table table-striped table-dark table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Requester</th>
                        <th>Youtube URL</th>
                        <th>Category</th>
                        <th>Quality</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $number = 1;
                    @endphp
                    @forelse ($requests as $request)
                        <tr>
                            <td>{{ $number++ }}</td>
                            <td>{{ $request->user->name }}</td>
                            <td><a href="{{ $request->url }}" target="_blank">Video Link</a></td>
                            <td>{{ $request->category->name }}</td>
                            <td>{{ $request->quality->name }}</td>
                            <td>{{ $request->status->name }}</td>
                            <td>{{ $request->created_at->diffForHumans() }}</td>
                            <td>{{ $request->updated_at->diffForHumans() }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No Request.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

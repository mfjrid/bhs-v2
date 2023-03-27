@extends('layouts.app')

@section('title')
    My Requests
@endsection

@section('content')
    <div class="container pt-md-5">
        <div class="row pt-md-5">
            <div class="col-md-12 text-center mb-3">
                <h1 class="h1-bhs">
                    <span class="text-bhs">My Request</span> List
                </h1>
                <p>You can see and manage all your request here.</p>
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
                        <th>Youtube URL</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $number = 1;
                    @endphp
                    @forelse ($requests as $request)
                        <tr>
                            <td>{{ $number++ }}</td>
                            <td><a href="{{ $request->url }}" target="_blank">Video Link</a></td>
                            <td>
                                <div class="badge" style="background-color: {{ $request->status->color }};">
                                    <span>{{ $request->status->name }}</span>
                                </div>
                            </td>
                            <td>{{ $request->created_at->diffForHumans() }}</td>
                            <td>{{ $request->updated_at->diffForHumans() }}</td>
                            <td>Delete</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">You have no Request.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

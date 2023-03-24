@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="container pt-md-5">
        <div class="row pt-md-5">
            <div class="col-md-12 text-center mb-3"><span>Sponsor</span>
                <h1 class="h1-bhs"><span class="text-bhs">Launch your startup</span> with <br> this Framer template </h1>
                <p>Here is a comparison chart of us with the Ipsum tool, but at the end we win!</p>
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
                    </tr>
                </thead>
                <tbody>
                    @php
                        $number = 1;
                    @endphp
                    @forelse ($requests as $request)
                        <tr>
                            <td>{{ $number++ }}</th>
                            <td>{{ $request->url }}</th>
                            <td>{{ $request->status->name }}</th>
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

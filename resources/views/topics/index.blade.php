@extends('layouts.main')

@section('container')

<h1>Forum List</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('topics.create') }}" class="btn btn-primary">Create Forum</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Forum</th>
            <th scope="col">Comments</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($topics as $index => $topic)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $topic->title }}</td>
                <td>{{ $topic->replies_count }}</td>
                <td>
                    <a href="{{ route('topics.show', $topic->id) }}" class="btn btn-primary">Read More</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
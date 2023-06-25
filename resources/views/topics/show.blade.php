@extends('layouts.main')

@section('container')


<h1>{{ $topic->title }}</h1>

<p>{{ $topic->content }}</p>

<h2>Balasan</h2>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@foreach($topic->replies as $reply)
    <div class="card mb-3">
        <div class="card-body">
            <p class="card-text">{{ $reply->content }}</p>
            <p class="card-text">Created at: {{ $reply->created_at }}</p>
        </div>
    </div>
@endforeach

<form action="{{ route('replies.store', $topic->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="content">Comment</label>
        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Comment</button>
</form>


@endsection
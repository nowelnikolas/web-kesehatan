@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-md-8">

       
    <h1 class="mb-3">{{ $post->title }}</h1>

    <a href="/dashboard/posts"class ="btn btn-success">Back to all post</a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit"class ="btn btn-warning">Edit</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle">Delete</span></button>
     </form>

    @if($post->image)
    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
    @else
    <img src="https://source.unsplash.com/1200x400?nature,water" alt="" class="img-fluid">
    @endif
    <article class="my-3 fs-5">
    {!! $post->body !!}
</article>


@endsection
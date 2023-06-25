@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">

       
    <h1 class="mb-3">{{ $post->title }}</h1>


    @if($post->image)
    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
    @else
    <img src="https://source.unsplash.com/1200x400?nature,water" alt="" class="img-fluid">
    @endif

    <article class="my-3 fs-5">
    {!! $post->body !!}
</article>


<a href="/">Back to Home</a>


        </div>
    </div>
</div>




@endsection
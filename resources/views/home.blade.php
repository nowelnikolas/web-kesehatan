

@extends('layouts.main')

  
  @section('container')
  <h1 class="mb-3 text-center">{{ $title }}</h1>

  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
  <button class="btn btn-outline-danger" type="submit">Search</button>
</div>

      </form>
    </div>
  </div>


  @if($home->count())
  <div class="card mb-3">
  @if($home[0]->image)
    <img src="{{ asset('storage/' . $home[0]->image) }}" alt="" class="img-fluid">
    @else
    <img src="https://source.unsplash.com/1200x400?nature,water" class="card-img-top" alt="...">
    @endif
  
  <div class="card-body text-center">
    <h3 class="card-title"><a href="/home/{{ $home[0]->slug }}" class="text-decoration-none text-dark">{{ $home[0]->title}}</a></h3>
    <p class="card-text">{{ $home[0]->excerpt }}</p>
    <a href="/home/{{ $home[0]->slug }}" class="text-decoration-none btn btn-primary" >Read more</a>
    <p class="card-text"><small class="text-muted">{{ $home[0]->created_at->diffForHumans() }}
    </small>
  </p>
  </div>
</div>


  <div class="container">

  <div class="row">
    @foreach($home->skip(1) as $post)

    <div class="col-md-4 mb-3">
    <div class="card">
    @if($post->image)
    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
    @else
    <<img src="https://source.unsplash.com/500x400?nature,water" class="card-img-top" alt="...">
    @endif
  
  <div class="card-body">
    <h5 class="card-title">{{ $post->title}}</h5>
    <p class="card-text">{{ $post->excerpt }}</p>
    <a href="/home/{{ $post->slug }}" class="text-decoration-none btn btn-primary" >Read more</a>
    <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}
    </small>
  </p>
  </div>
</div>
</div>
@endforeach
  </div>

  </d>
  @else
  <p class="text-center fs-4">No Article Found.</p>
  @endif

  <div class="d-flex justify-content-end">
  {{ $home->links() }}
  </div>


    @endsection
{{-- @extends('layouts.main')


@section('container')
<h1 class="mb-3">Artikel Populer</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
<button class="btn btn-outline-danger" type="submit">Search</button>
</div>

</form>
</div>
<!-- Artikel Headline -->
<div class="col-12 mt-3">
  <div class="card">
    <div class="card-body row">
      <div class="col-md-4">
        <img class="img-fluid" src="{{ asset('assets/working.png') }}" alt="">
      </div>
      <div class="col-md-8 text-center row">
        <div class="">
          <h1>7 Cara Gakena Mental</h1>
        </div>
        <p class="text-justify">Memiliki mimpi yang besar memang sangat menyenangkan. Namun, keinginan dan cita-cita yang jauh dari kenyataan dan akal sehat bukan tidak mungkin akan membuat kamu lebih mudah kecewa saat gagal menggapainya. Tak jarang, rasa kecewa juga memengaruhi mental.
          Memiliki cita-cita yang realistis dan bisa kamu capai tentu akan membuat kamu lebih termotivasi untuk melakukan hal yang lebih baik lagi. Setiap kamu berhasil mencapainya, kamu akan merasa lebih percaya pada kemampuan diri sendiri.
          Kamu juga akan lebih mudah untuk mengidentifikasi tujuan yang tidak terlalu menantang. Selain itu ada pula pilihan yang sebaiknya tidak kamu lanjutkan karena terlalu tinggi dan tidak masuk akal.</p>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Artikel Terbaru -->
<h2> Artikel Terbaru</h2>
<div class="row col-12">
  <div class="col-md-3">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <img class="img-fluid mx-auto" src="{{ asset('assets/working.png') }}" alt="">
        <h5 class="text-center mt-2">Pentingnya Kesehatan Mental</h5>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <img class="img-fluid mx-auto" src="{{ asset('assets/working.png') }}" alt="">
        <h5 class="text-center mt-2">Pentingnya Kesehatan Mental</h5>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <img class="img-fluid mx-auto" src="{{ asset('assets/working.png') }}" alt="">
        <h5 class="text-center mt-2">Pentingnya Kesehatan Mental</h5>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <img class="img-fluid mx-auto" src="{{ asset('assets/working.png') }}" alt="">
        <h5 class="text-center mt-2">Pentingnya Kesehatan Mental</h5>
      </div>
    </div>
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
    <a href="/home/{{ $home[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
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
            <a href="/home/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
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


  @endsection --}}


  <!-- Mulai disini -->

  @extends('layouts.main')


  @section('container')
  <h1 class="mb-3">Artikel Populer</h1>

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
    <div class="row">
      <div class="col-md-4">
        @if($home[0]->image)
          <img src="{{ asset($home[0]->image) }}" alt="" class="img-fluid">
        @else
          <img src="https://source.unsplash.com/1200x400?nature,water" class="card-img-top" alt="...">
        @endif
      </div>
      <div class="col-md-8">
        <a href="/home/{{ $home[0]->slug }}" class="card-body text-decoration-none">
          <div class="card-body text-center">
            <div class="mt-5">
              <h3 class="card-title">{{ $home[0]->title }}</h3>
              <p class="card-text">{{ $home[0]->excerpt }}</p>
              <p class="card-text"><small class="text-muted">{{ $home[0]->created_at->diffForHumans() }}</small></p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>


  <div class="container">
    <h1 class="mb-3">Artikel Terbaru</h1>
    <div class="row">
      @foreach($home->skip(1) as $post)

      <div class="col-md-3 mb-3">
        <div class="card">
          @if($post->image)
          <img src="{{ asset($post->image) }}" alt="" class="img-fluid">
          @else
          <img src="https://source.unsplash.com/500x400?nature,water" class="card-img-top" alt="...">
          @endif

          <a href="/home/{{ $post->slug }}" class="card-body text-decoration-none">
            <h5 class="card-title">{{ $post->title }}</h5>
            <!-- <p class="card-text">{{ $post->excerpt }}</p> -->
            <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
          </a>
        </div>
      </div>
      @endforeach
    </div>

    </div>
    @else
    <p class="text-center fs-4">No Article Found.</p>
    @endif

    <div class="d-flex justify-content-end">
      {{ $home->links() }}
    </div>


    @endsection
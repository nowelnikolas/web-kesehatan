@extends('layouts.main')

@section('container')

<header class="py-5">
    <div class="container px-5 pb-5">
        {{-- <div class="row gx-5 align-items-center"> --}}
            
            <div class="card" style="width: 18rem;">
                <div class="card-top">
                    {{-- <p class="card-text">{{ $day }}</p>
                    <p class="card-text">{{ $dated }} {{ $datem }} {{ $datey }}</p> --}}
                    <p class="card-text">{{ $mood->mood }} | {{ $mood->todo }}</p>
                  </div>
                <img class="card-img-top" src="{{ asset($mood->img) }}" alt="Card image cap">
               
              </div>
              <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                <a class="btn btn-success btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="/">Home</a>  
            </div>
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="">MoodTracker History</a>  
            </div>
        {{-- </div> --}}
    </div>
</header>
<!-- About Section-->


@endsection


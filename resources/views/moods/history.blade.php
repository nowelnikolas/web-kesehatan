@extends('layouts.main')

@section('container')

<header class="">
    <style>
        .card {
            display: flex;
            align-items: center;
            width: 300px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .card-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .card-content {
            flex: 1;
        }

        .card-title {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .card-description {
            font-size: 14px;
            color: #888;
        }
    </style>

    <div class="container row">
        {{-- <div class="row gx-5 align-items-center"> --}}
        @foreach($mood as $mood)
        <div class="col-md-3 mb-4">
            <div class="card border-2" style="width: 18rem; background-color: #FFC0CB;">
                <div class="card-body">
                    <?php $timestamp = strtotime($mood->created_at); ?>
                    <h5 class="text-center">{{ date('l', $timestamp); }}</h5>
                    <h5 class="text-center">{{ date('d', $timestamp); }} {{ date('F', $timestamp); }} {{ date('Y', $timestamp); }}</h5>
                    <h5 class="text-center">{{ $mood->mood }} | {{ $mood->todo }}</h5>
                </div>
                <img class="card-img-top img-fluid" src="{{ asset($mood->img) }}" alt="Card image cap">
            </div>
        </div>


        <!-- <div class="card" style="width: 18rem;">
            <div class="card-top">
          
                <p class="card-text">{{ date('l', $timestamp); }}</p>
                <p class="card-text">{{ date('d', $timestamp); }} {{ date('F', $timestamp); }} {{ date('Y', $timestamp); }}</p>
                <p class="card-text">{{ $mood->mood }} | {{ $mood->todo }}</p>
            </div>
            <img class="card-img-top img-fluid" src="{{ asset($mood->img) }}" alt="Card image cap">

        </div> -->
        @endforeach



        <div class="text-center mb-3">
            <a class="btn btn-success btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="/">Home</a>
        </div>

        {{-- <div class="text-center mb-3">
            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="">MoodTracker History</a>
        </div> --}}


        {{-- </div> --}}
    </div>
</header>
<!-- About Section-->


@endsection
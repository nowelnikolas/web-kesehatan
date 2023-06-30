
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

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-4">
            <div class="card border-2" style="width: 100%; background-color: #FFC0CB;">
                <div class="card-body">
                    <h5 class="text-center">{{ $day }}</h5>
                    <h5 class="text-center">{{ $dated }} {{ $datem }} {{ $datey }}</h5>
                    <h5 class="text-center">{{ $mood->mood }} | {{ $mood->todo }}</h5>
                </div>
                <img class="card-img-top img-fluid" src="{{ asset($mood->img) }}" alt="Card image cap">
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="text-center mb-3">
            <a class="btn btn-success btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="/">Home</a>
        </div>
    
        <div class="text-center mb-3">
            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('moods.history') }}">MoodTracker History</a>
        </div>
    </div>
</div>
</header>
<!-- About Section-->


@endsection


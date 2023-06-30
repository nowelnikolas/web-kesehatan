@extends('layouts.main')

@section('container')


<!-- resources/views/moods/index.blade.php -->
<!DOCTYPE html>
<html>
{{-- <head>
    <title>Mood Tracker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Mood Tracker</h1>

        <div class="mb-3">
            <a href="{{ route('moods.create') }}" class="btn btn-primary">Tambah Mood</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">Mood</th>
            <th scope="col">Username</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Riwayat Mood</th>
        </tr>
    </thead>
    <tbody>
        @foreach($moods as $mood)
        <tr>
            <td>{{ $mood->mood }}</td>
            <td>{{ $mood->user->username }}</td>
            <td>{{ $mood->created_at }}</td>
            <td>
                <ul>
                    @foreach($moods as $history)
                    <li>{{ $history->mood }} ({{ $history->created_at }})</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body> --}}

<style>

</style>
<header class="py-5">
    <!-- <div class="container">
        <h1>Tambah Mood</h1>

        <form method="post" action="{{ route('moods.store') }}">
    @csrf
    <div class="form-group">
        <label for="mood">Mood:</label>
        <select class="form-control" name="mood" id="mood">
            <option value="senang">Senang</option>
            <option value="sedih">Sedih</option>
            <option value="marah">Marah</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
    </div>  -->
    <style>
        input[type="radio"] {
            position: absolute;
            height: 25%;
            width: 10%;
            opacity: 0;
        }

        input[type="radio"]+img {
            cursor: pointer;
        }

        input[type="radio"]:checked+img {
            border: 1px solid #ccc;
            border-radius: 20px;
            /* Style for selected image */
        }
        img{
            max-width: 10px;
        }
    </style>

    <div class="container px-5 pb-5">
        <h1 class="mb-5">MoodTracker</h1>
        <div class="row gx-5 align-items-center">
            <form method="post" action="{{ route('moods.store') }}">
                @csrf
                <h2 class="text-center mb-5 fw-bolder">How Are You Feeling Today?</h2>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-2">
                        <input type="radio" id="mood" name="mood" value="Awfull">
                        {{--  <input type="hidden" id="img" name="img" value="assets/Angry-removebg-preview.png"> --}}
                        <img class="small-img img-fluid" src="{{ asset('assets/awful.jpg') }}" width="200" height="200" alt="..."  />
                        <h5 class="text-center mt-2 fw-bold">Awfull</h5>
                    </div>

                    <div class="col-md-2">
                        <input type="radio" id="mood" name="mood" value="Bad">
                        {{--  <input type="hidden" id="img" name="img" value="assets/Angry-removebg-preview.png"> --}}
                        <img class="small-img img-fluid" src="{{ asset('assets/sad.jpeg') }}" width="200" height="200" alt="..."  />
                        <h5 class="text-center mt-2 fw-bold">Bad</h5>
                    </div>

                    <div class="col-md-2">
                        <input type="radio" id="mood" name="mood" value="Fine">
                        {{-- <input type="hidden" id="img" name="img" value="assets/Happyg-removebg-preview.png"> --}}
                        <img class="small-img img-fluid" src="{{ asset('assets/fine.jpeg') }}" width="200" height="200" alt="..." />
                        <h5 class="text-center mt-2 fw-bold">Fine</h5>
                    </div>

                    <div class="col-md-2">
                        <input type="radio" id="mood" name="mood" value="Good">
                        {{-- <input type="hidden" id="img" name="img" value="assets/Sad-removebg-preview.png"> --}}
                        <img class="small-img img-fluid" src="{{ asset('assets/great.jpeg') }}" width="200" height="200" alt="..." />
                        <h5 class="text-center mt-2 fw-bold">Good</h5>
                    </div>

                    <div class="col-md-2">
                        <input type="radio" id="mood" name="mood" value="Angry">
                        {{-- <input type="hidden" id="img" name="img" value="assets/Smile-removebg-preview.png"> --}}
                        <img class="small-img img-fluid" src="{{ asset('assets/angry.jpeg') }}" width="200" height="200" alt="..." />
                        <h5 class="text-center mt-2 fw-bold">Angry</h5>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
                <div class="col-md-12 text-center mt-5">
                    <button type="submit" class="btn btn-primary btn-lg fs-6 fw-bolder">Tambah</button>
                </div>

            </form>
        </div>
    </div>

</header>

</html>

@endsection
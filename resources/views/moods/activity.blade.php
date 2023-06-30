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
</style>
<header class="py-5">
    {{-- <div class="container">
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
    </div> --}}
    <div class="container ">
    <h1 class="mb-5">MoodTracker</h1>
        <div class="row">
            <form method="post" action="{{ route('moods.storetodo') }}">
                @csrf
                <h2 class="text-center mb-5 fw-bolder">How Are You Feeling Today?</h2>

                <div class="row mb-4">
                    <div class="col-md-1">
                    </div>

                    <div class="col-md-2">
                        <input type="radio" id="todo" name="todo" value="Working">
                        <img class="small-img img-fluid" src="{{ asset('assets/10.jpg') }}" alt="..." /> 
                        <h5 class="text-center mt-2 fw-bold">Work</h5>
                    </div>

                    <div class="col-md-2">
                        <input type="radio" id="todo" name="todo" value="Games">
                        <img class="small-img img-fluid" src="{{ asset('assets/13.jpg') }}" alt="..." style=" " />
                        <h5 class="text-center mt-2 fw-bold">Play Games</h5>
                    </div>

                    <div class="col-md-2">
                        <input type="radio" id="todo" name="todo" value="Movie">
                        <img class="small-img img-fluid" src="{{ asset('assets/17.jpg') }}" alt="..." style=" " />
                        <h5 class="text-center mt-2 fw-bold">Watch Movie</h5>
                    </div>

                    <div class="col-md-2">
                        <input type="radio" id="todo" name="todo" value="Workout">
                        <img class="small-img img-fluid" src="{{ asset('assets/16.jpg') }}" alt="..." style=" " />
                        <h5 class="text-center mt-2 fw-bold">Workout</h5>
                    </div>

                    <div class="col-md-2">
                        <input type="radio" id="todo" name="todo" value="Walk">
                        <img class="small-img img-fluid" src="{{ asset('assets/12.jpg') }}" alt="..." style=" " />
                        <h5 class="text-center mt-2 fw-bold">Walk</h5>
                    </div>
                    
                    <div class="col-md-1">
                    </div>
                </div>
                
                
                
                <div class="row mb-4">
                    
                    <div class="col-md-1">
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" id="todo" name="todo" value="Study">
                        <img class="small-img img-fluid" src="{{ asset('assets/18.jpg') }}" alt="..." style=" " />
                        <h5 class="text-center mt-2 fw-bold">Study</h5>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="radio" id="todo" name="todo" value="Shopping">
                        <img class="small-img img-fluid" src="{{ asset('assets/11.jpg') }}" alt="..." style=" " />
                        <h5 class="text-center mt-2 fw-bold">Shopping</h5>
                    </div>

                    <div class="col-md-2">
                        <input type="radio" id="todo" name="todo" value="Vacation">
                        <img class="small-img img-fluid" src="{{ asset('assets/14.jpg') }}" alt="..." style=" " />
                        <h5 class="text-center mt-2 fw-bold">Vication</h5>
                    </div>

                    <div class="col-md-2">
                        <input type="radio" id="todo" name="todo" value="Music">
                        <img class="small-img img-fluid" src="{{ asset('assets/15.jpg') }}" alt="..." style=" " />
                        <h5 class="text-center mt-2 fw-bold">Listen Music</h5>
                    </div>

    
                    <div class="col-md-2">
                        <input type="radio" id="todo" name="todo" value="Exercise">
                        <img class="small-img img-fluid" src="{{ asset('assets/19.jpg') }}" alt="..." style=" " />
                        <h5 class="text-center mt-2 fw-bold">Exercise</h5>
                    </div>

                    <div class="col-md-1">
                    </div>

                </div>
{{-- 
                <div class="row">
                    <div class="col-md-3">
                    </div>

                    <div class="col-md-3">
                    </div>
                </div> --}}
                <div class="col-md-12 text-center mt-5">
                    <button type="submit" class="btn btn-primary btn-lg fs-6 fw-bolder">Tambah</button>
                </div>
    
            </form>
        </div>
    </div>
</header>

</html>

@endsection
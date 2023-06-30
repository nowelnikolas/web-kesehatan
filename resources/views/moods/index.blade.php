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

<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">

            <div class="col-md-12">
                <h1 class="text-center">Mood Tracker</h1>


                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary">
                        {{--  --}}
                        {{-- <div class="row mb-4">
                            <div class="col-md-6">
                                <img class="small-img img-fluid" src="{{ asset('assets/great.jpeg') }}" alt="..." /> 
                            </div>
        
                            <div class="col-md-6">
                                <img class="small-img img-fluid" src="{{ asset('assets/sad.jpeg') }}" alt="..." style=" " />
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <img class="small-img img-fluid" src="{{ asset('assets/angry.jpeg') }}" alt="..." /> 
                            </div>
        
                            <div class="col-md-6">
                                <img class="small-img img-fluid" src="{{ asset('assets/fine.jpeg') }}" alt="..." style=" " />
                            </div>
                        </div> --}}
                        {{--  --}}
                        <img class="profile-img img-fluid mb-3" src="assets/moodtracker home.jpg" alt="..." />
                        {{-- C:\xampp\htdocs\web-kesehatan\public\assets\moodtracker home.jpg --}}
                    </div>
                </div>

                <div>
                    <div class="text-center mb-3">
                        <a class="btn btn-success btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('moods.create') }}">Track your mood</a>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('moods.history') }}">MoodTracker History</a>
                    </div>
                </div>

            </div>
        </div>
</header>

</html>

@endsection
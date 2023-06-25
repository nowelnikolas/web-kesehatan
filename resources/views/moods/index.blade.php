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
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <h1>Mood Tracker</h1>
                    {{-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-success btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('moods.create') }}">Track your mood</a>  
                    </div>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="/company-post">MoodTracker History</a>  
                    </div> --}}
                </div>
            </div>
            <div class="col-xxl-7">
                <!-- Header profile picture-->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary">
                        <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                        <!-- Watch a tutorial on how to do this on YouTube (link)-->
                        <img class="profile-img" src="assets/Emoji.png" alt="..." />
                     <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-success btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('moods.create') }}">Track your mood</a>  
                    </div>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="">MoodTracker History</a>  
                    </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</html>

@endsection

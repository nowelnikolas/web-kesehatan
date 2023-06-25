@extends('layouts.main')

@section('container')


<!-- resources/views/moods/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
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
</body>
</html>

@endsection

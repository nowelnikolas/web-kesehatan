@extends('layouts.main')

@section('container')

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Dokter Terdekat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Dokter Terdekat</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Rumah Sakit</th>
                    <th>Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->hospital }}</td>
                    <td>{{ $doctor->phone_number }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @auth
            @if (auth()->user()->isAdmin())
                <a href="{{ route('doctors.create') }}" class="btn btn-primary">Tambah Dokter</a>
            @endif
        @endauth
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
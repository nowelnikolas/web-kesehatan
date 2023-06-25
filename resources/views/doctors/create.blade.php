@extends('layouts.main')

@section('container')




<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dokter</title>
</head>
<body>
    <h1>Tambah Dokter</h1>

    <form method="POST" action="{{ route('doctors.store') }}">
        @csrf

        <div>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="hospital">Rumah Sakit:</label>
            <input type="text" id="hospital" name="hospital" required>
        </div>

        <div>
            <label for="phone_number">Nomor Telepon:</label>
            <input type="text" id="phone_number" name="phone_number" required>
        </div>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>

@endsection
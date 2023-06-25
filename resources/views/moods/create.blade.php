

@extends('layouts.main')

@section('container')

<!-- resources/views/moods/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Mood Tracker - Tambah Mood</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
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
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection

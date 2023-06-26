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
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <form method="post" action="{{ route('moods.storetodo') }}">
                @csrf
            <div>
                <input type="radio" id="todo" name="todo" value="working" checked>
                <img class="small-img" src="{{ asset('assets/working.png') }}" alt="..." style="width: 200px; height:auto;"  />
            </div>
            
            <div>
                <input type="radio" id="todo" name="todo" value="games">
                <img class="small-img" src="{{ asset('assets/games.png') }}" alt="..." style="width: 200px; height:auto;"/>
            </div>
            
            <div>
                <input type="radio" id="todo" name="todo" value="movie">
                <img class="small-img" src="{{ asset('assets/movie.png') }}" alt="..." style="width: 200px; height:auto;"/>
              </div>

              <div>
                <input type="radio" id="todo" name="todo" value="workout">
                <img class="small-img" src="{{ asset('assets/workout.jpeg') }}" alt="..." style="width: 200px; height:auto;"/>
              </div>

              <div>
                <input type="radio" id="todo" name="todo" value="walk">
                <img class="small-img" src="{{ asset('assets/run.png') }}" alt="..." style="width: 200px; height:auto;"/>
              </div>

              <div>
                <input type="radio" id="todo" name="todo" value="study">
                <img class="small-img" src="{{ asset('assets/study.jpeg') }}" alt="..." style="width: 200px; height:auto;"/>
              </div>

              <div>
                <input type="radio" id="todo" name="todo" value="shopping">
                <img class="small-img" src="{{ asset('assets/shopping.jpeg') }}" alt="..." style="width: 200px; height:auto;"/>
              </div>

              <div>
                <input type="radio" id="todo" name="todo" value="vacation">
                <img class="small-img" src="{{ asset('assets/vacation.jpeg') }}" alt="..." style="width: 200px; height:auto;"/>
              </div>

              <div>
                <input type="radio" id="todo" name="todo" value="music">
                <img class="small-img" src="{{ asset('assets/music.jpeg') }}" alt="..." style="width: 200px; height:auto;"/>
              </div>

              <div>
                <input type="radio" id="todo" name="todo" value="exercise">
                <img class="small-img" src="{{ asset('assets/exercise.jpeg') }}" alt="..." style="width: 200px; height:auto;"/>
              </div>

              <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</header>
</html>

@endsection


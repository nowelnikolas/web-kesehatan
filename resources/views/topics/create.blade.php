@extends('layouts.main')

@section('container')



<h1>Create Forum</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('topics.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="content">Isi</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>

    <div class="form-group mb-3 mt-2">
        <label for="img">Image</label>
        <input type="file" class="form-control" id="img" name="img">
    </div>
<div class="text-center">

    <button type="submit" class="btn btn-primary btn-lg">Create</button>
</div>
</form>

@endsection
@extends('layouts.main')

@section('container')



<h1>Edit Article</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('article.editpost') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" class="form-control" id="id" name="id" value="{{ $post->id }}">
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
    </div>
    <div class="form-group">
        <label for="content">Isi</label>
        <textarea class="form-control" id="slug" name="slug" rows="5" required>{{ $post->slug }}</textarea>
    </div>
    <div class="form-group">
        <label for="content">Kutipan</label>
        <textarea class="form-control" id="excerpt" name="excerpt" rows="5" required>{{ $post->excerpt }}</textarea>
    </div>
    <div class="form-group">
        <label for="content">Body</label>
        <textarea class="form-control" id="body" name="body" rows="5" required>{{ $post->body }}</textarea>
    </div>
    <div class="form-group">
        <label for="img">Image</label>
        <input type="file" class="form-control-file" id="img" name="img">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">


   @if(session()->has('success')) 
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
  </div>
@endif



@if(session()->has('loginError')) 
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
  </div>
@endif

    {{-- <main class="form-signin"> --}}
        <form method="POST" action="{{ route('profile.update') }}" class="card p-4" enctype="multipart/form-data">
            @csrf
    
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required autofocus
                class="form-control">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" value="{{ old('username', auth()->user()->username) }}" required
                class="form-control">
            @error('username')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required
                class="form-control">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" class="form-control" id="avatar" name="avatar">
          </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </div>
    </form>
{{-- </main> --}}
    </div>
</div>



@endsection
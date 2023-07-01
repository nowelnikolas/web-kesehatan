@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-md-8">


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
    <div class="col-md-12 mt-5 text-end">
      <button class="btn btn-lg btn-primary" style="opacity: 0;" type="submit" disabled>Login</button>
    </div>
    <div class="col-md-12">
      <main class="form-signin mt-5">
        <h1 class="h3 mb-3 fw-normal">Login</h1>
        <form action="/login" method="post">
          @csrf
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" style="border-radius: 10px;" autofocus required value="{{ old ('email') }}">
            <label for="email">Email</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" style="border-radius: 10px;" placeholder="Password" required>
            <label for="password">Password</label>
          </div>


          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <small class="d-block text-center mt-3">Not registered? <a href="/register" class="text-decoration-none">Register!</a></small>
      </main>
    </div>
    <div class="col-md-12">

    </div>


  </div>
</div>



@endsection
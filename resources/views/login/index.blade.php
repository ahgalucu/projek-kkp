@extends('layouts.main')

@section('signin')

<div class="row justify-content-center text-center">
    <div class="col-md-5">

      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      

        <main class="form-signin">
            <form action="/admin" method="POST">
              @csrf
              <img class="mb-4 mt-3" src="img/kemendagri_logo.png" alt="" width="100" height="120">
              <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
          
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
              <small class="d-block mt-3">Not registered? <a href="/register">Register now!</a></small>
              <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
            </form>
          </main>
    </div> 
</div>


@endsection
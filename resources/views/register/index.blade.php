@extends('layouts.main')

@section('signin')

<div class="row justify-content-center text-center">
    <div class="col-md-5">
        <main class="form-signin">
            <form action="/register" method="POST">
                @csrf
              <img class="mb-4 mt-3" src="img/kemendagri_logo.png" alt="" width="100" height="120">
              <h1 class="h3 mb-3 fw-normal">Registration form</h1>
              
              <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Register now</button>
              <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
            </form>
          </main>
    </div> 
</div>


@endsection
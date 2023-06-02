@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Golongan</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form method="POST" action="/dashboard/posts/golongan/{{ $golongan->id }}" class="row g-3">
        @method('put')
        @csrf
        <div class="col-auto">
            <label class="col-form-label">Tambah Golongan</label>
        </div>
        <div class="col-auto">
            <label for="pangkat" class="visually-hidden">Golongan</label>
            <input type="text" class="form-control @error('pangkat') is-invalid @enderror" id="pangkat" placeholder="Pangkat" name="pangkat" autofocus value="{{ old('pangkat', $golongan->pangkat) }}">
            @error('pangkat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

      

@endsection
@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Wilayah</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

    <form method="POST" action="/dashboard/posts/wilayah/{{ $wilayah->id }}" class="row g-3">
        @method('put')
        @csrf
        <div class="col-auto">
            <label for="nama_wilayah" class="col-form-label">Update Wilayah</label>
        </div>
        <div class="col-auto">
            <label for="nama_wilayah" class="visually-hidden">Wilayah</label>
            <input type="text" class="form-control @error('nama_wilayah') is-invalid @enderror" id="nama_wilayah" placeholder="Wilayah" name="nama_wilayah" required autofocus value="{{ old('nama_wilayah', $wilayah->nama_wilayah) }}">
            @error('nama_wilayah')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Update Wilayah</button>
        </div>
    </form>

      

@endsection
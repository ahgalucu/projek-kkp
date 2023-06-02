@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Jabatan</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <form class="row g-3" method="POST" action="/dashboard/posts/jabatan">
        @csrf
        <div class="col-auto">
            <label class="col-form-label">Tambah Jabatan</label>
        </div>
        <div class="col-auto">
            <label for="nama_jabatan" class="visually-hidden">Jabatan</label>
            <input type="text" class="form-control @error('nama_jabatan') is-invalid @enderror" id="nama_jabatan" placeholder="Jabatan" name="nama_jabatan" autofocus value="{{ old('nama_jabatan') }}">
            @error('nama_jabatan')
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
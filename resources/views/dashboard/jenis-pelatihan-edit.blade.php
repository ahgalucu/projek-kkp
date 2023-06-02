@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Jenis pelatihan</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form method="POST" action="/dashboard/posts/jenis-pelatihan/{{ $jenis_pelatihan->id }}" class="row g-3">
        @method('put')
        @csrf
        <div class="col-auto">
            <label for="nama_pelatihan" class="col-form-label">Tambah Jenis pelatihan</label>
        </div>
        <div class="col-auto">
            <label for="nama_pelatihan" class="visually-hidden">Nama pelatihan</label>
            <input type="text" class="form-control @error('nama_pelatihan') is-invalid @enderror" id="nama_pelatihan" placeholder="Nama pelatihan" name="nama_pelatihan" autofocus value="{{ old('nama_pelatihan', $jenis_pelatihan->nama_pelatihan) }}">
            @error('nama_pelatihan')
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
@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Desa</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form class="row g-3" method="POST" action="/dashboard/posts/desa">
        @csrf
        <div class="col-auto">
            <label class="col-form-label">Tambah Desa</label>
        </div>
        <div class="col-auto">
            <label for="nama_desa" class="visually-hidden">Desa</label>
            <input type="text" class="form-control @error('nama_desa') is-invalid @enderror" id="nama_desa" placeholder="Desa" name="nama_desa" autofocus value="{{ old('nama_desa') }}">
            @error('nama_desa')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-auto">
            <select class="form-select" id="nama_kec" name="nama_kec">
                <option for="nama_kec" selected>Pilih Kecamatan</option>
                @foreach ($kecamatans as $kecamatan)
                <option value="{{ $kecamatan->nama_kec }}">{{ $kecamatan->nama_kec }}</option>
                @endforeach
              </select>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

      

@endsection
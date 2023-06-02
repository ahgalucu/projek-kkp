@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Unit Kerja</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form class="row g-3" method="POST" action="/dashboard/posts/unit-kerja">
        @csrf
        <div class="col-auto">
            <label class="col-form-label">Tambah unit kerja</label>
        </div>
        <div class="col-auto">
            <label for="nama_unit" class="visually-hidden">Unit kerja</label>
            <input type="text" class="form-control @error('nama_unit') is-invalid @enderror" id="nama_unit" placeholder="Unit kerja" name="nama_unit" required autofocus value="{{ old('nama_unit') }}">
            @error('nama_unit')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-auto">
            <select class="form-select" id="nama_prov" name="nama_prov">
                <option>Pilih Provinsi</option>
                @foreach ($provinsis as $provinsi)
                <option value="{{ $provinsi->nama_prov }}">{{ $provinsi->nama_prov }}</option>
                @endforeach
              </select>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

      

@endsection
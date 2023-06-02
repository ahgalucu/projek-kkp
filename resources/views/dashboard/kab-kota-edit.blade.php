@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kabupaten/Kota</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form method="POST" action="/dashboard/posts/kab-kota/{{ $kab_kotum->id }}" class="row g-3">
        @method('put')
        @csrf
        <div class="col-auto">
            <label for="UpdateKabKota" class="col-form-label">Update Kab/Kota</label>
        </div>
        <div class="col-auto">
            <label for="nama_kota" class="visually-hidden">Kab/Kota</label>
            <input type="text" class="form-control @error('nama_kota') is-invalid @enderror" id="nama_kota" placeholder="Kab/Kota" name="nama_kota" autofocus value="{{ old('nama_kota', $kab_kotum->nama_kota) }}">
            @error('nama_kota')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-auto">
            <select class="form-select" id="nama_prov" name="nama_prov">
              @foreach ($provinsis as $provinsi)
              @if (old('nama_prov', $kab_kotum->nama_prov) == $provinsi->nama_prov)
              <option value="{{ $provinsi->nama_prov }}" selected>{{ $provinsi->nama_prov }}</option>
              @else
              <option value="{{ $provinsi->nama_prov }}">{{ $provinsi->nama_prov }}</option>
              @endif
              @endforeach
            </select>
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

      

@endsection
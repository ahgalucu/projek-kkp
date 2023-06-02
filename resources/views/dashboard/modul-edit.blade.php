@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Modul</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form method="POST" action="/dashboard/posts/modul/{{ $modul->id }}" class="row g-3">
      @method('put')
      @csrf

      <div class="row mb-3 mt-3">
        <div class="col-6">
          <label for="modul" class="form-label">Piih Modul</label>
          <input class="form-control @error('modul') is-invalid @enderror" type="file" id="modul" name="modul" value="{{ old('modul', $modul->modul) }}">
          @error('nama_prov')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      
      <div class="row mb-3">
        <div class="col-6">
          <label for="nama_pelatihan" class="form-label">Nama pelatihan</label>
          <select class="form-select" id="nama_pelatihan" name="nama_pelatihan">
            @foreach ($jenis_pelatihans as $jenis_pelatihan)
            @if (old('nama_pelatihan', $modul->nama_pelatihan) == $jenis_pelatihan->nama_pelatihan)
            <option value="{{ $jenis_pelatihan->nama_pelatihan }}" selected>{{ $jenis_pelatihan->nama_pelatihan }}</option>
            @else
            <option value="{{ $jenis_pelatihan->nama_pelatihan }}">{{ $jenis_pelatihan->nama_pelatihan }}</option>
            @endif
            @endforeach
          </select>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-6">
          <label for="tahun" class="form-label">Tahun</label>
          <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun" placeholder="Tahun" name="tahun" autofocus value="{{ old('tahun', $modul->tahun) }}">
          @error('nama_prov')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="row">
        <div class="col-auto">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>

    </form>

      

@endsection
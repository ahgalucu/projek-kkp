@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Provinsi</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <form method="POST" action="/dashboard/posts/provinsi/{{ $provinsi->id }}" class="row g-3">
        @method('put')
        @csrf
        <div class="col-auto">
            <label for="TambahProvinsi" class="col-form-label">Tambah Provinsi</label>
        </div>
        <div class="col-auto">
            <label for="nama_prov" class="visually-hidden">Provinsi</label>
            <input type="text" class="form-control @error('nama_prov') is-invalid @enderror" id="nama_prov" placeholder="Provinsi" name="nama_prov" autofocus value="{{ old('nama_prov', $provinsi->nama_prov) }}">
            @error('nama_prov')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-auto">
            <select class="form-select" id="nama_wilayah" name="nama_wilayah">
              @foreach ($wilayahs as $wilayah)
              @if (old('nama_wilayah', $provinsi->nama_wilayah) == $wilayah->nama_wilayah)
              <option value="{{ $wilayah->nama_wilayah }}" selected>{{ $wilayah->nama_wilayah }}</option>
              @else
              <option value="{{ $wilayah->nama_wilayah }}">{{ $wilayah->nama_wilayah }}</option>
              @endif
              @endforeach
            </select>
        </div>

        {{-- <div class="col-auto">
            <select class="form-select" id="wilayah_id" name="wilayah_id">
                <option>Pilih wilayah</option>
                @foreach ($wilayahs as $wilayah)
                <option value="{{ $wilayah->id }}">{{ $wilayah->nama_wilayah }}</option>
                @endforeach
              </select>
        </div> --}}
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

      

@endsection
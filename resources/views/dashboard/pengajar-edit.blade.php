@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengajar</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <form method="POST" action="/dashboard/posts/pengajar/{{ $pengajar->id }}" class="row g-3">
    @method('put')
        @csrf

        <div class="row mb-3 mt-3">
            <div class="col-md-6">
                <label for="nama_pengajar" class="form-label">Nama pengajar</label>
                <input type="text" class="form-control @error('nama_pengajar') is-invalid @enderror" id="nama_pengajar" placeholder="Unit kerja" name="nama_pengajar" required autofocus value="{{ old('nama_pengajar', $pengajar->nama_pengajar) }}">
                @error('nama_pengajar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="no_telp" class="form-label">No. Telp</label>
                <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="Unit kerja" name="no_telp" required autofocus value="{{ old('no_telp', $pengajar->no_telp) }}" maxlength="12">
                @error('no_telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Wilayah</label>
                <select class="form-select" id="nama_wilayah" id" name="nama_wilayah">
                  @foreach ($wilayahs as $wilayah)
                  @if (old('nama_wilayah', $pengajar->nama_wilayah) == $wilayah->nama_wilayah)
                  <option value="{{ $wilayah->nama_wilayah }}" selected>{{ $wilayah->nama_wilayah }}</option>
                  @else
                  <option value="{{ $wilayah->nama_wilayah }}">{{ $wilayah->nama_wilayah }}</option>
                  @endif
              @endforeach
                  </select>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </div>
        

        
        
        
      </form>

      

@endsection
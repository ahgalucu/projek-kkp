@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Sertifikat</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <form method="POST" action="/dashboard/posts/sertifikat/{{ $sertifikat->id }}" class="row g-3">
        @method('put')
        @csrf
        <div class="row mb-3 mt-3">
          <div class="col-md-3">
            <label for="nmr_sertifikat" class="form-label">No. sertifikat</label>
            <input type="text" class="form-control @error('nmr_sertifikat') is-invalid @enderror" id="nmr_sertifikat" name="nmr_sertifikat" value="{{ old('nmr_sertifikat', $sertifikat->nmr_sertifikat) }}">
            @error('nama_prov')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-3">
              <label class="form-label">Tanggal sertifikat</label>
              <div class="input-group">
                <span class="input-group-text">
                    <span data-feather="calendar"></span>
                </span>
                <input type="text" class="form-control @error('tgl_sertifikat') is-invalid @enderror" id="datepicker-awal" placeholder="MM/DD/YY" name="tgl_sertifikat" for="tgl_sertifikat" value="{{ old('tgl_sertifikat', $sertifikat->tgl_sertifikat) }}">
                @error('tgl_sertifikat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>


          <div class="row mb-3">
            <div class="col-md-3">
              <label for="nip" class="form-label">NIP</label>
              <select class="form-select" id="nip" name="nip">
                  @foreach ($pesertas as $pesertum)
                  @if (old('nip', $sertifikat->nip) == $pesertum->nip)
                  <option value="{{ $pesertum->nip }}" selected>{{ $pesertum->nip }}</option>
                  @else
                  <option value="{{ $pesertum->nip }}">{{ $pesertum->nip }}</option>
                  @endif
                  @endforeach
                </select>
          </div>
          </div>
        

          <div class="row mb-3">
            <div class="col-md-3">
              <label for="nama_pelatihan" class="form-label">Nama pelatihan</label>
              <select class="form-select" id="nama_pelatihan" name="nama_pelatihan">
                  @foreach ($jenis_pelatihans as $jenis_pelatihan)
                  @if (old('nama_pelatihan', $sertifikat->nama_pelatihan) == $jenis_pelatihan->nama_pelatihan)
                  <option value="{{ $jenis_pelatihan->nama_pelatihan }}" selected>{{ $jenis_pelatihan->nama_pelatihan }}</option>
                  @else
                  <option value="{{ $jenis_pelatihan->nama_pelatihan }}">{{ $jenis_pelatihan->nama_pelatihan }}</option>
                  @endif
                  @endforeach
                </select>
          </div>
          </div>

        
        <div class="row">
          <div class="col-md-3">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
        </div>
        
      </form>

      

@endsection
@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sertifikat</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

    <form method="POST" action="/dashboard/posts/sertifikat">
        @csrf
        <div class="mb-3 w-25">
            <label for="nmr_sertifikat" class="form-label">No. sertifikat</label>
            <input type="text" class="form-control" id="nmr_sertifikat" name="nmr_sertifikat">
        </div>
        <div class="row mb-3">
            <div class="col-md-3">
              <label for="tgl_sertifikat" class="form-label">Tanggal sertifikat</label>
              <div class="input-group">
                <span class="input-group-text">
                    <span data-feather="calendar"></span>
                </span>
                <input type="text" class="form-control" id="datepicker-awal" placeholder="MM/DD/YY" name="tgl_sertifikat" for="tgl_sertifikat">
              </div>
            </div>
          </div>

        <div class="mb-3 w-25">
            <label for="nip" class="form-label">NIP</label>
            <select class="form-select" id="nip" name="nip">
                <option>Pilih Peserta</option>
                @foreach ($pesertas as $peserta)
                <option value="{{ $peserta->nip }}">{{ $peserta->nip }}</option>
                @endforeach
              </select>
        </div>

        <div class="mb-3 w-25">
            <label for="nama_pelatihan" class="form-label">Nama pelatihan</label>
            <select class="form-select" id="nama_pelatihan" name="nama_pelatihan">
                <option>Pilih Pelatihan</option>
                @foreach ($jenis_pelatihans as $jenis_pelatihan)
                <option value="{{ $jenis_pelatihan->nama_pelatihan }}">{{ $jenis_pelatihan->nama_pelatihan }}</option>
                @endforeach
              </select>
        </div>
        
        <div class="mb-3 w-25">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
      </form>

      

@endsection
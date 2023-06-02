@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail pelatihan</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form class="row g-3" method="POST" action="/dashboard/posts/detail-pelatihan">
        @csrf

        <div class="row mb-3 mt-3">
            <div class="col-md-6">
                <label class="form-label">NIP</label>
                <select class="form-select" id="nip" name="nip">
                    <option for="nip" selected>NIP Peserta</option>
                    @foreach ($pesertas as $peserta)
                        <option value="{{ $peserta->nip }}">{{ $peserta->nip }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Nama Pelatihan</label>
                <select class="form-select" id="nama_pelatihan" name="nama_pelatihan">
                    <option for="nama_pelatihan" selected>Pilih pelatihan</option>
                    @foreach ($jenis_pelatihans as $jenis_pelatihan)
                        <option value="{{ $jenis_pelatihan->nama_pelatihan }}">{{ $jenis_pelatihan->nama_pelatihan }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Nilai</label>
                <input type="text" class="form-control" id="nilai" placeholder="Nilai" name="nilai">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Status lulus</label>
                <div class="form-check">
                    <input class="form-check-input @error('status_lulus') is-invalid @enderror" type="radio"
                        name="status_lulus" id="status_lulus" value="Lulus">
                    <label class="form-check-label" for="status_lulus" id="status_lulus" name="status_lulus">
                        Lulus
                    </label>
                    @error('status_lulus')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-check">
                    <input class="form-check-input @error('status_lulus') is-invalid @enderror" type="radio"
                        name="status_lulus" id="status_lulus" value="Tidak lulus">
                    <label class="form-check-label" for="status_lulus" id="status_lulus" name="status_lulus">
                        Tidak lulus
                    </label>
                    @error('status_lulus')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>

        {{-- <div class="col-auto mb-3">
          <select class="form-select" id="status_id" name="status_id">
              <option for="status_id" selected>Open this select menu</option>
              @foreach ($statuses as $status)
              <option value="{{ $loop->iteration }}">{{ $status->status_lulus }}</option>
              @endforeach
            </select>
      </div> --}}

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection

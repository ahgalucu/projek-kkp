@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Rekaptulasi</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form method="POST" action="/dashboard/posts/rekaptulasi/{{ $rekaptulasi->id }}" class="row g-3">
        @method('put')
        @csrf

        <div class="row mb-3 mt-3">
            <div class="col-md-6">
                <label class="form-label">Nama pelatihan</label>
                <select class="form-select" id="nama_pelatihan" name="nama_pelatihan">
                    <option>Pilih Pelatihan</option>
                    @foreach ($jenis_pelatihans as $jenis_pelatihan)
                        @if (old('nama_pelatihan', $rekaptulasi->nama_pelatihan) == $jenis_pelatihan->nama_pelatihan)
                            <option value="{{ $jenis_pelatihan->nama_pelatihan }}" selected>{{ $jenis_pelatihan->nama_pelatihan }}</option>
                        @else
                            <option value="{{ $jenis_pelatihan->nama_pelatihan }}">{{ $jenis_pelatihan->nama_pelatihan }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="TambahProvinsi" class="col-form-label">Jumlah pelaksanaan</label>
                <input type="text" class="form-control @error('jml_pelaksanaan') is-invalid @enderror"
                    id="jml_pelaksanaan" placeholder="Jumlah pelaksanaan" name="jml_pelaksanaan"
                    value="{{ old('jml_pelaksanaan', $rekaptulasi->jml_pelaksanaan) }}">
            </div>
            @error('jml_pelaksanaan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun"
                    placeholder="Tahun" name="tahun" value="{{ old('tahun', $rekaptulasi->tahun) }}">
            </div>
            @error('tahun')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </div>
    </form>
@endsection

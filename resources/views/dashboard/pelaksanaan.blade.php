@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pelaksanaan</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form class="row g-3" method="POST" action="/dashboard/posts/pelaksanaan">
        @csrf

        <div class="row mb-3 mt-3">
            <div class="col-md-6">
                <label for="nama_pengajar" class="form-label">Pengajar</label>
                <select class="form-select" id="nama_pengajar" name="nama_pengajar">
                    <option for="nama_jabatan" selected>Pilih Pengajar</option>
                    @foreach ($pengajars as $pengajar)
                        <option value="{{ $pengajar->nama_pengajar }}">{{ $pengajar->nama_pengajar }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nama_prov" class="form-label">Provinsi</label>
                <select class="form-select" id="nama_prov" name="nama_prov">
                    <option for="nama_jabatan" selected>Pilih Provinsi</option>
                    @foreach ($provinsis as $provinsi)
                        <option value="{{ $provinsi->nama_prov }}">{{ $provinsi->nama_prov }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Pelatihan</label>
                <select class="form-select" id="nama_pelatihan" name="nama_pelatihan">
                    <option for="nama_jabatan" selected>Pilih Pelatihan</option>
                    @foreach ($jenis_pelatihans as $jenis_pelatihan)
                        <option value="{{ $jenis_pelatihan->nama_pelatihan }}">{{ $jenis_pelatihan->nama_pelatihan }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="tgl_awal" class="form-label">Tanggal awal</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <span data-feather="calendar"></span>
                    </span>
                    <input type="text" class="form-control" id="datepicker-awal" placeholder="MM/DD/YY" name="tgl_awal"
                        for="tgl_awal">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="tgl_akhir" class="form-label">Tanggal akhir</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <span data-feather="calendar"></span>
                    </span>
                    <input type="text" class="form-control" id="datepicker-akhir" placeholder="MM/DD/YY" for="tgl_akhir"
                        name="tgl_akhir">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

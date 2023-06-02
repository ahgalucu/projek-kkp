@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data TOT</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form class="row g-3 pb-5" method="POST" action="/dashboard/posts/evaluasi" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3 mt-3">
            <div class="col-md-4">
                <label class="form-label">Provinsi</label>
                <select class="form-select" id="nama_prov" name="nama_prov">
                    <option for="nama_prov" selected>Pilih Provinsi</option>
                    @foreach ($provinsis as $provinsi)
                        <option value="{{ $provinsi->nama_prov }}">{{ $provinsi->nama_prov }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Kab/Kota</label>
                <select class="form-select" id="nama_kota" name="nama_kota">
                    <option for="nama_kota" selected>Pilih Kab/Kota</option>
                    @foreach ($kab_kotas as $kab_kota)
                        <option value="{{ $kab_kota->nama_kota }}">{{ $kab_kota->nama_kota }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Kecamatan</label>
                <select class="form-select" id="nama_kec" name="nama_kec">
                    <option for="nama_kec" selected>Pilih Kecamatan</option>
                    @foreach ($kecamatans as $kecamatan)
                        <option value="{{ $kecamatan->nama_kec }}">{{ $kecamatan->nama_kec }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Desa</label>
                <select class="form-select" id="nama_desa" name="nama_desa">
                    <option for="nama_desa" selected>Pilih Desa</option>
                    @foreach ($desas as $desa)
                        <option value="{{ $desa->nama_desa }}">{{ $desa->nama_desa }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Pelatihan</label>
                <select class="form-select" id="nama_pelatihan" name="nama_pelatihan">
                    <option for="nama_pelatihan" selected>Pilih Pelatihan</option>
                    @foreach ($jenis_pelatihans as $jenis_pelatihan)
                        <option value="{{ $jenis_pelatihan->nama_pelatihan }}">{{ $jenis_pelatihan->nama_pelatihan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label>Jumlah Angkatan</label>
                <input type="text" class="form-control @error('jml_angkatan') is-invalid @enderror" id="jml_angkatan" placeholder="Jumlah Angkatan" name="jml_angkatan" autofocus value="{{ old('jml_angkatan') }}">
                @error('jml_angkatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8">
                <label class="form-label">Pengajar</label>
                <select class="form-select" id="nama_pengajar" name="nama_pengajar">
                    <option for="nama_pengajar" selected>Pilih Pengajar</option>
                    @foreach ($pengajars as $pengajar)
                        <option value="{{ $pengajar->nama_pengajar }}">{{ $pengajar->nama_pengajar }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8">
                <label>Modul</label><br>
                <input id="input-1" type="file" class="file" data-show-preview="false" name="modul">
            </div>
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection

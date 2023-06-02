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
    <form method="POST" action="/dashboard/posts/evaluasi/{{ $evaluasi->id }}" class="row g-3">
        @method('put')
        @csrf
        <div class="row mb-3 mt-3">
            <div class="col-md-4">
                <label class="form-label">Provinsi</label>
                <select class="form-select" id="nama_prov" name="nama_prov">
                    <option for="nama_prov" selected>Pilih Provinsi</option>
                    @foreach ($provinsis as $provinsi)
                    @if (old('nama_prov', $evaluasi->nama_prov) == $provinsi->nama_prov)
                    <option value="{{ $provinsi->nama_prov }}" selected>{{ $provinsi->nama_prov }}</option>
                    @else
                    <option value="{{ $provinsi->nama_prov }}">{{ $provinsi->nama_prov }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Kab/Kota</label>
                <select class="form-select" id="nama_kota" name="nama_kota">
                    <option for="nama_kota" selected>Pilih Kab/Kota</option>
                    @foreach ($kab_kotas as $kab_kota)
                        @if (old('nama_kota', $evaluasi->nama_kota) == $kab_kota->nama_kota)
                            <option value="{{ $kab_kota->nama_kota }}" selected>{{ $kab_kota->nama_kota }}</option>
                        @else
                            <option value="{{ $kab_kota->nama_kota }}">{{ $kab_kota->nama_kota }}</option>
                        @endif
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
                    @if (old('nama_kec', $evaluasi->nama_kec) == $kecamatan->nama_kec)
                        <option value="{{ $kecamatan->nama_kec }}" selected>{{ $kecamatan->nama_kec }}</option>
                    @else
                        <option value="{{ $kecamatan->nama_kec }}">{{ $kecamatan->nama_kec }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Desa</label>
                <select class="form-select" id="nama_desa" name="nama_desa">
                    <option for="nama_desa" selected>Pilih Desa</option>
                    @foreach ($desas as $desa)
                    @if (old('nama_desa', $evaluasi->nama_desa) == $desa->nama_desa)
                        <option value="{{ $desa->nama_desa }}" selected>{{ $desa->nama_desa }}</option>
                    @else
                        <option value="{{ $desa->nama_desa }}">{{ $desa->nama_desa }}</option>
                    @endif
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
                    @if (old('nama_pelatihan', $evaluasi->nama_pelatihan) == $jenis_pelatihan->nama_pelatihan)
                        <option value="{{ $jenis_pelatihan->nama_pelatihan }}" selected>{{ $jenis_pelatihan->nama_pelatihan }}</option>
                    @else
                        <option value="{{ $jenis_pelatihan->nama_pelatihan }}">{{ $jenis_pelatihan->nama_pelatihan }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label>Jumlah Angkatan</label>
                <input type="text" class="form-control @error('jml_angkatan') is-invalid @enderror" id="jml_angkatan" placeholder="Jumlah Angkatan" name="jml_angkatan" autofocus value="{{ old('jml_angkatan', $evaluasi->jml_angkatan) }}">
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
                    @if (old('nama_pengajar', $evaluasi->nama_pengajar) == $pengajar->nama_pengajar)
                        <option value="{{ $pengajar->nama_pengajar }}" selected>{{ $pengajar->nama_pengajar }}</option>
                    @else
                        <option value="{{ $pengajar->nama_pengajar }}">{{ $pengajar->nama_pengajar }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8">
                <label>Modul</label><br>
                <input id="input-1" type="file" class="file @error('modul') is-invalid @enderror" data-show-preview="false" name="modul" value="{{ old('modul', $evaluasi->modul) }}">
            </div>
            @error('modul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection

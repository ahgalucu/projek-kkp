@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data TOTM</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form class="row g-3 pb-5" method="POST" action="/dashboard/posts/totm">
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
            <div class="col-md-8">
                <label class="form-label">Pelatihan</label>
                <select class="form-select" id="nama_pelatihan" name="nama_pelatihan">
                    <option for="nama_pelatihan" selected>Pilih Pelatihan</option>
                    @foreach ($jenis_pelatihans as $jenis_pelatihan)
                        <option value="{{ $jenis_pelatihan->nama_pelatihan }}">{{ $jenis_pelatihan->nama_pelatihan }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label>Tanggal Pelatihan</label>
                <div class="input-group">
                    <input type="text" class="form-control text-start component-datepicker past-enabled @error('tgl_pelatihan') is-invalid @enderror" placeholder="MM/DD/YYYY" name="tgl_pelatihan" value="{{ old('tgl_pelatihan') }}">
                    <div class="input-group-text"><i class="icon-calendar2"></i></div>
                    @error('tgl_pelatihan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <label>Waktu pelaksanaan</label>
                <input type="text" class="form-control @error('waktu_pelaksanaan') is-invalid @enderror" id="waktu_pelaksanaan" placeholder="Nama" name="waktu_pelaksanaan" autofocus value="{{ old('waktu_pelaksanaan') }}">
                @error('waktu_pelaksanaan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- <div class="col-md-4">
                <label>Waktu Pelaksanaan</label>
                <div class="form-group">
                    <div class="input-group text-start" data-target-input="nearest" data-target=".datetimepicker1">
                        <input type="text" class="form-control datetimepicker-input datetimepicker1 @error('waktu_pelaksanaan') is-invalid @enderror" data-target=".datetimepicker1" placeholder="00:00 AM/PM" name="waktu_pelaksanaan" value="{{ old('waktu_pelaksanaan') }}" />
                        <div class="input-group-text"  data-target=".datetimepicker1" data-toggle="datetimepicker"><i class="icon-clock"></i></div>
                    </div>
                </div>
            </div> --}}
        </div>
        
        <div class="row mb-3">
            <div class="col-md-4">
                <label>NIK</label>
                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Nama" name="nik" autofocus value="{{ old('nik') }}">
                @error('nik')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-md-4">
                <label>Nama Peserta</label>
                <input type="text" class="form-control @error('nama_peserta') is-invalid @enderror" id="nama_peserta" placeholder="Nama" name="nama_peserta" autofocus value="{{ old('nama_peserta') }}">
                @error('nama_peserta')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label>NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="NIP" name="nip" autofocus value="{{ old('nip') }}">
                @error('nip')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-md-4">
                <label>Asal Daerah</label>
                <input type="text" class="form-control @error('asal_daerah') is-invalid @enderror" id="asal_daerah" placeholder="Nama" name="asal_daerah" autofocus value="{{ old('asal_daerah') }}">
                @error('asal_daerah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label>Tanggal Lahir</label>
                <div class="input-group">
                    <input type="text" class="form-control text-start component-datepicker past-enabled @error('tgl_lahir') is-invalid @enderror" placeholder="MM/DD/YYYY" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                    <div class="input-group-text"><i class="icon-calendar2"></i></div>
                    @error('tgl_lahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <label>Jenis Kelamin</label>
                <div>
                    <input id="radio-101" class="radio-style @error('jenkel') is-invalid @enderror" name="jenkel" type="radio" value="Laki-laki">
                    <label for="radio-101" class="radio-style-3-label">Laki-laki</label>
    
                    <input id="radio-111" class="radio-style @error('jenkel') is-invalid @enderror" name="jenkel" type="radio" value="Perempuan">
                    <label for="radio-111" class="radio-style-3-label">Perempuan</label>

                    @error('jenkel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label>Usia</label>
                <input type="text" class="form-control @error('usia') is-invalid @enderror" id="usia" placeholder="Usia" name="usia" autofocus value="{{ old('usia') }}">
                @error('usia')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-md-4">
                <label>Pendidikan Terakhir</label>
                <input type="text" class="form-control @error('pendidikan_terakhir') is-invalid @enderror" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir" name="pendidikan_terakhir" autofocus value="{{ old('pendidikan_terakhir') }}">
                @error('pendidikan_terakhir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Jabatan</label>
                <select class="form-select" id="nama_jabatan" name="nama_jabatan">
                    <option for="nama_jabatan" selected>Pilih Jabatan</option>
                    @foreach ($jabatans as $jabatan)
                        <option value="{{ $jabatan->nama_jabatan }}">{{ $jabatan->nama_jabatan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Pangkat</label>
                <select class="form-select" id="pangkat" name="pangkat">
                    <option for="pangkat" selected>Pilih Pangkat</option>
                    @foreach ($golongans as $golongan)
                        <option value="{{ $golongan->pangkat }}">{{ $golongan->pangkat }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label>Nilai</label>
                <input type="text" class="form-control @error('nilai') is-invalid @enderror" id="nilai" placeholder="Nilai" name="nilai" autofocus value="{{ old('nilai') }}">
                @error('nilai')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-md-4">
                <label>Status lulus</label>
                <div>
                    <input id="radio-10" class="radio-style @error('status_lulus') is-invalid @enderror" name="status_lulus" type="radio" value="Lulus">
                    <label for="radio-10" class="radio-style-3-label">Lulus</label>
    
                    <input id="radio-11" class="radio-style @error('status_lulus') is-invalid @enderror" name="status_lulus" type="radio" value="Tidak lulus">
                    <label for="radio-11" class="radio-style-3-label">Tidak lulus</label>

                    @error('status_lulus')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection

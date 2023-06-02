@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Peserta</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form class="row g-3 pb-5" method="POST" action="/dashboard/posts/peserta">
        @csrf
        <div class="row mb-3">
            <div class="col-md-3 ">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip"
                    value="{{ old('nip') }}">
                @error('nip')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                    value="{{ old('nik') }}">
                @error('nik')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="tempat_lahir" class="form-label">Tempat lahir</label>
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                    name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                @error('tempat_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <span data-feather="calendar"></span>
                    </span>
                    <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                        id="datepicker-akhir" placeholder="MM/DD/YY" name="tanggal_lahir"
                        value="{{ old('tanggal_lahir') }}">
                    @error('tanggal_lahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Jenis kelamin</label>
                <div class="form-check">
                    <input class="form-check-input @error('jenkel') is-invalid @enderror" type="radio" name="jenkel"
                        id="jenkel" value="Laki-laki">
                    <label class="form-check-label" for="jenkel" id="jenkel" name="jenkel">
                        Laki-laki
                    </label>
                    @error('jenkel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-check">
                    <input class="form-check-input @error('jenkel') is-invalid @enderror" type="radio" name="jenkel"
                        id="jenkel" value="Perempuan">
                    <label class="form-check-label" for="jenkel" id="jenkel" name="jenkel">
                        Perempuan
                    </label>
                    @error('jenkel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>


        {{-- <div class="row mb-3">
            <div class="col-md-6">
                <label for="jenkel" class="form-label">Jenis kelamin</label>
                <select class="form-select" id="jenkel" name="jenkel">
                    <option for="jenkel" selected>Pilih Jenis Kelamin</option>
                    @foreach ($jenkels as $jenkel)
                        <option value="{{ $jenkel->jenkel }}">{{ $jenkel->jenkel }}</option>
                    @endforeach
                </select>
            </div>
        </div> --}}

        <div class="row mb-3">
            <div class="col-md-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="text" class="form-control @error('usia') is-invalid @enderror" id="usia" name="usia"
                    value="{{ old('usia') }}">
                @error('usia')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-3">
                <label for="asal_peserta" class="form-label">Daerah asal</label>
                <input type="text" class="form-control @error('asal_peserta') is-invalid @enderror" id="asal_peserta"
                    name="asal_peserta" value="{{ old('asal_peserta') }}">
                @error('asal_peserta')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
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
            <div class="col-md-6">
                <label for="pangkat" class="form-label">Golongan</label>
                <select class="form-select" id="pangkat" name="pangkat">
                    <option for="pangkat" selected>Pilih pangkat</option>
                    @foreach ($golongans as $golongan)
                        <option value="{{ $golongan->pangkat }}">{{ $golongan->pangkat }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Jabatan</label>
                <select class="form-select" id="nama_jabatan" name="nama_jabatan">
                    <option for="nama_jabatan" selected>Pilih Jabatan</option>
                    @foreach ($jabatans as $jabatan)
                        <option value="{{ $jabatan->nama_jabatan }}">{{ $jabatan->nama_jabatan }}</option>
                    @endforeach
                </select>
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
                    <input class="form-check-input @error('status_lulus') is-invalid @enderror" type="radio" name="status_lulus" id="status_lulus"
                        value="Tidak lulus">
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

        {{-- <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Status Lulus</label>
                <select class="form-select" id="status_lulus" name="status_lulus">
                    <option for="status_lulus" selected>Pilih Status</option>
                    @foreach ($statuses as $status)
                        <option value="{{ $status->status_lulus }}">{{ $status->status_lulus }}</option>
                    @endforeach
                </select>
            </div>
        </div> --}}

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="modul" class="form-label">Modul</label>
                <select class="form-select" id="modul" name="modul">
                    <option for="modul" selected>Pilih Modul</option>
                    @foreach ($moduls as $modul)
                        <option value="{{ $modul->modul }}">{{ $modul->modul }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Sertifikat</label>
                <select class="form-select" id="nmr_sertifikat" name="nmr_sertifikat">
                    <option for="nmr_sertifikat" selected>No. Sertifikat</option>
                    @foreach ($sertifikats as $sertifikat)
                        <option value="{{ $sertifikat->nmr_sertifikat }}">{{ $sertifikat->nmr_sertifikat }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection

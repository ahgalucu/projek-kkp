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
    <form method="POST" action="/dashboard/posts/peserta/{{ $pesertum->id }}" class="row g-3">
        @method('put')
        @csrf
        <div class="row mb-3">
            <div class="col-md-3 ">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip"
                    placeholder="NIP" name="nip" autofocus value="{{ old('nip', $pesertum->nip) }}">
                @error('nip')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"
                    placeholder="nik" name="nik" autofocus value="{{ old('nik', $pesertum->nik) }}">
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
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    placeholder="nama" name="nama" autofocus value="{{ old('nama', $pesertum->nama) }}">
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
                    placeholder="tempat_lahir" name="tempat_lahir" autofocus
                    value="{{ old('tempat_lahir', $pesertum->tempat_lahir) }}">
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
                        id="datepicker-akhir" placeholder="MM/DD/YY" name="tanggal_lahir" autofocus
                        value="{{ old('tanggal_lahir', $pesertum->tanggal_lahir) }}">
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
                @foreach ($pesertas as $pesertum)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Laki-laki"
                            {{ old('jenkel', $pesertum->jenkel) == 'Laki-laki' ? 'checked' : '' }}>
                        <label class="form-check-label" for="jenkel" id="jenkel" name="jenkel">
                            Laki-laki
                        </label>
                    </div>
                @endforeach

                @foreach ($pesertas as $pesertum)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Perempuan"
                            {{ old('jenkel', $pesertum->jenkel) == 'Perempuan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="jenkel" id="jenkel" name="jenkel">
                            Perempuan
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Jenis kelamin</label>
          <select class="form-select" id="jenkel" name="jenkel">
            @foreach ($jenkels as $jenkel)
            @if (old('jenkel', $pesertum->jenkel) == $jenkel->jenkel)
            <option value="{{ $jenkel->jenkel }}" selected>{{ $jenkel->jenkel }}</option>
            @else
            <option value="{{ $jenkel->jenkel }}">{{ $jenkel->jenkel }}</option>
            @endif
            @endforeach
          </select>
        </div>
      </div> --}}


        <div class="row mb-3">
            <div class="col-md-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="text" class="form-control @error('usia') is-invalid @enderror" id="usia"
                    placeholder="Usia" name="usia" autofocus value="{{ old('usia', $pesertum->usia) }}">
                @error('usia')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-3">
                <label for="asal_peserta" class="form-label">Daerah asal</label>
                <input type="text" class="form-control @error('asal_peserta') is-invalid @enderror" id="asal_peserta"
                    placeholder="asal_peserta" name="asal_peserta" autofocus
                    value="{{ old('asal_peserta', $pesertum->asal_peserta) }}">
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
                    @foreach ($desas as $desa)
                        @if (old('nama_desa', $pesertum->nama_desa) == $desa->nama_desa)
                            <option value="{{ $desa->nama_desa }}" selected>{{ $desa->nama_desa }}</option>
                        @else
                            <option value="{{ $desa->nama_desa }}">{{ $desa->nama_desa }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>


        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Golongan</label>
                <select class="form-select" id="pangkat" name="pangkat">
                    @foreach ($golongans as $golongan)
                        @if (old('pangkat', $pesertum->pangkat) == $golongan->pangkat)
                            <option value="{{ $golongan->pangkat }}" selected>{{ $golongan->pangkat }}</option>
                        @else
                            <option value="{{ $golongan->pangkat }}">{{ $golongan->pangkat }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Jabatan</label>

                <select class="form-select" id="nama_jabatan" name="nama_jabatan">
                    @foreach ($jabatans as $jabatan)
                        @if (old('nama_jabatan', $pesertum->nama_jabatan) == $jabatan->nama_jabatan)
                            <option value="{{ $jabatan->nama_jabatan }}" selected>{{ $jabatan->nama_jabatan }}
                            </option>
                        @else
                            <option value="{{ $jabatan->nama_jabatan }}">{{ $jabatan->nama_jabatan }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Status lulus</label>

                @foreach ($pesertas as $pesertum)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_lulus" id="status_lulus"
                            value="Lulus"
                            {{ old('status_lulus', $pesertum->status_lulus) == 'Lulus' ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_lulus" id="status_lulus" name="status_lulus">
                            Lulus
                        </label>
                    </div>
                @endforeach

                @foreach ($pesertas as $pesertum)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_lulus" id="status_lulus"
                            value="Tidak lulus"
                            {{ old('status_lulus', $pesertum->status_lulus) == 'Tidak lulus' ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_lulus" id="status_lulus" name="status_lulus">
                            Tidak lulus
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Status Lulus</label>

          <select class="form-select" id="status_lulus" name="status_lulus">
            @foreach ($statuses as $status)
            @if (old('status_lulus', $pesertum->status_lulus) == $status->status_lulus)
            <option value="{{ $status->status_lulus }}" selected>{{ $status->status_lulus }}</option>
            @else
            <option value="{{ $status->status_lulus }}">{{ $status->status_lulus }}</option>
            @endif
            @endforeach
            </select>
        </div>
      </div> --}}

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Modul</label>

                <select class="form-select" id="modul" name="modul">
                    @foreach ($moduls as $modul)
                        @if (old('modul', $pesertum->modul) == $modul->modul)
                            <option value="{{ $modul->modul }}" selected>{{ $modul->modul }}</option>
                        @else
                            <option value="{{ $modul->modul }}">{{ $modul->modul }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Sertifikat</label>

                <select class="form-select" id="nmr_sertifikat" name="nmr_sertifikat">
                    <option>Pilih Sertifikat</option>
                    @foreach ($sertifikats as $sertifikat)
                        @if (old('nmr_sertifikat', $pesertum->nmr_sertifikat) == $sertifikat->nmr_sertifikat)
                            <option value="{{ $sertifikat->nmr_sertifikat }}" selected>
                                {{ $sertifikat->nmr_sertifikat }}</option>
                        @else
                            <option value="{{ $sertifikat->nmr_sertifikat }}">{{ $sertifikat->nmr_sertifikat }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-12 mb-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection

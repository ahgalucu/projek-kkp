@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Kecamatan</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form method="POST" action="/dashboard/posts/kecamatan/{{ $kecamatan->id }}" class="row g-3">
        @method('put')
        @csrf
        <div class="col-auto">
            <label class="col-form-label">Update kecamatan</label>
        </div>
        <div class="col-auto">
            <label for="nama_kec" class="visually-hidden">Kecamatan</label>
            <input type="text" class="form-control @error('nama_kec') is-invalid @enderror" id="nama_kec" placeholder="Kecamatan" name="nama_kec" autofocus value="{{ old('nama_kec', $kecamatan->nama_kec) }}">
            @error('nama_kec')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-auto">
            <select class="form-select" id="nama_kota" name="nama_kota">
              @foreach ($kab_kotas as $kab_kota)
              @if (old('nama_kota', $kecamatan->nama_kota) == $kab_kota->nama_kota)
              <option value="{{ $kab_kota->nama_kota }}" selected>{{ $kab_kota->nama_kota }}</option>
              @else
              <option value="{{ $kab_kota->nama_kota }}">{{ $kab_kota->nama_kota }}</option>
              @endif
              @endforeach
            </select>
        </div>

        {{-- <div class="col-auto">
            <select class="form-select" id="kota_id" name="kota_id">
                <option for="kota_id" selected>Open this select menu</option>
                @foreach ($kab_kotas as $kab_kota)
                <option value="{{ $loop->iteration }}">{{ $kab_kota->nama_kota }}</option>
                @endforeach
              </select>
        </div> --}}
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

      

@endsection
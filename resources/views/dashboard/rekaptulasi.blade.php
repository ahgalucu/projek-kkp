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

    <form class="row g-3" method="POST" action="/dashboard/posts/rekaptulasi">
        @csrf

        <div class="row mb-3 mt-3">
            <div class="col-md-6">
                <label class="form-label">Nama pelatihan</label>
                <select class="form-select" id="nama_pelatihan" name="nama_pelatihan">
                    <option>Pilih Pelatihan</option>
                    @foreach ($jenis_pelatihans as $jenis_pelatihan)
                        <option value="{{ $jenis_pelatihan->nama_pelatihan }}">{{ $jenis_pelatihan->nama_pelatihan }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="TambahProvinsi" class="col-form-label">Jumlah pelaksanaan</label>
                <input type="text" class="form-control" id="jml_pelaksanaan" placeholder="Jumlah pelaksanaan"
                    name="jml_pelaksanaan">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" class="form-control" id="tahun" placeholder="Tahun" name="tahun">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </div>
    </form>
@endsection

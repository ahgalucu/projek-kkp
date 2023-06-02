@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengajar</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

    <form method="POST" action="/dashboard/posts/pengajar">
        @csrf
        <div class="mb-3 w-25">
            <label class="form-label">Nama pengajar</label>
            <input type="text" class="form-control" id="nama_pengajar" name="nama_pengajar">
        </div>
        <div class="mb-3 w-25">
            <label for="no_telp" class="form-label">No. Telp</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" maxlength="14">
        </div>

        <div class="mb-3 w-25">
            <label class="form-label">Wilayah</label>
            <select class="form-select" id="nama_wilayah" id" name="nama_wilayah">

                <option for="nama_wilayah" selected>Pilih Wilayah</option>
                @foreach ($wilayahs as $wilayah)
                <option value="{{ $wilayah->nama_wilayah }}">{{ $wilayah->nama_wilayah }}</option>
                @endforeach
              </select>
        </div>
        
        <div class="mb-3 w-25">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
      </form>

      

@endsection
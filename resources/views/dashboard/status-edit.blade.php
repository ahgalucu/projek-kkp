@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Status Kelulusan</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form method="POST" action="/dashboard/posts/status/{{ $status->id }}" class="row g-3">
        @method('put')
        @csrf
        <div class="col-auto">
            <label for="status_lulus" class="col-form-label">Tambah Status</label>
        </div>
        <div class="col-auto">
            <label for="nama_unit" class="visually-hidden">Status lulus</label>
            <input type="text" class="form-control @error('status_lulus') is-invalid @enderror" id="status_lulus" placeholder="Status lulus" name="status_lulus" required autofocus value="{{ old('status_lulus', $status->status_lulus) }}">
            @error('status_lulus')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

      

@endsection
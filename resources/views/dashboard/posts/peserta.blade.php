@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Peserta</h1>
    </div>

    <div class="table-responsive">
      <a class="btn btn-primary mb-3" href="/dashboard/posts/peserta/create" role="button">Tambah peserta</a>
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif  
      <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NIP</th>
              <th scope="col">NIK</th>
              <th scope="col">Nama peserta</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($pesertas as $pesertum)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $pesertum->nip }}</td>
              <td>{{ $pesertum->nik }}</td>
              <td>{{ $pesertum->nama }}</td>
              <td>
                <a href="/dashboard/posts/peserta/{{ $pesertum->id }}" class="badge bg-primary">
                  <span data-feather="eye"></span>
                </a>
                |
                <a href="/dashboard/posts/peserta/{{ $pesertum->id }}/edit" class="badge bg-warning">
                  <span data-feather="edit"></span>
                </a>
                |
                <form action="/dashboard/posts/peserta/{{ $pesertum->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin untuk menghapus data?')">
                    <span data-feather="trash-2"></span>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      

@endsection
@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kabupaten/Kota</h1>
    </div>

    
    <div class="table-responsive col-lg-8">
        <a class="btn btn-primary mb-3" href="/dashboard/posts/kab-kota/create" role="button">Tambah kab/kota</a>
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
              <th scope="col">Kab/Kota</th>
              <th scope="col">Provinsi</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($kab_kotas as $kab_kotum )
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $kab_kotum->nama_kota }}</td>
              <td>{{ $kab_kotum->nama_prov }}</td>
              <td>
                <a href="/dashboard/posts/kab-kota/{{ $kab_kotum->id }}/edit" class="button button-3d button-mini button-rounded button-yellow button-light">
                  Edit
                </a>
                |
                <form action="/dashboard/posts/kab-kota/{{ $kab_kotum->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="button button-3d button-mini button-rounded button-red" onclick="return confirm('Yakin untuk menghapus data?')">
                    Delete
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      

@endsection
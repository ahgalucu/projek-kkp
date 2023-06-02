@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail pelatihan</h1>
    </div>

    
    
    <div class="table-responsive col-lg-8">
        <a class="btn btn-primary mb-3" href="/dashboard/posts/detail-pelatihan/create" role="button">Tambah pelatihan</a>
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
              <th scope="col">Nama Pelatihan</th>
              <th scope="col">Nilai</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($detail_pelatihans as $detail_pelatihan)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $detail_pelatihan->nip }}</td>
              <td>{{ $detail_pelatihan->nama_pelatihan }}</td>
              <td>{{ $detail_pelatihan->nilai }}</td>
              <td>{{ $detail_pelatihan->status_lulus }}</td>
              
              <td>
                <a href="/dashboard/posts/detail-pelatihan/{{ $detail_pelatihan->id }}/edit" class="badge bg-warning">
                  <span data-feather="edit"></span>
                </a>

                |

                <form action="/dashboard/posts/detail-pelatihan/{{ $detail_pelatihan->id }}" method="POST" class="d-inline">
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
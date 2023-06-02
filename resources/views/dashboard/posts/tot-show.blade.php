@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data TOT</h1>
    </div>

    <div class="table-responsive">
        @foreach ($tots as $tot)
            <a class="btn btn-success mb-3 me-3" href="/dashboard/posts/tot" role="button">Kembali</a>

            <a href="/dashboard/posts/tot/{{ $tot->id }}/edit" class="btn btn-warning mb-3 me-3" role="button">
                Ubah
            </a>

            <form action="/dashboard/posts/tot/{{ $tot->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0 mb-3" onclick="return confirm('Yakin untuk menghapus data?')"
                    role="button">
                    Hapus
                </button>
            </form>
        @endforeach
        
        <!-- Content
		============================================= -->
		<section id="content" class="mt-3">
			<div class="table-responsive">
                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Provinsi</th>
                            <th>Kab/Kota</th>
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>Pelatihan</th>
                            <th>Tanggal Pelatihan</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Peserta</th>
                            <th>NIK</th>
                            <th>NIP</th>
                            <th>Asal Daerah</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Usia</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Jabatan</th>
                            <th>Pangkat</th>
                            <th>Nilai</th>
                            <th>Status Lulus</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            @foreach ($tots as $tot)
                                <td>{{ $tot->nama_prov }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->nama_kota }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->nama_kec }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->nama_desa }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->nama_pelatihan }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->tgl_pelatihan }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->waktu_pelaksanaan }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->nama_peserta }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->nik }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->nip }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->asal_daerah }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->tgl_lahir }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->jenkel }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->usia }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->pendidikan_terakhir }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->nama_jabatan }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->pangkat }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->nilai }}</td>
                            @endforeach

                            @foreach ($tots as $tot)
                                <td>{{ $tot->status_lulus }}</td>
                            @endforeach
                            
                        </tr>
                    </tbody>
                </table>
            </div>
		</section><!-- #content end -->
    </div>
@endsection

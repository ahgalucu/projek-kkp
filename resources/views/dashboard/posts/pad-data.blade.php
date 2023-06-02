@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data PAD</h1>
    </div>

    <a href="/dashboard/posts/pad-print" class="button button-3d button-large button-rounded button-red">Cetak PDF</a>


    <div class="table-responsive">
        
        
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
                            @foreach ($pads as $pad)
                                <td>{{ $pad->nama_prov }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->nama_kota }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->nama_kec }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->nama_desa }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->nama_pelatihan }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->tgl_pelatihan }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->waktu_pelaksanaan }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->nama_peserta }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->nik }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->nip }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->asal_daerah }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->tgl_lahir }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->jenkel }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->usia }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->pendidikan_terakhir }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->nama_jabatan }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->pangkat }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->nilai }}</td>
                            @endforeach

                            @foreach ($pads as $pad)
                                <td>{{ $pad->status_lulus }}</td>
                            @endforeach
                            
                        </tr>
                    </tbody>
                </table>
            </div>
		</section><!-- #content end -->
    </div>
@endsection

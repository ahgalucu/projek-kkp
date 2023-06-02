@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Evaluasi</h1>
    </div>

    <a href="/dashboard/posts/evaluasi-print" class="button button-3d button-large button-rounded button-red">Cetak PDF</a>


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
                            <th>Jumlah Angkatan</th>
                            <th>Pengajar</th>
                            <th>Modul</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            @foreach ($evaluasis as $evaluasi)
                                <td>{{ $evaluasi->nama_prov }}</td>
                            @endforeach

                            @foreach ($evaluasis as $evaluasi)
                                <td>{{ $evaluasi->nama_kota }}</td>
                            @endforeach

                            @foreach ($evaluasis as $evaluasi)
                                <td>{{ $evaluasi->nama_kec }}</td>
                            @endforeach

                            @foreach ($evaluasis as $evaluasi)
                                <td>{{ $evaluasi->nama_desa }}</td>
                            @endforeach

                            @foreach ($evaluasis as $evaluasi)
                                <td>{{ $evaluasi->nama_pelatihan }}</td>
                            @endforeach

                            @foreach ($evaluasis as $evaluasi)
                                <td>{{ $evaluasi->jml_angkatan }}</td>
                            @endforeach

                            @foreach ($evaluasis as $evaluasi)
                                <td>{{ $evaluasi->nama_pengajar }}</td>
                            @endforeach

                            @foreach ($evaluasis as $evaluasi)
                                <td><a href="{{ asset('storage/' . $evaluasi->modul) }}">View</a></td>
                            @endforeach
                            
                        </tr>
                    </tbody>
                </table>
            </div>
		</section><!-- #content end -->
    </div>
@endsection

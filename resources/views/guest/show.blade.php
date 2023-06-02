@extends('guest.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Peserta</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col" class="w-25">NIP</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->nip }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">NIK</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->nik }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Nama peserta</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->nama }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Tempat lahir</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->tempat_lahir }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Tanggal lahir</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->tanggal_lahir }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Jenis kelamin</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->jenkel->jenkel }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Usia</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->usia }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Asal daerah</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->asal_peserta }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Golongan</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->golongan->pangkat }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Jabatan</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->jabatan->nama_jabatan }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Desa</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->desa->nama_desa }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Modul</th>
                    @foreach ($pesertas as $pesertum)
                    <td><a href="{{ asset('storage/' . $pesertum->modul->modul) }}">View</a></td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Sertifikat</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->sertifikat->nmr_sertifikat }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Nilai</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->pelatihan->nilai }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Status lulus</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->status->status_lulus }}</td>
                    @endforeach
                </tr>
            </thead>
        </table>
    </div>
@endsection
Í
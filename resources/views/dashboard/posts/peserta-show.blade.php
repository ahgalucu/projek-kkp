@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Peserta</h1>
    </div>

    <div class="table-responsive">
        @foreach ($pesertas as $pesertum)
            <a class="btn btn-success mb-3 me-3" href="/dashboard/posts/peserta" role="button">Kembali</a>

            <a href="/dashboard/posts/peserta/{{ $pesertum->id }}/edit" class="btn btn-warning mb-3 me-3" role="button">
                Ubah
            </a>

            <form action="/dashboard/posts/peserta/{{ $pesertum->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0 mb-3" onclick="return confirm('Yakin untuk menghapus data?')"
                    role="button">
                    Hapus
                </button>
            </form>
        @endforeach
        <table class="table table-striped table-sm mb-5 mt-3">
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
                        <td>{{ $pesertum->jenkel }}</td>
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
                        <td>{{ $pesertum->pangkat }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Jabatan</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->nama_jabatan }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Desa</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->nama_desa }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Modul</th>
                    @foreach ($pesertas as $pesertum)
                        <td><a href="{{ asset('storage/' . $pesertum->modul) }}">View</a></td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Sertifikat</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->nmr_sertifikat }}</td>
                    @endforeach
                </tr>

                <tr>
                    <th scope="col">Status lulus</th>
                    @foreach ($pesertas as $pesertum)
                        <td>{{ $pesertum->status_lulus }}</td>
                    @endforeach
                </tr>
            </thead>
        </table>
    </div>
@endsection

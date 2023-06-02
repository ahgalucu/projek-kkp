<!DOCTYPE html>
<html>
<head>
  <style>
    table, th, td {
      border: 1px solid #dddddd;
      border-collapse: collapse;
      width: 100%;
      font-size: 12px;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    </style>
</head>
<body>

<h2 style="text-align: center;">Data TOTM</h2>

<table>
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
    <th>Nilai</th>
    <th>Status Lulus</th>
  </tr>
  <tr>
    @foreach ($totms as $totm)
        <td>{{ $totm->nama_prov }}</td>
    @endforeach

    @foreach ($totms as $totm)
        <td>{{ $totm->nama_kota }}</td>
    @endforeach

    @foreach ($totms as $totm)
        <td>{{ $totm->nama_kec }}</td>
    @endforeach

    @foreach ($totms as $totm)
        <td>{{ $totm->nama_desa }}</td>
    @endforeach

    @foreach ($totms as $totm)
        <td>{{ $totm->nama_pelatihan }}</td>
    @endforeach

    @foreach ($totms as $totm)
        <td>{{ $totm->tgl_pelatihan }}</td>
    @endforeach

    @foreach ($totms as $totm)
        <td>{{ $totm->waktu_pelaksanaan }}</td>
    @endforeach

    @foreach ($totms as $totm)
    <td>{{ $totm->nama_peserta }}</td>
    @endforeach

    @foreach ($totms as $totm)
        <td>{{ $totm->nik }}</td>
    @endforeach

    @foreach ($totms as $totm)
        <td>{{ $totm->nip }}</td>
    @endforeach

    @foreach ($totms as $totm)
        <td>{{ $totm->nilai }}</td>
    @endforeach

    @foreach ($totms as $totm)
        <td>{{ $totm->status_lulus }}</td>
    @endforeach
  </tr>
</table>

</body>
</html>


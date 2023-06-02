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

<h2 style="text-align: center;">Data TOT</h2>

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
        <td>{{ $tot->nilai }}</td>
    @endforeach

    @foreach ($tots as $tot)
        <td>{{ $tot->status_lulus }}</td>
    @endforeach
  </tr>
</table>

</body>
</html>


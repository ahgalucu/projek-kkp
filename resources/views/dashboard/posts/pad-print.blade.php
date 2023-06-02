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

<h2 style="text-align: center;">Data PAD</h2>

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
        <td>{{ $pad->nilai }}</td>
    @endforeach

    @foreach ($pads as $pad)
        <td>{{ $pad->status_lulus }}</td>
    @endforeach
  </tr>
</table>

</body>
</html>


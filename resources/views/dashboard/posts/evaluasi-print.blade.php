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

<h2 style="text-align: center;">Data Evaluasi</h2>

<table>
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
</table>

</body>
</html>


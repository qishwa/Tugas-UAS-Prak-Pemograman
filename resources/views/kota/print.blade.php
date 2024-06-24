<!DOCTYPE html>
<html>
<head>
    <title>Data Kota</title>
</head>
<body>
    <h1>Data Kota</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Kota</th>
                <th>Nama Pemimpin</th>
                <th>Tanggal Berdiri</th>
                <th>Jumlah Penduduk</th>
                <th>Luas Wilayah</th>
                <th>Jenis Kota</th>
                <th>Keunggulan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kota as $k)
                <tr>
                    <td>{{ $k->NamaKota }}</td>
                    <td>{{ $k->NamaPemimpin }}</td>
                    <td>{{ $k->TglBerdiri }}</td>
                    <td>{{ $k->JmlPenduduk }}</td>
                    <td>{{ $k->LuasWilayah }}</td>
                    <td>{{ $k->JenisKota }}</td>
                    <td>{{ $k->Keunggulan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>DAFTAR MAHASISWA</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gender</th>
        </tr>
        @foreach ($mahasiswa as $m)
        <tr>
            <td>{{ $m['nama'] }}</td>
            <td>{{ $m['alamat'] }}</td>
            <td>{{ $m['gender'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

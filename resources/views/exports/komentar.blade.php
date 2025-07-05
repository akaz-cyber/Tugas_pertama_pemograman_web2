<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Jumlah Komentar</title>
    <style>
        body {
            font-family: sans-serif;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Laporan Jumlah Komentar Pengunjung</h2>
    <table>
        <thead>
            <tr>
                <th>Nama User</th>
                <th>Wisata</th>
                <th>Jumlah Komentar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataKomentar as $item)
            <tr>
                <td>{{ $item->user }}</td>
                <td>{{ $item->wisata }}</td>
                <td>{{ $item->jumlah }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
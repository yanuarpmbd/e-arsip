<!DOCTYPE html>
<html>
<head>
    <title>Rekap Arsip Tembusan SK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
    table tr td,
    table tr th{
        font-size: 9pt;
    }
</style>
<table class='table table-bordered'>
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Perusahaan</th>
        <th>Nomor SK</th>
        <th>Tanggal SK</th>
    </tr>
    </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach($datas as $data)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{$data->nama_pt}}</td>
            <td>{{$data->no_sk}}</td>
            <td>{{$data->tanggal}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>

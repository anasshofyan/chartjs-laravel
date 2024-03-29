<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <title>Cetak</title>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
</head>
<body>

{{--start table--}}
<div class="container-fluid" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="mb-5">Rekapan Database Tutor</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Tutor</th>
                    {{--                    <th scope="col">Tgl Masuk</th>--}}
{{--                    <th scope="col">TTL</th>--}}
                    <th scope="col">Area</th>
                    {{--                    <th scope="col">Asal Institusi</th>--}}
                    {{--                    <th scope="col">Alamat Domisili</th>--}}
                    <th scope="col">Bidang</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Email</th>
{{--                    <th scope="col">IG/FB</th>--}}
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tutor as $item)
                    <tr>
                        <th scope="row">{{$item->kode_id}}</th>
                        <td>{{$item->nama_tutor}}</td>
                        {{--                        <td>{{$item->tanggal_masuk}}</td>--}}
{{--                        <td>{{$item->tanggal_lahir}}</td>--}}
                        <td>{{$item->area}}</td>
                        {{--                        <td>{{$item->asal_institusi}}</td>--}}
                        {{--                        <td>{{$item->alamat_domisili}}</td>--}}
                        <td>{{$item->bidang}}</td>
                        <td>{{$item->no_telepon}}</td>
                        <td>{{$item->email}}</td>
{{--                        <td>{{$item->medsos}}</td>--}}
                        <td>{{$item->status}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{--end table--}}

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

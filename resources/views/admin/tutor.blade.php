<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <title>{{ $title }}</title>
</head>
<body>

{{--start navbar--}}
<nav class="navbar navbar-light bg-primary">
    <div class="container">
        <a class="navbar-brand text-white" href="#">
            <img src="{{ asset('assets/img/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="Logo Tutor Teknik">
            Database Tutor
        </a>
    </div>
</nav>
{{--end navbar--}}

{{--start chartJs--}}
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-12">
            <h2>Chart</h2>

            <canvas id="myChart" width="400" height="150"></canvas>
            <script>
                var ctx = document.getElementById('myChart');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Area', 'Bidang', 'Status'],
                        datasets: [{
                            label: '# of Votes',
                            data: [3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            </script>

        </div>
    </div>
</div>
{{--and chartJs--}}

{{--start table--}}
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary mb-3" type="button" data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                Show Table
            </button>
            <a href="{{ url('print_pdf') }}" class="btn btn-primary mb-3">
                Cetak
            </a>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama Tutor</th>
                            {{--                    <th scope="col">Tgl Masuk</th>--}}
                            <th scope="col">TTL</th>
                            <th scope="col">Area</th>
                            {{--                    <th scope="col">Asal Institusi</th>--}}
                            {{--                    <th scope="col">Alamat Domisili</th>--}}
                            <th scope="col">Bidang</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Email</th>
                            <th scope="col">IG/FB</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tutor as $item)
                            <tr>
                                <th scope="row">{{$item->kode_id}}</th>
                                <td>{{$item->nama_tutor}}</td>
                                {{--                        <td>{{$item->tanggal_masuk}}</td>--}}
                                <td>{{$item->tanggal_lahir}}</td>
                                <td>{{$item->area}}</td>
                                {{--                        <td>{{$item->asal_institusi}}</td>--}}
                                {{--                        <td>{{$item->alamat_domisili}}</td>--}}
                                <td>{{$item->bidang}}</td>
                                <td>{{$item->no_telepon}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->medsos}}</td>
                                <td>{{$item->status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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

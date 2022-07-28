@extends('dash.temp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body justify-content-center">
                    <center><b>DAFTAR</b></center>
                    <br>
                    <table class="table table-striped">
                        <br>
                        <thead>
                            <tr>
                                <th>Barang</th>
                                <th>Owner</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $x)
                            <tr>
                            @if($x->id == 1)
                                <td><center>Belum Ada data</center></td>
                            @else
                                <td>{{$x->id}}</td>
                                <td>{{$x->barang}}</td>
                                <td>{{$x->name}}</td>
                                <td>{{$x->tanggal}}</td>
                            @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

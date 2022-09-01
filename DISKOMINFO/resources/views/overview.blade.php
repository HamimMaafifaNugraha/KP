@extends('layouts.temp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body justify-content-center">
                    <center><b>DAFTAR BARANG</b></center>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Barang</th>
                                <th>Owner</th>
                                <th>Tanggal</th>
                                <th><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $x)
                            <tr>
                            @if($x->id == 0)
                                <td><center>Belum Ada data</center></td>
                            @else
                                <td>{{$x->id}}</td>
                                <td>{{$x->barang}}</td>
                                <td>{{$x->pemilik}}</td>
                                <td>{{$x->tanggal}}</td>
                            @endif
                                <td><center>
                                    <a href="/admin/edit/{{$x->id}}" class="btn btn-warning mr-2">Edit </a>
                                    <a href="/admin/hapus/{{ $x->id}}" class="btn btn-danger mr-2">Hapus </a>
                                </center></td>
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

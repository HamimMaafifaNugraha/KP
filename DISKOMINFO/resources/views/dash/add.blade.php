@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5">
            <div class="card">
                <div class="card-header text-center">
                    <h5>DONASIKAN BARANG ANDA</h5>
                </div>
                <div class="card-body bg-opacity-75 justify-content-center">
                    <form action="/home/post"method="post" enctype="multipart/form-data" class="">
                        @csrf
                        @method('post')
                        <div class="form-group mb-4">
                            <label for="barang" style='margin-left: 160px;'>Nama Barang</label>
                            <input type="text" name="barang" placeholder="Nama Barang" class="form-control"  required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="pemilik" style='margin-left: 140px;'>Nama Pemilik Barang</label>
                            <input type="text" name="pemilik" placeholder="Nama Pemilik" class="form-control"  required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="tanggal" style='margin-left: 120px;'>Tanggal Pemakaian Terakhir</label>
                            <input type="date" name="tanggal" placeholder="" class="form-control"  required>
                        </div>

                        <button class="btn btn-primary w-75 d-block mx-auto" type="submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
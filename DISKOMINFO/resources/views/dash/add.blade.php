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
                    <form action="{{route ('addpost')}}"method="post" enctype="multipart/form-data" class="">
                        @csrf
                        @method('post')
                        <div class="form-group mb-4">
                            <label for="barang" style='margin-left: 160px; font-weight:bold''>Nama Barang</label>
                            <input type="text" name="barang" placeholder="Nama Barang" class="form-control"  required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="pemilik" style='margin-left: 140px; font-weight:bold''>Nama Pemilik Barang</label>
                            <input type="text" name="pemilik" placeholder="Nama Pemilik" class="form-control"  required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="tanggal" style='margin-left: 120px; font-weight:bold''>Tanggal Pemakaian Terakhir</label>
                            <input type="date" name="tanggal" placeholder="" class="form-control"  required>
                        </div>
                        <div class="form-group mb-3">
                        <label for="tanggal" style='margin-left: 147px; font-weight:bold''>Kontak Whatsapp</label>
                            <input type="number" name="wa" placeholder="Kontak Whatsapp" class="form-control" required >
                        </div>
                        <div class="form-group mb-4">
                        <label for="tanggal" style='margin-left: 147px; font-weight:bold''>Gambar Barang</label>
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" required>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="tanggal" style='margin-left: 158px; font-weight:bold'>Pembayaran</label>
                        </div>
                        <div class="form-group mb-4">
                            <input type="checkbox" name="opsi1" aria-label="Checkbox for following text input">
                            <label for="opsi1">Free Ongkir + Free Maintenance</label>
                        </div>
                        <div class="form-group mb-4">
                            <input type="checkbox" name="opsi2" aria-label="Checkbox for following text input">
                            <label for="opsi2">Free Ongkir , Bayar Maintenance</label>
                        </div>
                        <div class="form-group mb-4">
                            <input type="checkbox" name="opsi3" aria-label="Checkbox for following text input">
                            <label for="opsi3">Free Maintenance, Bayar Ongkir</label>
                        </div>
                        <div class="form-group mb-4">
                            <input type="checkbox" name="opsi4" aria-label="Checkbox for following text input">
                            <label for="opsi4">Bayar Ongkir + Maintenance</label>
                        </div>

                        <button class="btn btn-primary w-75 d-block mx-auto" type="submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
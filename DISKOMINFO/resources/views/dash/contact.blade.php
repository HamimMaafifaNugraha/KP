@extends('layouts.app')

@section('content')

<div class="container mt-5 text-center" >
    <h1>Anda Bisa Menghubungi Kami </h1>
    <div class="container mt-5" style="margin-left: 400px">
        <div class="d-flex mt-5">
            <img src="{{asset('/logo_maps.png')}}" style="width :30px; height: 30px;">
            <h5 style="margin-left: 20px;">Jl. Pemuda No.148, Semarang</h5>
        </div><br>
        <div class="d-flex mt-3">
            <img src="{{asset('/logo_telepon.png')}}" style="width :30px; height: 30px;">
            <h5 style="margin-left: 20px">(024) 3569040</h5>
        </div><br>
        <div class="d-flex mt-3">
            <img src="{{asset('/logo_email.png')}}" style="width : 30px; height: 30px;" alt="">
            <h5 style="margin-left: 20px">dinsossemarang@gmail.com</h5>
        </div>
    </div>
</div>

@endsection
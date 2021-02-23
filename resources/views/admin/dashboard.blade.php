@extends('admin/home')

@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="card shadow-sm">
    <div class="text-center mb-2 card-header shadow-sm">
        <h2 class="h3 mb-0 text-gray-800"><strong>ini admin</strong></h2>
    </div>

    <div class="row">
    </div>

    <div class="row text-center card-body">
        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="{{ asset('img/Helm.png')}}" alt="">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="{{ asset('img/Kacamata.png')}}" alt="">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="{{ asset('img/Masker.png')}}" alt="">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="{{ asset('img/RompiNyala.png')}}" alt="">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="{{ asset('img/SarungTangan.png')}}" alt="">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="{{ asset('img/Sepatu.png')}}" alt="">
        </div>

    </div>
</div>

@endsection
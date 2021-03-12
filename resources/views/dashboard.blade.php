@extends('home')

@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="card shadow-sm mb-5">
    <div class="text-center mb-2 card-header shadow-sm">
        <h2 class="h3 mb-0 text-gray-800"><strong>Alat Pelindung Diri</strong></h2>
    </div>

    <div class="row text-center card-body">
        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="img/Helm.png" alt="">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="img/Kacamata.png" alt="">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="img/Masker.png" alt="">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="img/RompiNyala.png" alt="">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="img/SarungTangan.png" alt="">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-2">
            <img class="img-fluid" width="100" src="img/Sepatu.png" alt="">
        </div>

    </div>
</div>

<div class="card shadow-sm">
    <div class="text-center mb-2 card-header shadow-sm">
        <h2 class="h3 mb-0 text-gray-900"><strong>Pengelolaan Risiko Kecelakaan Kerja</strong></h2>
    </div>
    <div class="container text-gray-800">
        <h5><strong>1. Di Kantor</strong></h5>
        <ul>
            <li>Pemberian informasi evakuasi dari gedung bertingkat secara berkala</li>
            <li>Pelatihan dasar penggunaan alat pemadam kebakaran</li>
            <li>Pelatihan penyelamatan korban dari dalam gedung</li>
            <li>Perlengkapan fasilitas dengan peralatan dasar keselamatan yang relevan dan memadai, kotak obat Pertolongan Pertama pada Kecelakaan (P3K), dan pemberian info rute tangga darurat yang jelas</li>
            <li>Pemberian safety induction bagi seluruh tamu dan pekerja baru</li>
        </ul>
        <h5><strong>2. Di Area Lapangan</strong></h5>
        <ul>
            <li>Peraturan bagi setiap pekerja untuk mengikuti safety induction</li>
            <li>Penerapan pemeriksaan kesehatan atau general check up bagi seluruh pekerja</li>
            <li>Pembekalan seluruh pekerja dengan asuransi kecelakaan kerja yang mencakup personal accident melalui BPJS Ketenagakerjaan</li>
            <li>Perlengkapan fasilitas dengan peralatan dasar keselamatan yang relevan dan memadai, kotak obat Pertolongan Pertama pada Kecelakaan (P3K), dan pemberian info rute tangga darurat yang jelas</li>
            <li>Penyediaan PPE (Personal Protection Equipment) yang memadai seperti helm keamanan, sepatu standar, rompi kerja, kacamata, dan masker</li>
        </ul>
    </div>
</div>

@endsection
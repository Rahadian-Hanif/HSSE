@extends('home')
@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Pelanggaran</h1>
</div>

<div class="card border-left-primary text-gray-900">
    <div class="card-body">

        <div class="form-group mb-2">
            <label for="#nama">Kepada</label>
            <input type="text" class="form-control" id="nama" >
        </div>

        <div class="form-group mb-2">
            <label for="#bagian">Bagian</label>
            <input type="text" class="form-control" id="bagian" >
        </div>

        <div class="form-group mb-2">
            <label for="#tgl">Tanggal</label>
            <input type="text" class="form-control datepicker" id="tgl" value="<?php echo date("m/d/Y");?>">
            <script type="text/javascript">
                $('.datepicker').datepicker();
            </script>
        </div>

        <div class="form-group mb-2">
            <label for="Pelanggaran">Pelanggaran</label>
            <select class="custom-select" id="Pelanggaran">
                <option selected>Pilih...</option>
                <option value="1">Tidak mengguanakan Alat Pelindung Diri (APD)</option>
                <option value="2">Melakukan pekerjaan tidak sesuai dengan Prosedur Kerja</option>
                <option value="3">Kurang memperhatikan kondisi dari lingkungan kerja</option>
                <option value="3">Melebihi batas kecepatan maksimum</option>
                <option value="3">Pelanggaran lain</option>
            </select>
        </div>

        <div class="form-group mb-4">
            <label for="#deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" rows="3"></textarea>
        </div>

        <div class="form-group text-right">
            <button type="button" class="btn btn-primary">Kirim</button>
        </div>

    </div>
</div>

@endsection
@extends('home')
@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Pelanggaran</h1>
</div>
        @if ($message = Session::get('laporan_berhasil'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
<div class="card border-left-primary text-gray-900">
    <div class="card-body">

        <form action="uploadPelanggaran" method="post">
        @csrf
        <div class="form-group mb-2">
            <label for="#nama">Kepada</label>
            @if($errors->has('kepada'))
                <div class="text-danger">
                    {{ $errors->first('kepada')}}
                </div>
            @endif
            <input type="text" name="kepada" class="form-control shadow-sm" id="nama" >
        </div>

        <div class="form-group mb-2">
            <label for="#bagian">Bagian</label>
            @if($errors->has('bagian'))
                <div class="text-danger">
                    {{ $errors->first('bagian')}}
                </div>
            @endif
            <input type="text" name="bagian" class="form-control shadow-sm" id="bagian" >
        </div>

        <div class="form-group mb-2">
            <label for="#tgl">Tanggal</label>
            @if($errors->has('tgl'))
                <div class="text-danger">
                    {{ $errors->first('tgl')}}
                </div>
            @endif
            <input type="text" name="tgl" class="form-control datepicker shadow-sm" id="tgl" value="<?php echo date("m/d/Y");?>">
            <script type="text/javascript">
                $('.datepicker').datepicker();
            </script>
        </div>

        <div class="form-group mb-2">
            <label for="Pelanggaran">Pelanggaran</label>
            @if($errors->has('pelanggaran'))
                <div class="text-danger">
                    {{ $errors->first('pelanggaran')}}
                </div>
            @endif
            <select name="pelanggaran" class="custom-select shadow-sm" id="Pelanggaran">
                <option selected value="">Pilih...</option>
                <option value="Tidak mengguanakan Alat Pelindung Diri (APD)">Tidak mengguanakan Alat Pelindung Diri (APD)</option>
                <option value="Melakukan pekerjaan tidak sesuai dengan Prosedur Kerja">Melakukan pekerjaan tidak sesuai dengan Prosedur Kerja</option>
                <option value="Kurang memperhatikan kondisi dari lingkungan kerja">Kurang memperhatikan kondisi dari lingkungan kerja</option>
                <option value="Melebihi batas kecepatan maksimum">Melebihi batas kecepatan maksimum</option>
                <option value="Pelanggaran lain">Pelanggaran lain</option>
            </select>
        </div>

        <div class="form-group mb-4">
            <label for="#deskripsi">Deskripsi</label>
            @if($errors->has('deskripsi'))
                <div class="text-danger">
                    {{ $errors->first('deskripsi')}}
                </div>
            @endif
            <textarea class="form-control shadow-sm" name="deskripsi" id="deskripsi" rows="3"></textarea>
        </div>

        <div class="form-group text-right">
            <button type="button submit" class="btn btn-primary">Kirim</button>
        </div>

        </form>

    </div>
</div>

@endsection
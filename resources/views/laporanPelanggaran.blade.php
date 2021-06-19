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
                {{-- <input type="text" name="kepada" class="form-control shadow-sm" id="nama" > --}}
                <select class="custom-select shadow-sm " name="kepada" style="width: 100%" id="slect2">
                    <option value="{{ NULL }}"></option>
                    @foreach ($users as $user)
                    <option value="{{ $user->nama }}" {{ old('kepada')=== $user->nama ? 'selected' : '' }}>
                        {{ $user->nama }}</option>
                    @endforeach
                </select>
                @error('kepada')
                <div class="alert-danger">{{ "Kolom ".$message }}</div>
                @enderror

            </div>

            <div class="form-group mb-2">
                <label for="#bagian">Bagian</label>
                <select class="custom-select shadow-sm " name="bagian" style="width: 100%" id="slect33">
                    <option value="{{ NULL }}"></option>
                    <option value="admin" {{ old('bagian')=== 'admin' ? 'selected' : '' }}>
                        Admin</option>
                    <option value="ketua divisi" {{ old('bagian')=== 'ketua divisi' ? 'selected' : '' }}>
                        Ketua Divisi</option>
                    <option value="staff" {{ old('bagian')=== 'staff' ? 'selected' : '' }}>
                        Staff</option>
                    {{-- <input type="text" name="bagian" class="form-control shadow-sm" id="bagian"> --}}
                </select>
                @error('bagian')
                <div class="alert-danger">{{ "Kolom ".$message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="#tgl">Tanggal</label>
                <input type="text" name="tgl" class="form-control datepicker shadow-sm" value="{{ old('tgl') }}"
                    id="tgl" readonly>
                <script type="text/javascript">
                    $('.datepicker').datepicker();
                </script>
                @error('tgl')
                <div class="alert-danger">{{ "Kolom ".$message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="Pelanggaran">Pelanggaran</label>
                {{-- <select name="pelanggaran" class="custom-select shadow-sm" id="Pelanggaran"> --}}
                <select class="custom-select shadow-sm " name="pelanggaran" style="width: 100%" id="slect44">
                    <option selected value="{{ NULL }}"></option>
                    <option value="Tidak mengguanakan Alat Pelindung Diri (APD)"
                        {{ old('pelanggaran')==="Tidak mengguanakan Alat Pelindung Diri (APD)" ? 'selected' : '' }}>
                        Tidak mengguanakan Alat Pelindung Diri
                        (APD)</option>
                    <option
                        {{ old('pelanggaran')==="Melakukan pekerjaan tidak sesuai dengan Prosedur Kerja" ? 'selected' : '' }}
                        value="Melakukan pekerjaan tidak sesuai dengan Prosedur Kerja">Melakukan pekerjaan tidak
                        sesuai dengan Prosedur Kerja</option>
                    <option
                        {{ old('pelanggaran')==="Kurang memperhatikan kondisi dari lingkungan kerja" ? 'selected' : '' }}
                        value="Kurang memperhatikan kondisi dari lingkungan kerja">Kurang memperhatikan kondisi dari
                        lingkungan kerja</option>
                    <option {{ old('pelanggaran')==="Melebihi batas kecepatan maksimum" ? 'selected' : '' }}
                        value="Melebihi batas kecepatan maksimum">Melebihi batas kecepatan maksimum</option>
                    <option {{ old('pelanggaran')==="Pelanggaran lain" ? 'selected' : '' }} value="Pelanggaran lain">
                        Pelanggaran lain</option>
                </select>
                @error('pelanggaran')
                <div class="alert-danger">{{ "Kolom ".$message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="#deskripsi">Deskripsi</label>
                <textarea class="form-control shadow-sm" name="deskripsi" id="deskripsi"
                    rows="3">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                <div class="alert-danger">{{ "Kolom ".$message }}</div>
                @enderror
            </div>

            <div class="form-group text-right">
                <button type="button submit" class="btn btn-primary">Kirim</button>
            </div>

        </form>

    </div>
</div>

@endsection
@extends('home')
@section('konten')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Berita Acara</h1>
</div>

<div class="card shadow-sm border-left-primary mb-4 text-gray-800">
    <div class="card-body">
        <P><strong>Jenis</strong></p>
        <p><input type='radio' name='jenisKecelakaan' value='ringan' /> Ringan</p>
        <p><input type='radio' name='jenisKecelakaan' value='sedang' /> Sedang</p>
        <p><input type='radio' name='jenisKecelakaan' value='berat' /> Berat</p>
    </div>
</div>

<div class="card shadow-sm border-left-primary mb-4 text-gray-800">
    <div class="card-body">
        <P><strong>Waktu Kejadian</strong></p>
        <input type="text" class="form-control datepicker" value="<?php echo date("m/d/Y");?>">
        <script type="text/javascript">
        $('.datepicker').datepicker();
        </script>
        <P><strong>Tempat Kejadian</strong></p>
        <input type="text" class="form-control">
        <P><strong>Upload Gambar</strong></p>
        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Foto bukti</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        <P><strong>Kronologis</strong></p>
        <textarea class="form-control" rows="3"></textarea>
    </div>
</div>

@endsection
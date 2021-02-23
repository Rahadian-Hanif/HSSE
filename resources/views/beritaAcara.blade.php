@extends('home')
@section('konten')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Berita Acara Kecelakaan</h1>
</div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

<form action="uploadBeritaAcara" method="post" enctype="multipart/form-data">
@csrf
    <div class="card shadow-sm border-left-primary mb-4 text-gray-800">
        <div class="card-body">
            <P><strong>Jenis</strong></p>
            @if($errors->has('jenis'))
                <div class="text-danger">
                    {{ $errors->first('jenis')}}
                </div>
            @endif
            <p><input type='radio' name='jenis' value='ringan'> Ringan</p>
            <p><input type='radio' name='jenis' value='sedang'> Sedang</p>
            <p><input type='radio' name='jenis' value='berat'> Berat</p>
        </div>
    </div>

    <div class="card shadow-sm border-left-primary mb-4 text-gray-800">
        <div class="card-body">

            <div class='form-group'>
                <P><strong>Waktu Kejadian</strong></p>
                <input type="text" name="waktu" class="form-control datepicker shadow-sm" value="<?php echo date("m/d/Y");?>">
                
                @if($errors->has('waktu'))
                    <div class="text-danger">
                        {{ $errors->first('waktu')}}
                    </div>
                @endif

                <script type="text/javascript">
                    $('.datepicker').datepicker();
                </script>
            </div>

            <div class='form-group'>
            <P><strong>Tempat Kejadian</strong></p>
            @if($errors->has('tempat'))
                <div class="text-danger">
                    {{ $errors->first('tempat')}}
                </div>
            @endif
            <input type="text" name='tempat' class="form-control shadow-sm">
            </div>

            <div class='form-group'>
            <P><strong>Jumlah Korban</strong></p>
            @if($errors->has('korban'))
                <div class="text-danger">
                    {{ $errors->first('korban')}}
                </div>
            @endif
            <input type="number" name='korban' class="form-control shadow-sm" min="0" value="0">
            </div>

            <div class='form-group'>
            <P><strong>Upload Bukti</strong></p>
                @if($errors->has('bukti'))
                    <div class="text-danger">
                        {{ $errors->first('bukti')}}
                    </div>
                @endif
                <div>
                    <input type="file" name='bukti' class="form-control-file shadow-sm">
                </div>
            </div>

            <div class="form-group">
                <P><strong>Kronologis</strong></p>
                @if($errors->has('kronologi'))
                    <div class="text-danger">
                        {{ $errors->first('kronologi')}}
                    </div>
                @endif
                <textarea class="form-control shadow-sm" name='kronologi' rows="3"></textarea>
            </div>

            <div class="form-group text-right">
                <input class="btn btn-primary" type="submit" value="Kirim">
            </div>
        </div>
        
    </div>

</form>

@endsection
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
            @error('jenis')
            <div class=" alert-danger">{{ $message }}</div>
            @enderror
            <p><input type='radio' name='jenis' value='ringan' {{ old('jenis')==='ringan' ? 'checked' : '' }}> Ringan
            </p>
            <p><input type='radio' name='jenis' value='sedang' {{ old('jenis')==='sedang' ? 'checked' : '' }}> Sedang
            </p>
            <p><input type='radio' name='jenis' value='berat' {{ old('jenis')==='berat' ? 'checked' : '' }}> Berat</p>
        </div>
    </div>

    <div class="card shadow-sm border-left-primary mb-4 text-gray-800">
        <div class="card-body">

            <div class='form-group'>
                <P><strong>Waktu Kejadian</strong></p>
                <input type="tex" name="waktu" value="{{ old('waktu') }}"  readonly
                id="datepicker"
                    class="form-control shadow-sm  @error('waktu') is-invalid @enderror"
                    >
                @error('waktu')
                <div class=" alert-danger">{{ $message }}</div>
                @enderror

                <script type="text/javascript">
                    $('#datepicker').datepicker();
                </script>
            </div>

            <div class='form-group'>
                <P><strong>Tempat Kejadian</strong></p>
                <input type="text" name='tempat' value="{{ old('tempat') }}"
                    class="form-control shadow-sm @error('tempat') is-invalid @enderror">
                @error('tempat')
                <div class="alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class='form-group'>
                <P><strong>Jumlah Korban</strong></p>
                <input type="number" name='korban' value="{{ old('korban') }}"
                    class="form-control shadow-sm @error('korban') is-invalid @enderror" min=" 0" value="0">
                @error('korban')
                <div class=" alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class='form-group'>
                <P><strong>Upload Bukti</strong></p>
                <div>
                    <input type="file" name='bukti'
                        class="form-control-file shadow-sm @error('bukti') is-invalid @enderror">
                    @error('bukti')
                    <div class=" alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <P><strong>Kronologis</strong></p>
                <textarea class="form-control shadow-sm @error('kronologi') is-invalid @enderror" name='kronologi'
                    rows="3">{{ old('kronologi') }}</textarea>
                @error('kronologi')
                <div class=" alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group text-right">
                <input class="btn btn-primary" type="submit" value="Kirim">
            </div>
        </div>

    </div>

</form>

@endsection
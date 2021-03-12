@extends('home')

@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Monitoring Kesehatan</h1>
</div>
<div class="text-right mb-3 text-gray-900">
    <?php echo date('d M Y'); ?>
</div>

        @if ($message = Session::get('laporan_berhasil'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
<form class="text-gray-900" action="submitMonitoring" method="post">
@csrf
    @foreach ($soal as $data)
    <div class="card shadow-sm border-left-primary mb-3">
        <div class="form-group card-body">
            <p>
            {{$loop->iteration}}. {{$data->soal}}
            </p>
            <p><input type='radio' name='{{$data->id}}' value='Ya' required/> Ya</p>
            <p><input type='radio' name='{{$data->id}}' value='Tidak' required/> Tidak</p>
        </div>
    </div>
    @endforeach

    <div class="form-group text-right">
        <input class="btn btn-primary" type="submit" value="Kirim">
    </div>
    
</form>

@endsection
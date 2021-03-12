@extends('admin/home')

@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Monitoring Kesehatan</h1>
</div>

<div class="text-right mb-3 text-gray-900">
    <?php echo date('d M Y'); ?>
</div>
    @foreach ($soal as $data)
    <div class="card shadow-sm border-left-primary mb-3">
        <div class="form-group card-body">
            <p>
            {{$loop->iteration}}. {{$data->soal}}
            </p>
            <p><input type='radio' name='{{$data->id_soal}}' <?php if($data->jawaban == "Ya"){ echo "checked";} ?> value='Ya' /> Ya</p>
            <p><input type='radio' name='{{$data->id_soal}}' <?php if($data->jawaban == "Tidak"){ echo "checked";} ?> value='Tidak'/> Tidak</p>
        </div>
    </div>
    @endforeach

@endsection
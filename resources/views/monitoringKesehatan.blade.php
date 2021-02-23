@extends('home')

@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Monitoring Kesehatan</h1>
</div>
<div class="text-right mb-3 text-gray-900">
    <?php echo date('d M Y'); ?>
</div>


<form class="text-gray-900" action="submitMonitoring" method="post">
@csrf
    @foreach ($soal as $data)
    <div class="card shadow-sm border-left-primary mb-3">
        <div class="form-group card-body">
            @if($errors->has('{{$data->id}}'))
                <div class="text-danger">
                    {{ $errors->first('$data->id')}}
                </div>
            @endif
            <p>
            {{$loop->iteration}}. {{$data->soal}}
            </p>
            <p><input type='radio' name='{{$data->id}}' value='Ya' /> Ya</p>
            <p><input type='radio' name='{{$data->id}}' value='Tidak' /> Tidak</p>
        </div>
    </div>
    @endforeach

    <div class="form-group text-right">
        <input class="btn btn-primary" type="submit" value="Kirim">
    </div>
    
</form>

@endsection
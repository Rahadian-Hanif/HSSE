@extends('home')
@section('konten')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat Keterangan Sehat</h1>
</div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @elseif ($message = Session::get('berhasil_hapus'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

<div class="card shadow-sm mb-3">
    <div class="card-body">
        <form action="uploadSks" method="post" enctype="multipart/form-data">
            @csrf
            <p class="text-gray-900"><strong>Upload Surat Keterangan Sehat</strong></p>
            <div class="input-group mb-3">
                <div class="form-group">
                    <input type="file" name="file" class="form-control-file">
                </div>  
            </div>
            <div class="form-group text-right">
                <input class="btn btn-primary" type="submit" value="Kirim">
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body table-responsive">
        <table class="table datatable table-hover">
            <thead class="table-info">
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Berkas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($sks as $data)
                <tr>
                    <td>{{$data->tgl}}</td>
                    <td>{{ $data->nama}}</td>
                    <td>
                    <a class="btn btn-danger btn-sm" href="hapusSks/{{$data->id}}" role="button"><i class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-primary btn-sm" data-toggle="modal" href="#view{{ $data->id}}" role="button"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@foreach ($sks as $data)
<!-- Modal view -->
<div class="modal fade" id="view{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">{{ $data->nama}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="upload/sks/{{ $data->nama}}"></iframe>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
        </div>
    </div>
</div>
<!--end modal-->
@endforeach


@endsection
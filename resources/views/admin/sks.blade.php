@extends('admin/home')

@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat Keterangan Sehat</h1>
</div>

<div class="card shadow-sm">
    <div class="card-body table-responsive">
        <table class="table datatable table-hover">
            <thead class="table-info">
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Berkas</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($sks as $data)
                <tr>
                    <td>{{$data->tgl}}</td>
                    <td>{{ $data->nama}}</td>
                    <td>{{$data->nama_user}}</td>
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
                <iframe class="embed-responsive-item" src="upload/sks/{{$data->nama}}"></iframe>
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
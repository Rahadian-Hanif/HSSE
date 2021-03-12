@extends('admin/home')

@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Berita Acara Kecelakaan</h1>
</div>

<div class="card shadow-sm">
    <div class="card-body table-responsive">
        <table class="table datatable table-hover">
            <thead class="table-info">
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Tempat Kejadian</th>
                    <th scope="col">Korban</th>
                    <th scope="col">Kronologi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($beritaAcara as $data)
                <tr>
                    <td>{{$data->waktu}}</td>
                    <td>{{ $data->jenis}}</td>
                    <td>{{$data->tempat}}</td>
                    <td>{{ $data->korban}}</td>
                    <td>{{ $data->kronologi}}</td>
                    <td class="float-md-left">
                    <div class="row">
                        <a class="col mr-1 btn btn-danger btn-sm" href="HapusBeritaAcara/{{$data->id}}" role="button"><i class="fas fa-trash-alt"></i></a>
                        <a class="col ml-1 btn btn-primary btn-sm" data-toggle="modal" href="#view{{ $data->id}}" role="button"><i class="fas fa-eye"></i></a>
                    </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@foreach ($beritaAcara as $data)
<!-- Modal view -->
<div class="modal fade" id="view{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Berita Acara Kecelakaan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <fieldset disabled>
                <div class="form-group">
                    <label for="Tgl">Tanggal Kejadian</label>
                    <input type="text" class="form-control" id="Tgl" value="{{$data->waktu}}">
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Kecelakaan</label>
                    <input type="text" class="form-control" id="jenis" value="{{$data->jenis}}">
                </div>
                <div class="form-group">
                    <label for="tempst">Tempat Kejadian</label>
                    <input type="text" class="form-control" id="tempst" value="{{$data->tempat}}">
                </div>
                <div class="form-group">
                    <label for="kronologi">Kronologi</label>
                    <textarea type="text" class="form-control" id="kronologi" rows="7" cols="50">{{$data->kronologi}}</textarea>
                </div>

                <div class="form-group">
                    <label for="bukti">Foto Kejadian</label>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe id="bukti" class="embed-responsive-item" src="upload/bukti/{{ $data->bukti}}"></iframe>
                    </div>
                </div>
            </fieldset>
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
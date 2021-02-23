@extends('admin/home')

@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Berita Acara</h1>
</div>

<div class="card shadow-sm">
    <div class="card-body table-responsive">
        <table class="table datatable table-hover">
            <thead class="table-info">
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Tempat Kejadian</th>
                    <th scope="col">Bukti</th>
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
                    <td><img src="upload/bukti/{{ $data->bukti}}" width="50" height="60"></td>
                    <td>{{ $data->kronologi}}</td>
                    <td class="float-md-left">
                    <div class="row">
                        <a class="col mr-1 btn btn-danger btn-sm" href="hapusSks/{{$data->id}}" role="button"><i class="fas fa-trash-alt"></i></a>
                        <a class="col ml-1 btn btn-primary btn-sm" data-toggle="modal" href="#view{{ $data->id}}" role="button"><i class="fas fa-eye"></i></a>
                    </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
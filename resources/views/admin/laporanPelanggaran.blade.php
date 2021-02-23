@extends('admin/home')
@section('konten')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Pelanggaran</h1>
</div>

<div class="card shadow-sm">
    <div class="card-body table-responsive">
        <table class="table datatable table-hover">
            <thead class="table-info">
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Pelanggar</th>
                    <th scope="col">Bagian</th>
                    <th scope="col">Pelanggaran</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($soal as $data)
                <tr>
                    <td>{{$data->tgl}}</td>
                    <td>{{$data->kepada}}</td>
                    <td>{{$data->bagian}}</td>
                    <td>{{$data->pelanggaran}}</td>
                    <td>{{$data->deskripsi}}</td>
                    <td>
                    <div class="row">
                        <a class="col mr-1 btn btn-danger btn-sm" href="hapusSks" role="button"><i class="fas fa-trash-alt"></i></a>
                        <a class="col mr-1 btn btn-primary btn-sm" data-toggle="modal" href="#view" role="button"><i class="fas fa-print"></i></a>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
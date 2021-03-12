@extends('admin/home')
@section('konten')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">LaporanMonitoring Kesehatan</h1>
</div>

<div class="card shadow-sm">
    <div class="card-body table-responsive">
        <table class="table datatable table-hover">
            <thead class="table-info">
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                <tr>
                
                    <td>{{$data->tgl}}</td>
                    <td>{{$data->nama}}</td>
                    <td>
                    <a class="btn btn-primary btn-sm" href="viewMonitoring/{{$data->id_user}}/{{$data->tgl}}" role="button"><i class="fas fa-eye"></i></a>
                    </td>
                
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
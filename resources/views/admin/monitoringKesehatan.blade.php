@extends('admin/home')
@section('konten')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Monitoring Kesehatan</h1>
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

                <tr>
                    <td>sdsdsd</td>
                    <td>sdsdsdds</td>
                    <td>
                    <a class="btn btn-danger btn-sm" href="hapusSks" role="button"><i class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-primary btn-sm" data-toggle="modal" href="#view" role="button"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection
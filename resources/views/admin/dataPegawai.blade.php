@extends('admin/home')
@section('konten')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800">Data Pegawai</h1>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif
<div class="container text-right mb-2">
        <a href="#tambah" data-toggle="modal" class="btn btn-success btn-sm" role="button" aria-pressed="true" data-toggle="modal">
        <i class="fas fa-fw fa-plus"></i>
        Tambah Pegawai
        </a>
    </div>
<div class="card shadow-sm">
    
    <div class="card-body table-responsive">
        <table class="table datatable table-hover">
            <thead class="table-info">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Level User</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPegawai as $data)
                <tr>
                
                    <td>{{$data->nama}}</td>
                    <td>{{$data->divisi}}</td>
                    <td>{{$data->tlp}}</td>
                    <td>{{$data->level}}</td>
                    <td>
                    <a class="btn btn-danger btn-sm" href="hapusPegawai/{{$data->id}}" role="button"><i class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-primary btn-sm" data-toggle="modal" href="#view{{$data->id}}" role="button"><i class="fas fa-eye"></i></a>
                    <a class="btn btn-info btn-sm" data-toggle="modal" href="#edit{{$data->id}}" role="button"><i class="fas fa-edit"></i></a>
                    </td>
                
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<!-- Modal edit -->
@foreach ($dataPegawai as $data)
<div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="view" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Pegawai</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="editPegawai/{{$data->id}}" method="post">
        <div class="modal-body">
            
            @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input required name="nama" type="text" class="form-control shadow-md" id="nama" value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required name="email" type="text" class="form-control shadow-md" id="email" value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input required name="username" type="text" class="form-control shadow-md" id="username" value="{{$data->username}}">
                    </div>
                    <div class="form-group">
                        <label for="divisi">Divisi/Bagian</label>
                        <input required name="divisi" type="text" class="form-control shadow-md" id="divisi" value="{{$data->divisi}}">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        
                        <select required name="level" class="custom-select shadow-sm" id="level">
                            <option value="">Pilih...</option>
                            <option value="admin" <?php if($data->level=="admin") echo 'selected="selected"'; ?>>Admin</option>
                            <option value="ketua divisi" <?php if($data->level=="ketua divisi") echo 'selected="selected"'; ?>>Ketua Divisi</option>
                            <option value="staff" <?php if($data->level=="staff") echo 'selected="selected"'; ?>>staff</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input required name="alamat" type="text" class="form-control shadow-md" id="alamat" value="{{$data->alamat}}">
                    </div>
                    <div class="form-group">
                        <label for="tlp">No. Telepon</label>
                        <input required name="tlp" type="text" class="form-control shadow-md" id="tlp" value="{{$data->tlp}}">
                    </div>
                
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <!-- <a href="#gantiPassword" class="btn btn-info active" role="button" aria-pressed="true" data-toggle="modal" data-dismiss="modal">Ganti Password</a> -->
            <button type="button" class="btn btn-primary">Simpan perubahan</button>
        </div>
        </form>
        </div>
    </div>
</div>
@endforeach

<!-- Modal Tambah Pegawai -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="view" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pegawai</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="tambahPegawai" method="post">
        <div class="modal-body">
            
            @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input required name="nama" type="text" class="form-control shadow-md" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required name="email" type="text" class="form-control shadow-md" id="email">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input required name="username" type="text" class="form-control shadow-md" id="username">
                    </div>
                    <div class="form-group">
                        <label for="divisi">Divisi/Bagian</label>
                        <input required name="divisi" type="text" class="form-control shadow-md" id="divisi">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select required name="level" class="custom-select shadow-sm" id="level">
                            <option selected value="">Pilih...</option>
                            <option value="Admin">Admin</option>
                            <option value="Ketua Divisi">Ketua Divisi</option>
                            <option value="staff">staff</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input required name="alamat" type="text" class="form-control shadow-md" id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="tlp">No. Telepon</label>
                        <input required name="tlp" type="text" class="form-control shadow-md" id="tlp">
                    </div>
                
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button submit" class="btn btn-primary">Simpan Data</button>
        </div>
        </form>
        </div>
    </div>
</div>


<!-- Modal view -->
@foreach ($dataPegawai as $data)
<div class="modal fade" id="view{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="view" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Data Pegawai</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <fieldset disabled >
        <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input required name="nama" type="text" class="form-control shadow-md" id="nama" value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required name="email" type="text" class="form-control shadow-md" id="email" value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input required name="username" type="text" class="form-control shadow-md" id="username" value="{{$data->username}}">
                    </div>
                    <div class="form-group">
                        <label for="divisi">Divisi/Bagian</label>
                        <input required name="divisi" type="text" class="form-control shadow-md" id="divisi" value="{{$data->divisi}}">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <input required name="level" type="text" class="form-control shadow-md" id="level" value="{{$data->level}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input required name="alamat" type="text" class="form-control shadow-md" id="alamat" value="{{$data->alamat}}">
                    </div>
                    <div class="form-group">
                        <label for="tlp">No. Telepon</label>
                        <input required name="tlp" type="text" class="form-control shadow-md" id="tlp" value="{{$data->tlp}}">
                    </div>
                
        </div>
        </fieldset>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
        </div>
    </div>
</div>

@endforeach

<!-- Modal ganti password -->
<div class="modal fade" id="gantiPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Ganti Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="gantiPassword" method="post">
        <div class="modal-body">
            
            @csrf
                    <div class="form-group">
                        <label for="Tgl">Password Baru</label>
                        <input required name="Password" type="password" class="form-control shadow-md" id="Tgl">
                    </div>
                    <div class="form-group">
                        <label for="jenis">konfirmasi Password</label>
                        <input required name="confimPassword" type="password" class="form-control shadow-md" id="jenis">
                    </div>
                
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#edit{{$data->id}}">Batal</button>
            <button type="button submit" class="btn btn-primary">Simpan perubahan</button>
        </div>
        </form>
        </div>
    </div>
</div>

@endsection
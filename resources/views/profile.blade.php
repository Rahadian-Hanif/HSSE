@extends('home')

@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
</div>

        @if ($message = Session::get('berhasil'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @elseif (($message = Session::get('gagal')))
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @endif

<div class="card shadow-md " style="background-color: #d9f8ff;">
    <div class="card-body text-grey-900">
            <div class="text-right">
                <a href="#gantiPassword" class="btn btn-info btn-sm active" role="button" aria-pressed="true" data-toggle="modal">Ganti Password</a>
                <a href="#exampleModalCenter" class="btn btn-primary btn-sm active" role="button" aria-pressed="true" data-toggle="modal">Edit Profile</a>
            </div>

        <div class="row" style="color: black;">
            <div class="col text-center">
                <img class="rounded-circle shadow-sm" src="{{ asset('img/profile.png')}}" alt="" width="200" height="200">
            </div>
            <div class="col">
                <fieldset disabled>
                    <div class="form-group">
                        <label for="Tgl">Nama</label>
                        <input type="text" class="form-control shadow-md" id="Tgl" value="{{ auth()->user()->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Email</label>
                        <input type="text" class="form-control shadow-md" id="jenis" value="{{ auth()->user()->email}}">
                    </div>
                    <div class="form-group">
                        <label for="tempst">Username</label>
                        <input type="text" class="form-control shadow-md" id="tempst" value="{{ auth()->user()->username}}">
                    </div>
                    <div class="form-group">
                        <label for="tempst">Divisi/Bagian</label>
                        <input type="text" class="form-control shadow-md" id="tempst" value="{{ auth()->user()->divisi}}">
                    </div>
                    <div class="form-group">
                        <label for="tempst">Alamat</label>
                        <input type="text" class="form-control shadow-md" id="tempst" value="{{ auth()->user()->alamat}}">
                    </div>
                    <div class="form-group">
                        <label for="tempst">No. Telepon</label>
                        <input type="text" class="form-control shadow-md" id="tempst" value="{{ auth()->user()->tlp}}">
                    </div>
                </fieldset>
            </div>
        </div>
        
    </div>

</div>

<!-- Modal edit -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="updateProfile" method="post">
        <div class="modal-body">
            
            @csrf
                    <div class="form-group">
                        <label for="Tgl">Nama</label>
                        <input required name="nama" type="text" class="form-control shadow-md" id="Tgl" value="{{ auth()->user()->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Email</label>
                        <input required name="email" type="text" class="form-control shadow-md" id="jenis" value="{{ auth()->user()->email}}">
                    </div>
                    <div class="form-group">
                        <label for="tempst">Username</label>
                        <input required name="username" type="text" class="form-control shadow-md" id="tempst" value="{{ auth()->user()->username}}">
                    </div>
                    <div class="form-group">
                        <label for="tempst">Divisi/Bagian</label>
                        <input required name="divisi" type="text" class="form-control shadow-md" id="tempst" value="{{ auth()->user()->divisi}}">
                    </div>
                    <div class="form-group">
                        <label for="tempst">Alamat</label>
                        <input required name="alamat" type="text" class="form-control shadow-md" id="tempst" value="{{ auth()->user()->alamat}}">
                    </div>
                    <div class="form-group">
                        <label for="tempst">No. Telepon</label>
                        <input required name="tlp" type="text" class="form-control shadow-md" id="tempst" value="{{ auth()->user()->tlp}}">
                    </div>
                
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button submit" class="btn btn-primary">Simpan perubahan</button>
        </div>
        </form>
        </div>
    </div>
</div>

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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button submit" class="btn btn-primary">Simpan perubahan</button>
        </div>
        </form>
        </div>
    </div>
</div>

@endsection
<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaporanPelanggaranRequest;
use App\Models\Pelanggaran;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class LaporanPelanggaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::get();
        return view('laporanPelanggaran', compact("users"));
    }

    public function admin()
    {
        $laporan =  Pelanggaran::all();
        return view('admin/laporanPelanggaran', compact("laporan"));
    }

    public function upload(LaporanPelanggaranRequest $request)
    {
        // $messages = [
        //     'required' => ':attribute wajib diisi',
        // ];
        // $this->validate($request, [
        //     'kepada'        => 'required',
        //     'bagian'        => 'required',
        //     'tgl'           => 'required',
        //     'pelanggaran'   => 'required',
        //     'deskripsi'     => 'required'
        // ], $messages);
        // $id = auth()->user()->id;

        // Pelanggaran::create([
        //     'id_user'       => $id,
        //     'kepada'        => $request->kepada,
        //     'bagian'        => $request->bagian,
        //     'tgl'           => date('Y-m-d', strtotime($request->tgl)),
        //     'pelanggaran'   => $request->pelanggaran,
        //     'deskripsi'     => $request->deskripsi

        // ]);
        
        Pelanggaran::create($request->validated());
        return back()
            ->with('laporan_berhasil', 'Laporan berhasil ditambahkan');
    }

    public function delete($id)
    {
        // hapus data
        Pelanggaran::where('id', $id)->delete();

        return back()
            ->with('berhasil_hapus', 'File berhasil dihapus');
    }

    public function cetak($id)
    {
        $data = Pelanggaran::find($id);
        return view('admin/export/printLaporanPelanggaran', $data);
    }
}

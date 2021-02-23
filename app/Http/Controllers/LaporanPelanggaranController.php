<?php

namespace App\Http\Controllers;
use App\Models\Pelanggaran;

use Illuminate\Http\Request;

class LaporanPelanggaranController extends Controller
{
    public function index()
    {
        return view('laporanPelanggaran');

    }

    public function admin()
    {
        $soal =  Pelanggaran::all();
        return view('admin/laporanPelanggaran',compact("soal"));

    }

    public function upload(Request $request)
    {
        $messages = [
                'required' => ':attribute wajib diisi',
        ];
        $this->validate($request, [
                'kepada'        =>'required',
                'bagian'        =>'required',
                'tgl'           =>'required',
                'pelanggaran'   =>'required',
                'deskripsi'     =>'required'
        ],$messages);
            $id = auth()->user()->id;

            Pelanggaran::create([
                'id_user'       => $id,
                'kepada'        => $request->kepada,
                'bagian'        => $request->bagian,
                'tgl'           => date('Y-m-d', strtotime($request->tgl)),
                'pelanggaran'   => $request->pelanggaran,
                'deskripsi'     => $request->deskripsi

            ]);
        
        return back()
            ->with('laporan_berhasil','Laporan Berhasil di Tambahkan');
            

    }

    public function delete($id)
        {
            // hapus data
            Pelanggaran::where('id',$id)->delete();
            
            return back()
            ->with('berhasil_hapus','File berhasil di Hapus');
        }
}

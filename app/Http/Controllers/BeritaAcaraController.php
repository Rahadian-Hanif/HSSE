<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeritaAcaraRequest;
use Illuminate\Http\Request;
use App\Models\BeritaAcara;

use File;

class BeritaAcaraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('beritaAcara');
    }

    public function admin()
    {
        $beritaAcara = BeritaAcara::all();
        return view('admin/beritaAcara', compact("beritaAcara"));
    }

    public function upload(BeritaAcaraRequest $request)
    {

        // $messages = [
        //         'required' => ':attribute wajib diisi',
        //         'mimes' => ':attribute harus format jpeg,png,jpg,pdf,docx',
        //         'max' => ':attribute maksimal :max ',
        // ];
        // $this->validate($request, [
        //         'bukti' => 'required|mimes:jpeg,png,jpg,pdf,docx|max:2048',
        //         'jenis'=>'required',
        //         'waktu'=>'required',
        //         'tempat'=>'required',
        //         'kronologi'=>'required',
        //         'korban'=>'required'
        // ], $messages);

        // menyimpan data file yang diupload ke variabel $file
        // $file = $request->file('bukti');

        // $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        // $tujuan_upload = 'upload/bukti';
        // $file->move($tujuan_upload, $nama_file);
        // $id = auth()->user()->id;

        // BeritaAcara::create([
        //     'id_user'   => $id,
        //     'jenis'     => $request->jenis,
        //     'waktu'     => date('Y-m-d', strtotime($request->waktu)),
        //     'tempat'    => $request->tempat,
        //     'bukti'     => $nama_file,
        //     'kronologi' => $request->kronologi,
        //     'korban'    => $request->korban

        // ]);
        // return back()
        // ->with('success','Berita Acara berhasil di upload.');

        // recode
        // store the file
        $file = $request->file('bukti');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $nama_file = time() . "_" . str_replace(' ', '_', $file->getClientOriginalName());
        $store = $file->move("upload/bukti", $nama_file);

        // we store the data to database
        BeritaAcara::create(array_merge($request->validated(), ['bukti' => $nama_file]));
        return back()
            ->with('success', 'Berita Acara berhasil di upload.');
    }

    public function delete($id)
    {
        // hapus data
        BeritaAcara::where('id', $id)->delete();

        return back()
            ->with('berhasil_hapus', 'Berita Acara berhasil di Hapus');
    }
}

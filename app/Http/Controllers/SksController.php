<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sks;

use File;

use DB;

class SksController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $sks =  Sks::where('id_user', $id)->get();
        return view('sks',compact("sks"));

    }

    public function admin()
    {
        $sks = DB::table('sks')
                ->join('users','users.id','=','sks.id_user')
                ->select('users.nama AS nama_user','sks.*')->get();
        return view('admin/sks',compact("sks"));

    }

    public function proses_upload(Request $request){
            $this->validate($request, [
                'file' => 'required|mimes:jpeg,png,jpg,pdf,docx|max:2048'
            ]);

            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');

            $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'upload/sks';
            $file->move($tujuan_upload,$nama_file);
            $tgl = date("Y/m/d");
            $id = auth()->user()->id;

            Sks::create([
                'nama' => $nama_file,
                'tgl' => $tgl,
                'id_user' => $id,

            ]);

            return back()
            ->with('success','File berhasil di upload.');
	}

        public function delete($id)
        {
            // hapus data
            Pelanggaran::where('id',$id)->delete();
            
            return back()
            ->with('berhasil_hapus','File berhasil di Hapus');
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoring;
use App\Models\SubmitSoal;

class MonitoringController extends Controller
{
    public function index()
    {
        $soal =  Monitoring::all();
        return view('monitoringKesehatan',compact("soal"));

    }

    public function admin()
    {
        // $soal =  Monitoring::all();
        return view('admin/monitoringKesehatan');

    }

    public function submit(Request $request)
    {
        $id = auth()->user()->id;
        $soal =  Monitoring::select('id')->get();

        foreach ($soal as $number) {
            $num = $number->id;

            // $validate_array['$num'] = 'required';
            // $this->validate($request, [
            //     '$num' =>'required'
            // ]);
            
            // SubmitSoal::create([
            //     'id_user'       => $id,
            //     'tgl'           => date('Y-m-d'),
            //     'id_soal'        => $num,
            //     'jawaban'        => $request->$num,
            // ]);
            $a = $request->$num;
            echo nl2br ("no $num $a \n");

        };
        
        // return back()
        //     ->with('laporan_berhasil','Laporan Berhasil di Tambahkan');
    }
}

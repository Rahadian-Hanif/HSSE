<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoring;
use App\Models\SubmitSoal;
use Illuminate\Support\Facades\DB;

// use DB;

class MonitoringController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        $id = auth()->user()->id;
        $tgl = date('Y-m-d');
        $cek = SubmitSoal::where('id_user',$id)->where('tgl',$tgl)->first();
        if ($cek){
            return view('blank');
        }else {
            $soal =  Monitoring::all();
            return view('monitoringKesehatan',compact("soal"));
        }
        
    }

    public function admin()
    {
        $data = DB::table('monitoring_harian')
                    ->join('users','users.id','=','monitoring_harian.id_user')
                    ->select('users.nama','monitoring_harian.*')
                    ->groupBy('id_user', 'tgl')
                    ->get();
        return view('admin/monitoringKesehatan',compact("data"));

    }

    public function view($id,$tgl)
    {
        $soal = DB::table('monitoring_harian')
                    ->join('pertanyaan','pertanyaan.id','=','monitoring_harian.id_soal')
                    ->select('monitoring_harian.*','pertanyaan.soal')
                    ->where('monitoring_harian.id_user', $id)
                    ->where('monitoring_harian.tgl', $tgl)
                    ->get();
        return view('admin/viewMonitoring',compact("soal"));

    }

    public function submit(Request $request)
    {
        $id = auth()->user()->id;
        $soal =  Monitoring::select('id')->get();

        foreach ($soal as $number) {
            $num = $number->id;
            
            SubmitSoal::create([
                'id_user'       => $id,
                'tgl'           => date('Y-m-d'),
                'id_soal'        => $num,
                'jawaban'        => $request->$num,
            ]);

        };
        
        return back()
            ->with('laporan_berhasil','Laporan Berhasil di Tambahkan');
    }
}

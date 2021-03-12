<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BeritaAcara;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function adminHome()
    {
        $tahun = date('Y');
        $total = BeritaAcara::whereYear('waktu',$tahun)->count();
        $ringan = BeritaAcara::where('jenis','ringan')->whereYear('waktu',$tahun)->count();
        $sedang = BeritaAcara::where('jenis','sedang')->whereYear('waktu',$tahun)->count();
        $berat = BeritaAcara::where('jenis','berat')->whereYear('waktu',$tahun)->count();
        $chart = BeritaAcara::selectRaw('YEAR(`waktu`) AS tahun,COUNT(`id`) AS total')->groupBy('tahun')->get();
        return view('admin/dashboard',compact('total','ringan','sedang','berat','chart'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPelanggaranController extends Controller
{
    public function index()
    {
        return view('laporanPelanggaran');

    }
}

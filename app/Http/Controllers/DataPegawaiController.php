<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataPegawaiRequest;
use Illuminate\Http\Request;
use App\Models\User;

class DataPegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dataPegawai = User::all();
        return view('admin/dataPegawai', compact('dataPegawai'));
    }

    public function add(DataPegawaiRequest $request)
    {
        // User::create([
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'username'=> $request->username,
        //     'password'=>bcrypt('123456'),
        //     'divisi'=>$request->divisi,
        //     'level'=>$request->level,
        //     'alamat' => $request->alamat,
        //     'tlp'=> $request->tlp
        // ]);
        
        User::create($request->validated());
        return redirect('dataPegawai')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id, Request $request)
    {
        $profile = User::find($id);
        $profile->nama = $request->nama;
        $profile->email = $request->email;
        $profile->username = $request->username;
        $profile->divisi = $request->divisi;
        $profile->level = $request->level;
        $profile->alamat = $request->alamat;
        $profile->tlp = $request->tlp;
        $profile->save();

        return redirect('dataPegawai')->with('success', 'Data berhasil diedit');
    }

    public function hapus($id)
    {
        User::where('id', $id)->delete();

        return redirect('dataPegawai')->with('success', 'Data berhasil dihapus');
    }
}

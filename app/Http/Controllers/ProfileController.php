<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('profile');

    }

    public function admin()
    {
        return view('admin/profile');

    }

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $profile = User::find($id);
        $profile->nama = $request->nama;
        $profile->email = $request->email;
        $profile->username = $request->username;
        $profile->divisi = $request->divisi;
        $profile->alamat = $request->alamat;
        $profile->tlp = $request->tlp;
        $profile->save();
        $lv = auth()->user()->level;
        if ($lv == 'admin') {
            return redirect('adminProfile');
        }else {
            return redirect('profile');
        }
        
    }

    public function gantiPassword(Request $request)
    {
        $id = auth()->user()->id;
        $profile = User::find($id);
        $input = $request->all();
        if ($request->Password == $request->confimPassword) {
            $profile->password = bcrypt($request->confimPassword);
            $profile->save();

            return back()
            ->with('berhasil','Password berhasil diganti');
        }else {
            return back()
            ->with('gagal','Password tidak sama');
        }
        
    }
}

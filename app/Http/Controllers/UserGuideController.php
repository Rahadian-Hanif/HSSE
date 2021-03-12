<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserGuideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (auth()->user()->level === "admin") {
            return view('admin/userGuide');
        }else {
            return view('userGuide');
        }
        

    }
}

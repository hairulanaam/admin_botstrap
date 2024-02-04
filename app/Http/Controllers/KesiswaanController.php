<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KesiswaanController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function kesiswaanpresensi()
    {
        return view('data-presensi');
    }
    public function kesiswaannilai()
    {
        return view('data-nilai');
    }
}

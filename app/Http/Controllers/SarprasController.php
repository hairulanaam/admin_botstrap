<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SarprasController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function sarprasinventaris()
    {
        return view('data-inventaris');
    }
    public function sarprasruang()
    {
        return view('data-ruangg');
    }
    public function sarprasbarang()
    {
        return view('data-barangg');
    }
}

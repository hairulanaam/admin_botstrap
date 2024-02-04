<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function kurikulumjadwal()
    {
        return view('data-jadwal');
    }
    public function kurikulumkalender()
    {
        return view('data-kalender');
    }
}

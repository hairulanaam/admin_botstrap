<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumasController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function humastamu()
    {
        return view('data-tamu');
    }
    public function humasmou()
    {
        return view('data-mou');
    }
}

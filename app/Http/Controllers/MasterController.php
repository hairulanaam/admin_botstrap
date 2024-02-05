<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class MasterController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function masterguru()
    {
        return view('data-guru');
    }

    public function mastersiswa()
    {
        $siswas = Siswa::all();
        
        return view('data-siswa', ['siswas' => $siswas]);
    }
    public function masterteknisi()
    {
        return view('data-teknisi');
    }
    public function masterkelas()
    {
        return view('data-kelas');
    }
    public function mastermatpel()
    {
        return view('data-matpel');
    }
    public function masterruang()
    {
        return view('data-ruang');
    }
    public function masterbarang()
    {
        return view('data-barang');
    }


    public function kesiswaanpresensi()
    {
        return view('data-presensi');
    }
    public function kesiswaannilai()
    {
        return view('data-nilai');
    }

    public function sarprasinventaris()
    {
        return view('data-inventaris');
    }
    public function sarprasuang()
    {
        return view('data-uang');
    }
    public function sarprasbarang()
    {
        return view('data-barang');
    }

    public function humastamu()
    {
        return view('data-tamu');
    }
    public function humasmou()
    {
        return view('data-mou');
    }
    public function elearning()
    {
        return view('data-elearning');
    }
}

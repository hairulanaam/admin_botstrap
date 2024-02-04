<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{ 
    Route::get('/', 'MasterController@index')->name('index');
    Route::get('/masterguru', 'MasterController@masterguru')->name('data-guru');
    Route::get('/mastersiswa', 'MasterController@mastersiswa' )->name('data-siswa');
    Route::get('/masterteknisi', 'MasterController@masterteknisi' )->name('data-teknisi');
    Route::get('/masterkelas', 'MasterController@masterkelas' )->name('data-kelas');
    Route::get('/mastermatpel', 'MasterController@mastermatpel' )->name('data-matpel');
    Route::get('/masterruang', 'MasterController@masterruang' )->name('data-ruang');
    Route::get('/masterbarang', 'MasterController@masterbarang' )->name('data-barang');

    Route::get('/kurikulumjadwal', 'KurikulumController@kurikulumjadwal' )->name('data-jadwal');
    Route::get('/kurikulumkalender', 'KurikulumController@kurikulumkalender' )->name('data-kalender');

    Route::get('/kesiswaanpresensi', 'KesiswaanController@kesiswaanpresensi' )->name('data-presensi');
    Route::get('/kesiswaannilai', 'KesiswaanController@kesiswaannilai' )->name('data-nilai');
    
    Route::get('/sarprasinventaris', 'SarprasController@sarprasinventaris' )->name('data-inventaris');
    Route::get('/sarprasruang', 'SarprasController@sarprasruang' )->name('data-ruangg');
    Route::get('/sarprasbarang', 'SarprasController@sarprasbarang' )->name('data-barangg');

    Route::get('/humastamu', 'HumasController@humastamu' )->name('data-tamu');
    Route::get('/humasmou', 'HumasController@humasmou' )->name('data-mou');

    Route::get('/elearning', 'ElearningController@elearning' )->name('data-elearning');
});
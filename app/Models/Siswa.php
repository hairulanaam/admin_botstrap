<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['name', 'kelas', 'alamat', 'tanggal_lahir', 'jenis_kelamin'];
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('siswas')->insert([
            [
                'name' => 'Tiger Nixon',
                'kelas' => 'System Architect',
                'alamat' => 'Edinburgh',
                'tanggal_lahir' => '2011-04-25',
                'jenis_kelamin' => 'Laki - Laki',
            ],
            [
                'name' => 'kimi',
                'kelas' => 'System Architect',
                'alamat' => 'Edinburgh',
                'tanggal_lahir' => '2011-04-25',
                'jenis_kelamin' => 'Laki - Laki',
            ],
        ]);
    }
}

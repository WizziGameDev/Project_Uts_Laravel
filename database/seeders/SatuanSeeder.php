<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class
SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode_satuan' => 'LS',
                'nama_satuan' => 'Lusin',
            ],
            [
                'kode_satuan' => 'KD',
                'nama_satuan' => 'Kodi',
            ],
            [
                'kode_satuan' => 'RM',
                'nama_satuan' => 'Rim',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'A11',
                'nama_barang' => 'Jetpact',
                'harga_barang' => '420000',
                'description_barang' => 'Penerbangan',
                'kode_satuan_id' => 'LS',
            ],
            [
                'kode_barang' => 'A12',
                'nama_barang' => 'Wush',
                'harga_barang' => '620000',
                'description_barang' => 'Penerbangan',
                'kode_satuan_id' => 'KD',
            ],
            [
                'kode_barang' => 'A13',
                'nama_barang' => 'Speed',
                'harga_barang' => '120000',
                'description_barang' => 'Kecepatan',
                'kode_satuan_id' => 'KD',
            ],
            [
                'kode_barang' => 'A14',
                'nama_barang' => 'Wuling',
                'harga_barang' => '220000',
                'description_barang' => 'Darat',
                'kode_satuan_id' => 'RM',
            ],
        ]);
    }
}

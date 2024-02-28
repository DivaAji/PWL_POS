<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['penjualan_id' => '1','user_id' => '3','pembeli' => 'Arya', 'penjualan_kode' => 'PNJLN001', 'penjualan_tanggal' => '2024-02-01 10:15:00'],
            ['penjualan_id' => '2','user_id' => '3','pembeli' => 'Maya',  'penjualan_kode' => 'PNJLN002', 'penjualan_tanggal' => '2024-02-03 14:30:00'],
            ['penjualan_id' => '3','user_id' => '3','pembeli' => 'Rama',  'penjualan_kode' => 'PNJLN003', 'penjualan_tanggal' => '2024-02-05 09:45:00'],
            ['penjualan_id' => '4','user_id' => '3','pembeli' => 'Sinta',  'penjualan_kode' => 'PNJLN004', 'penjualan_tanggal' => '2024-02-07 12:20:00'],
            ['penjualan_id' => '5','user_id' => '3','pembeli' => 'Adi',  'penjualan_kode' => 'PNJLN005', 'penjualan_tanggal' => '2024-02-09 16:00:00'],
            ['penjualan_id' => '6','user_id' => '3','pembeli' => 'Dewi',  'penjualan_kode' => 'PNJLN006', 'penjualan_tanggal' => '2024-02-11 11:25:00'],
            ['penjualan_id' => '7','user_id' => '3','pembeli' => 'Budi',  'penjualan_kode' => 'PNJLN007', 'penjualan_tanggal' => '2024-02-13 15:10:00'],
            ['penjualan_id' => '8','user_id' => '3','pembeli' => 'Eka',  'penjualan_kode' => 'PNJLN008', 'penjualan_tanggal' => '2024-02-15 13:55:00'],
            ['penjualan_id' => '9','user_id' => '3','pembeli' => 'Dian',  'penjualan_kode' => 'PNJLN009', 'penjualan_tanggal' => '2024-02-17 08:40:00'],
            ['penjualan_id' => '10','user_id' => '3','pembeli' => 'Yoga',  'penjualan_kode' => 'PNJLN010', 'penjualan_tanggal' => '2024-02-19 17:30:00'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['barang_id' => '1','kategori_id' => '1','barang_kode' => 'KPSANG', 'barang_nama' => 'Kipas Angin', 'harga_beli' => 80000  , 'harga_jual' => 100000],
            ['barang_id' => '2','kategori_id' => '1','barang_kode' => 'ANTN',  'barang_nama' => 'Antena', 'harga_beli' => 150000  , 'harga_jual' => 160000],
            ['barang_id' => '3','kategori_id' => '2','barang_kode' => 'TSHRT',  'barang_nama' => 'T-Shirt', 'harga_beli' => 80000 , 'harga_jual' =>100000],
            ['barang_id' => '4','kategori_id' => '2','barang_kode' => 'JNS',  'barang_nama' => 'Celana Jeans', 'harga_beli' => 50000 , 'harga_jual' => 65000],
            ['barang_id' => '5','kategori_id' => '3','barang_kode' => 'PNSL',  'barang_nama' => 'Pensil', 'harga_beli' => 1000 , 'harga_jual' => 2000],
            ['barang_id' => '6','kategori_id' => '3','barang_kode' => 'BLPN',  'barang_nama' => 'Bolpoin', 'harga_beli' => 2500 , 'harga_jual' =>4000],
            ['barang_id' => '7','kategori_id' => '4','barang_kode' => 'CHK',  'barang_nama' => 'Chiki', 'harga_beli' => 5000 , 'harga_jual' => 6500],
            ['barang_id' => '8','kategori_id' => '4','barang_kode' => 'ROTI',  'barang_nama' => 'Roti', 'harga_beli' => 19500 , 'harga_jual' => 21000],
            ['barang_id' => '9','kategori_id' => '5','barang_kode' => 'THBTL',  'barang_nama' => 'Teh Botol', 'harga_beli' => 6000 , 'harga_jual' => 7000],
            ['barang_id' => '10','kategori_id' => '5','barang_kode' => 'AIRBTL',  'barang_nama' => 'Air Mineral', 'harga_beli' => 3000 , 'harga_jual' =>4000],
        ];
        DB::table('m_barang')->insert($data);
    }
}

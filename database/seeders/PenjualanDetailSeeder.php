<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Transaksi Penjualan 1
            ['penjualan_id' => '1', 'barang_id' => '1', 'harga' => 100000, 'jumlah' => 2],
            ['penjualan_id' => '1', 'barang_id' => '2', 'harga' => 160000, 'jumlah' => 1],
            ['penjualan_id' => '1', 'barang_id' => '3', 'harga' => 100000, 'jumlah' => 3],

            // Transaksi Penjualan 2
            ['penjualan_id' => '2', 'barang_id' => '4', 'harga' => 65000, 'jumlah' => 2],
            ['penjualan_id' => '2', 'barang_id' => '5', 'harga' => 2000, 'jumlah' => 5],
            ['penjualan_id' => '2', 'barang_id' => '6', 'harga' => 4000, 'jumlah' => 1],

            // Transaksi Penjualan 3
            ['penjualan_id' => '3', 'barang_id' => '7', 'harga' => 6500, 'jumlah' => 4],
            ['penjualan_id' => '3', 'barang_id' => '8', 'harga' => 21000, 'jumlah' => 2],
            ['penjualan_id' => '3', 'barang_id' => '9', 'harga' => 7000, 'jumlah' => 3],

            // Transaksi Penjualan 4
            ['penjualan_id' => '4', 'barang_id' => '10', 'harga' => 4000, 'jumlah' => 1],
            ['penjualan_id' => '4', 'barang_id' => '1', 'harga' => 100000, 'jumlah' => 2],
            ['penjualan_id' => '4', 'barang_id' => '2', 'harga' => 160000, 'jumlah' => 2],

            // Transaksi Penjualan 5
            ['penjualan_id' => '5', 'barang_id' => '3', 'harga' => 100000, 'jumlah' => 1],
            ['penjualan_id' => '5', 'barang_id' => '4', 'harga' => 65000, 'jumlah' => 3],
            ['penjualan_id' => '5', 'barang_id' => '5', 'harga' => 2000, 'jumlah' => 4],

            // Transaksi Penjualan 6
            ['penjualan_id' => '6', 'barang_id' => '6', 'harga' => 4000, 'jumlah' => 2],
            ['penjualan_id' => '6', 'barang_id' => '7', 'harga' => 6500, 'jumlah' => 1],
            ['penjualan_id' => '6', 'barang_id' => '8', 'harga' => 21000, 'jumlah' => 3],

            // Transaksi Penjualan 7
            ['penjualan_id' => '7', 'barang_id' => '9', 'harga' => 7000, 'jumlah' => 1],
            ['penjualan_id' => '7', 'barang_id' => '10', 'harga' => 4000, 'jumlah' => 2],
            ['penjualan_id' => '7', 'barang_id' => '1', 'harga' => 100000, 'jumlah' => 4],

            // Transaksi Penjualan 8
            ['penjualan_id' => '8', 'barang_id' => '2', 'harga' => 160000, 'jumlah' => 3],
            ['penjualan_id' => '8', 'barang_id' => '3', 'harga' => 100000, 'jumlah' => 2],
            ['penjualan_id' => '8', 'barang_id' => '4', 'harga' => 65000, 'jumlah' => 1],

            // Transaksi Penjualan 9
            ['penjualan_id' => '9', 'barang_id' => '5', 'harga' => 2000, 'jumlah' => 3],
            ['penjualan_id' => '9', 'barang_id' => '6', 'harga' => 4000, 'jumlah' => 4],
            ['penjualan_id' => '9', 'barang_id' => '7', 'harga' => 6500, 'jumlah' => 2],

            // Transaksi Penjualan 10
            ['penjualan_id' => '10', 'barang_id' => '8', 'harga' => 21000, 'jumlah' => 1],
            ['penjualan_id' => '10', 'barang_id' => '9', 'harga' => 7000, 'jumlah' => 3],
            ['penjualan_id' => '10', 'barang_id' => '10', 'harga' => 4000, 'jumlah' => 2],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}

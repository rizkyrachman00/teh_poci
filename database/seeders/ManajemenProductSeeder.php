<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ManajemenProductSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $data = [
            [
                'nama_produk' => 'Jasmine Ice Tea',
                'harga' => '3000',
                'stok' => '100',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Thai Ice Tea',
                'harga' => '5000',
                'stok' => '100',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Vanilla Ice Tea',
                'harga' => '5000',
                'stok' => '100',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('manajemen_products')->insert($data);
    }
}

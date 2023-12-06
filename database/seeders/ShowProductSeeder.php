<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ShowProductSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $data = [
            [
                'title' => '1',
                'description' => 'Rasa kenangan kita',
                'image' => '1701876015.png',
                'quantity' => '100',
                'price' => '3000',
                'discount_price' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '2',
                'description' => 'Teh dari Thailand Boss',
                'image' => '1701876037.png',
                'quantity' => '100',
                'price' => '5000',
                'discount_price' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '3',
                'description' => 'Rasa Kamis Manis',
                'image' => '1701876053.png',
                'quantity' => '100',
                'price' => '4000',
                'discount_price' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('show_products')->insert($data);
    }
}

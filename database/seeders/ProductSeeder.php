<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Query untuk menambah data
        DB::table('tb_products')->insert([[
            'name_product'=>'Smart TV Samsung 24 Inch',
            'price'=>15000,
            'description_product'=>'ini adalah deskripsi dummy',
            'category_id'=>2,
            'created_at'=>now(),
        ],[
            'name_product'=>'laptop Lenovo Thinkpad',
            'price'=>16000,
            'description_product'=>'ini adalah deskripsi dummy',
            'category_id'=>3,
            'created_at'=>now(),
        ],[
            'name_product'=>'Smartwatch Apple watch series 9',
            'price'=>8000,
            'description_product'=>'ini adalah deskripsi dummy',
            'category_id'=>4,
            'created_at'=>now(),
        ]]);
    }
}

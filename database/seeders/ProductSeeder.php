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
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Producto 1',
            'description' => 'Descripción del Producto 1',
            'price' => 100,
            'quantity' => 50
        ]);
    }
}

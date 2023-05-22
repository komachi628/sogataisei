<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for($i = 1 ; $i <= 7 ; $i++) { // 👈 追加

        $product = new \App\Models\Product();
        $product->name = 'title'. $i;
        $product->save();

    }
    }
}

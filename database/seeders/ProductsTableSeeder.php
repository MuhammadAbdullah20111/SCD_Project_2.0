<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            // Samsung
            [
                'brand_id' => 1, // Samsung
                'product_name' => 'Samsung Galaxy S23 Ultra',
                'price' => 1200.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 1, // Samsung
                'product_name' => 'Samsung Galaxy A14',
                'price' => 250.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 1, // Samsung
                'product_name' => 'Samsung Galaxy Z Fold5',
                'price' => 1999.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Apple
            [
                'brand_id' => 2, // Apple
                'product_name' => 'iPhone 14 Pro Max',
                'price' => 1299.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 2, // Apple
                'product_name' => 'iPhone SE 2023',
                'price' => 429.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // OnePlus
            [
                'brand_id' => 3, // OnePlus
                'product_name' => 'OnePlus 11',
                'price' => 729.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 3, // OnePlus
                'product_name' => 'OnePlus Nord CE 3',
                'price' => 449.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Google
            [
                'brand_id' => 4, // Google
                'product_name' => 'Google Pixel 7',
                'price' => 599.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 4, // Google
                'product_name' => 'Google Pixel 6a',
                'price' => 429.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

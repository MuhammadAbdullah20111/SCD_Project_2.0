<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

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
                'brand' => 'Samsung',
                'product_name' => 'Samsung Galaxy S23 Ultra',
                'price' => 1200.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Samsung',
                'product_name' => 'Samsung Galaxy A14',
                'price' => 250.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Samsung',
                'product_name' => 'Samsung Galaxy Z Fold5',
                'price' => 1999.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Samsung',
                'product_name' => 'Samsung Galaxy Note 20 Ultra',
                'price' => 1100.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Samsung',
                'product_name' => 'Samsung Galaxy M33',
                'price' => 350.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Apple
            [
                'brand' => 'Apple',
                'product_name' => 'iPhone 14 Pro Max',
                'price' => 1299.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Apple',
                'product_name' => 'iPhone SE 2023',
                'price' => 429.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Apple',
                'product_name' => 'iPhone 13 Mini',
                'price' => 599.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Apple',
                'product_name' => 'iPhone 12',
                'price' => 799.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Apple',
                'product_name' => 'iPhone 15 Pro Max',
                'price' => 1399.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // OnePlus
            [
                'brand' => 'OnePlus',
                'product_name' => 'OnePlus 11',
                'price' => 729.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'OnePlus',
                'product_name' => 'OnePlus Nord CE 3',
                'price' => 449.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'OnePlus',
                'product_name' => 'OnePlus 10R',
                'price' => 550.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'OnePlus',
                'product_name' => 'OnePlus 9',
                'price' => 639.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'OnePlus',
                'product_name' => 'OnePlus Nord 2T',
                'price' => 409.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Google
            [
                'brand' => 'Google',
                'product_name' => 'Google Pixel 7',
                'price' => 599.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Google',
                'product_name' => 'Google Pixel 6a',
                'price' => 429.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Google',
                'product_name' => 'Google Pixel Fold',
                'price' => 1749.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Google',
                'product_name' => 'Google Pixel 5',
                'price' => 499.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Google',
                'product_name' => 'Google Pixel 7 Pro',
                'price' => 799.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        }
    }


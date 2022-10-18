<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'iPhone 12',
                'slug' => 'iPhone',
                'small_description' => 'Best phone in the world.',
                'description' => 'Best phone in the world.',
                'original_price' => 999,
                'selling_price' => 899,
                'quantity' => 3,
                'trending' => 1,
                'status' => 0,
                'meta_title' => 'iPhone',
                'meta_keyword' => 'iphone',
                'meta_description' => 'Best phone in the world.'
            ],
            [
                'category_id' => 1,
                'name' => 'iPhone 12 Pro',
                'slug' => 'iPhone',
                'small_description' => 'Best phone in the world.',
                'description' => 'Best phone in the world.',
                'original_price' => 1099,
                'selling_price' => 999,
                'quantity' => 3,
                'trending' => 1,
                'status' => 0,
                'meta_title' => 'iPhone',
                'meta_keyword' => 'iphone',
                'meta_description' => 'Best phone in the world.'
            ],
            [
                'category_id' => 1,
                'name' => 'iPhone 12 Pro Max',
                'slug' => 'iPhone',
                'small_description' => 'Best phone in the world.',
                'description' => 'Best phone in the world.',
                'original_price' => 1199,
                'selling_price' => 1099,
                'quantity' => 3,
                'trending' => 1,
                'status' => 0,
                'meta_title' => 'iPhone',
                'meta_keyword' => 'iphone',
                'meta_description' => 'Best phone in the world.'
            ],
            [
                'category_id' => 1,
                'name' => 'iPhone 13',
                'slug' => 'iPhone',
                'small_description' => 'Best phone in the world.',
                'description' => 'Best phone in the world.',
                'original_price' => 999,
                'selling_price' => 899,
                'quantity' => 3,
                'trending' => 1,
                'status' => 0,
                'meta_title' => 'iPhone',
                'meta_keyword' => 'iphone',
                'meta_description' => 'Best phone in the world.'
            ],
        ]);
    }
}
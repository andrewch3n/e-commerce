<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'iPhone 12',
                'slug' => 'iPhone',
                'description' => 'Best phone in the world.',
                'meta_title' => 'iPhone',
                'meta_keyword' => 'iphone',
                'meta_description' => 'Best phone in the world.',
                'status' => 0,
            ],
            [
                'name' => 'iPhone 12 Pro',
                'slug' => 'iPhone',
                'description' => 'Best phone in the world.',
                'meta_title' => 'iPhone',
                'meta_keyword' => 'iphone',
                'meta_description' => 'Best phone in the world.',
                'status' => 0,
            ],
            [
                'name' => 'iPhone 12 Pro Max',
                'slug' => 'iPhone',
                'description' => 'Best phone in the world.',
                'meta_title' => 'iPhone',
                'meta_keyword' => 'iphone',
                'meta_description' => 'Best phone in the world.',
                'status' => 0,
            ],
            [
                'name' => 'iPhone 13',
                'slug' => 'iPhone',
                'description' => 'Best phone in the world.',
                'meta_title' => 'iPhone',
                'meta_keyword' => 'iphone',
                'meta_description' => 'Best phone in the world.',
                'status' => 0,
            ],
        ]);
    }
}
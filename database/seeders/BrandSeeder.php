<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Apple',
                'slug' => 'mobile',
                'status' => 0,
                'category_id' => 1
            ],
            [
                'name' => 'Mi',
                'slug' => 'mobile',
                'status' => 0,
                'category_id' => 1
            ],
            [
                'name' => 'Vivo',
                'slug' => 'mobile',
                'status' => 0,
                'category_id' => 1
            ],
            [
                'name' => 'Samsung',
                'slug' => 'mobile',
                'status' => 0,
                'category_id' => 1
            ],
            [
                'name' => 'Apple',
                'slug' => 'macbook',
                'status' => 0,
                'category_id' => 1
            ],
            [
                'name' => 'Apple',
                'slug' => 'accessories',
                'status' => 0,
                'category_id' => 1
            ],
        ]);
    }
}
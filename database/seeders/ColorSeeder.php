<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            [
                'name' => 'Red',
                'code' => 'red',
                'status' => 0
            ],
            [
                'name' => 'Blue',
                'code' => 'blue',
                'status' => 0
            ],
            [
                'name' => 'Yellow',
                'code' => 'yellow',
                'status' => 0
            ],
            [
                'name' => 'Grey',
                'code' => 'grey',
                'status' => 0
            ],
            [
                'name' => 'Aqua',
                'code' => 'aqua',
                'status' => 0
            ],
            [
                'name' => 'Purple',
                'code' => 'purple',
                'status' => 0
            ],
            [
                'name' => 'Magenta',
                'code' => 'magenta',
                'status' => 0
            ],
        ]);
    }
}
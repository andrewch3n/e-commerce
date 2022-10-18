<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'role_as' => 1
            ],
            [
                'name' => 'Sana',
                'email' => 'sana@gmail.com',
                'password' => Hash::make('12345678'),
                'role_as' => 0
            ],
            [
                'name' => 'mina',
                'email' => 'mina@gmail.com',
                'password' => Hash::make('12345678'),
                'role_as' => 0
            ],
            [
                'name' => 'tzuyu',
                'email' => 'tzuyu@gmail.com',
                'password' => Hash::make('12345678'),
                'role_as' => 1
            ],
            [
                'name' => 'yuri',
                'email' => 'yuri@gmail.com',
                'password' => Hash::make('12345678'),
                'role_as' => 0
            ]
        ]);
    }
}
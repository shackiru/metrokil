<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin Metrokil',
                'email' => 'admin@metrokil.com',
                'username' => 'admin',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'User Metrokil',
                'email' => 'user@metrokil.com',
                'username' => 'user',
                'password' => bcrypt('user'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}

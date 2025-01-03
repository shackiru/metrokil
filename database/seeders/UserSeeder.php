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
                'username' => 'admin',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'User Metrokil',
                'username' => 'user',
                'password' => bcrypt('user'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}

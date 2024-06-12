<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('users')->insert([
            [
                'is_admin' => 1,
                'prefix_id' => 1,
                'name' => 'admin',
                'lastname' => 'pcd',
                'email' => 'admin@localhost',
                'password' => bcrypt('11111111'),
            ],
            [
                'is_admin' => 1,
                'prefix_id' => 2,
                'name' => 'สมหญิง',
                'lastname' => 'ใจดี',
                'email' => 'somying@localhost',
                'password' => bcrypt('11111111'),
            ],
            [
                'is_admin' => 0,
                'prefix_id' => 2,
                'name' => 'สมพร',
                'lastname' => 'คนขยัน',
                'email' => 'sompon@localhost',
                'password' => bcrypt('11111111'),
            ]
        ]);
    }
}

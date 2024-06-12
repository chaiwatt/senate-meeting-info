<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'ผู้ดูแลระบบ'
        ]);
        Role::create([
            'name' => 'ผู้นำเข้าข้อมูล'
        ]);
        Role::create([
            'name' => 'ผู้ใช้งานทั่วไป'
        ]);
    }
}

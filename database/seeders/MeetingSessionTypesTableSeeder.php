<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MeetingSessionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meeting_session_types')->insert([
            [
                'name' => 'ประชุมปกติ',
            ],
            [
                'name' => 'งดประชุม',
            ]
        ]);
    }
}

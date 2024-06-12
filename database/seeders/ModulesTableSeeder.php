<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::create([
            'prefix' => 'groups.meeting-session-system.list',
            'code' => 'MEETING-SESSION-LIST',
            'name' => 'สมัยประชุม',
            'icon' => 'fa-clock'
        ]);
        Module::create([
            'prefix' => 'groups.meeting-session-system.setting',
            'code' => 'MEETING-SESSION-SETTING',
            'name' => 'การตั้งค่า',
            'icon' => 'fa-cog'
        ]);

        Module::create([
            'prefix' => 'groups.document-request.list',
            'code' => 'DOCUMENT-REQUEST-LIST',
            'name' => 'คำขอเอกสาร',
            'icon' => 'fa-clock'
        ]);
        Module::create([
            'prefix' => 'groups.document-request.setting',
            'code' => 'DOCUMENT-REQUEST-SETTING',
            'name' => 'การตั้งค่า',
            'icon' => 'fa-cog'
        ]);

        Module::create([
            'prefix' => 'groups.satisfaction-survey-system.list',
            'code' => 'SATISFACTION-SURVEY-LIST',
            'name' => 'สำรวจความพึงพอใจ',
            'icon' => 'fa-clock'
        ]);
        Module::create([
            'prefix' => 'groups.satisfaction-survey-system.setting',
            'code' => 'SATISFACTION-SURVEY-SETTING',
            'name' => 'การตั้งค่า',
            'icon' => 'fa-cog'
        ]);

        Module::create([
            'prefix' => 'groups.report-system.list',
            'code' => 'REPORT-LIST',
            'name' => 'รายงาน',
            'icon' => 'fa-clock'
        ]);
        Module::create([
            'prefix' => 'groups.report-system.setting',
            'code' => 'REPORT-SETTING',
            'name' => 'การตั้งค่า',
            'icon' => 'fa-cog'
        ]);
    }
}

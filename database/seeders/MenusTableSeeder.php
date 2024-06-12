<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'code' => 'MEETING-SEESION-MENU-LIST',
            'name' => 'รายการบันทึกการประชุม',
            'route' => 'groups.meeting-session-system.meeting-session.list',    
            'view' => 'groups.meeting-session-system.meeting-session.list.index',
        ]);
        Menu::create([
            'code' => 'MEETING-SESSION-MENU-SETTING-GENERAL',
            'name' => 'ตั้งค่าทั่วไป',
            'route' => 'groups.meeting-session-system.setting.general',    
            'view' => 'groups.meeting-session-system.setting.general.index',
        ]);

        Menu::create([
            'code' => 'DOCUMENT-REQUEST-MENU-LIST',
            'name' => 'รายการคำขอเอกสาร',
            'route' => 'groups.document-request-system.document-request.list',    
            'view' => 'groups.document-request-system.document-request.list.index',
        ]);
        Menu::create([
            'code' => 'DOCUMENT-REQUEST-MENU-SETTING',
            'name' => 'ตั้งค่า',
            'route' => 'groups.document-request-system.setting.general',    
            'view' => 'groups.document-request-system.setting.general.index',
        ]);

        Menu::create([
            'code' => 'SATISFACTION-SURVEY-MENU-LIST',
            'name' => 'รายการสำรวจความพึงพอใจ',
            'route' => 'groups.satisfaction-survey-system.satisfaction-survey.list',    
            'view' => 'groups.satisfaction-survey-system.satisfaction-survey.list.index',
        ]);
        Menu::create([
            'code' => 'SATISFACTION-SURVEY-MENU-SETTING',
            'name' => 'ตั้งค่า',
            'route' => 'groups.satisfaction-survey-system.setting.general',    
            'view' => 'groups.satisfaction-survey-system.setting.general.index',
        ]);

        Menu::create([
            'code' => 'REPORT-MENU-LIST',
            'name' => 'รายงาน',
            'route' => 'groups.report-system.report.list',    
            'view' => 'groups.report-system.report.list.index',
        ]);
        Menu::create([
            'code' => 'REPORT-MENU-SETTING',
            'name' => 'ตั้งค่า',
            'route' => 'groups.report-system.setting.general',    
            'view' => 'groups.report-system.setting.general.index',
        ]);
    }
}

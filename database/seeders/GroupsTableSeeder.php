<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::create([
            'code' => 'MEETING-SESSION',
            'name' => 'ระบบจัดการสมัยประชุม',
            'description' => 'รายละเอียดระบบจัดการสมัยประชุม',
            'icon' => '<span class="material-symbols-outlined" style="color: #175CD3; font-size: 36px;">demography</span>',
            'dashboard' => 'groups.dashboard.meeting-session-system',
            'default_route' => 'groups.meeting-session-system.meeting-session.list'
        ]);
        Group::create([
            'code' => 'DOCUMENT-REQUEST',
            'name' => 'ระบบคำขอเอกสาร',
            'description' => 'รายละเอียดระบบคำขอเอกสาร',
            'icon' => '<span class="material-symbols-outlined" style="color: #175CD3; font-size: 36px;">assignment</span>',
            'dashboard' => 'groups.dashboard.document-request-system',
            'default_route' => 'groups.document-request-system.document-request.list'
        ]);
        Group::create([
            'code' => 'SATISFACTION-SURVEY',
            'name' => 'ระบบสำรวจความพึงพอใจ',
            'description' => 'รายละเอียดระบบสำรวจความพึงพอใจ',
            'icon' => '<span class="material-symbols-outlined" style="color: #175CD3; font-size: 36px;">workspace_premium</span>',
            'dashboard' => 'groups.dashboard.satisfaction-survey-system',
            'default_route' => 'groups.satisfaction-survey-system.satisfaction-survey.list'
        ]);
        Group::create([
            'code' => 'REPORT',
            'name' => 'ระบบรายงาน',
            'description' => 'รายละเอียดระบบรายงาน',
            'icon' => '<span class="material-symbols-outlined" style="color: #DDB761; font-size: 36px;">finance_mode</span>',
            'dashboard' => 'groups.dashboard.report-system',
            'default_route' => 'groups.report-system.report.list'
        ]);
    }
}

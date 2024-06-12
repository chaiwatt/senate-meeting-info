<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Group;
use App\Models\Module;
use App\Models\GroupModuleMenu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupModuleMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Group
        $meetingSessionGroup = Group::where('code','MEETING-SESSION')->first();
        $reportGroup = Group::where('code','REPORT')->first();
        $documentRequestGroup = Group::where('code','DOCUMENT-REQUEST')->first();
        $satisfactionSurveyGroup = Group::where('code','SATISFACTION-SURVEY')->first();

      
        //Module
        $meetingSessionListModule = Module::where('code','MEETING-SESSION-LIST')->first();
        $meetingSessionSettingModule = Module::where('code','MEETING-SESSION-SETTING')->first();
        $documentRequestListModule = Module::where('code','DOCUMENT-REQUEST-LIST')->first();
        $documentRequestSettingModule = Module::where('code','DOCUMENT-REQUEST-SETTING')->first();
        $satisfactionSurveyListModule = Module::where('code','SATISFACTION-SURVEY-LIST')->first();
        $satisfactionSurveySettingModule = Module::where('code','SATISFACTION-SURVEY-SETTING')->first();
        $reportListModule = Module::where('code','REPORT-LIST')->first();
        $reportSettingModule = Module::where('code','REPORT-SETTING')->first();

        //Menu
        $meetingSessionListMenu = Menu::where('code','MEETING-SEESION-MENU-LIST')->first();
        $meetingSessionSettingGeneralMenu = Menu::where('code','MEETING-SESSION-MENU-SETTING-GENERAL')->first();
        $documentRequestListMenu = Menu::where('code','DOCUMENT-REQUEST-MENU-LIST')->first();
        $documentRequestSettingMenu = Menu::where('code','DOCUMENT-REQUEST-MENU-SETTING')->first();
        $satisfactionSurveyListMenu = Menu::where('code','SATISFACTION-SURVEY-MENU-LIST')->first();
        $satisfactionSurveySettingMenu = Menu::where('code','SATISFACTION-SURVEY-MENU-SETTING')->first();
        $reportListMenu = Menu::where('code','REPORT-MENU-LIST')->first();
        $reportSettingMenu = Menu::where('code','REPORT-MENU-SETTING')->first();


        GroupModuleMenu::create([
            'group_id' => $meetingSessionGroup->id,
            'module_id' => $meetingSessionListModule->id,
            'menu_id' => $meetingSessionListMenu->id,
        ]);
       
        GroupModuleMenu::create([
            'group_id' => $meetingSessionGroup->id,
            'module_id' => $meetingSessionSettingModule->id,
            'menu_id' => $meetingSessionSettingGeneralMenu->id,
        ]);

        GroupModuleMenu::create([
            'group_id' => $documentRequestGroup->id,
            'module_id' => $documentRequestListModule->id,
            'menu_id' => $documentRequestListMenu->id,
        ]);
       
        GroupModuleMenu::create([
            'group_id' => $documentRequestGroup->id,
            'module_id' => $documentRequestSettingModule->id,
            'menu_id' => $documentRequestSettingMenu->id,
        ]);

        GroupModuleMenu::create([
            'group_id' => $satisfactionSurveyGroup->id,
            'module_id' => $satisfactionSurveyListModule->id,
            'menu_id' => $satisfactionSurveyListMenu->id,
        ]);
       
        GroupModuleMenu::create([
            'group_id' => $satisfactionSurveyGroup->id,
            'module_id' => $satisfactionSurveySettingModule->id,
            'menu_id' => $satisfactionSurveySettingMenu->id,
        ]);

        GroupModuleMenu::create([
            'group_id' => $reportGroup->id,
            'module_id' => $reportListModule->id,
            'menu_id' => $reportListMenu->id,
        ]);

        GroupModuleMenu::create([
            'group_id' => $reportGroup->id,
            'module_id' => $reportSettingModule->id,
            'menu_id' => $reportSettingMenu->id,
        ]);
    }
}

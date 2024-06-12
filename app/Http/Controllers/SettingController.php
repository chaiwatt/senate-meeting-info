<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
           $colors = ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de','#3c8dbc','#00c0ef','#f39c12','#f56954','#f56954','#39CCCC','#605ca8','#D81B60','#2ab7ca','#f6abb6','#011f4b','#851e3e'];

           $currentPage = 'ตั้งค่าระบบ';
           $users = User::all();
           $roles = Role::all();
           $roleDatapackages = [];
            foreach ($roles as $index => $role) {
                $roleDatapackages[] = [
                    'label' => $role->name,
                    'value' => $role->users->count(),
                    'color' => $colors[$index % count($colors)],
                ];
            }

            $roleDonutData = [
                'labels' => array_column($roleDatapackages, 'label'),
                'datasets' => [
                    [
                        'data' => array_column($roleDatapackages, 'value'),
                        'backgroundColor' => array_column($roleDatapackages, 'color')
                    ]
                ]
            ];
            
           return view('setting.index', [
                'roles' => $roles,
                'roleDonutData' => $roleDonutData,
                'users' => $users,
                'currentPage' => $currentPage
           ]);
    }
}

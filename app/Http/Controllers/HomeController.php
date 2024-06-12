<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\HtmlColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $groups = [];
        $role = auth()->user()->roles->first();
        if ($role !== null)
        {
            $groupIds = $role->role_group_jsons->pluck('group_id');
            $groups = Group::whereIn('id',$groupIds)->get();
        }
        
        Date::setLocale('th');
        $date = Date::now();
        $formattedDate = $date->format('วันl, d F Y');
        $htmlcolors  = HtmlColor::all();
        return view('home', ['groups' => $groups,'htmlcolors' => $htmlcolors, 'formatDated'=>$formattedDate ]);
    }
}

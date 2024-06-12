<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MainRole;
use App\Models\Oganization;
use App\Models\Prefix;
use App\Models\UserPosition;
use Illuminate\Http\Request;

class SettingUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('setting.user.index',[
            'users' => $users
        ]);
    }

    public function create()
    {
        $prefixes = Prefix::all();
        return view('setting.user.create',[
            'prefixes' => $prefixes
        ]);
    }

    public function import()
    {
        return view('setting.user.import');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $lastname = $request->lastname;
        $email = $request->email;
        $prefix = $request->prefix;
        $isAdmin = $request->is_admin;

        User::create([
                'is_admin' => $isAdmin,
                'prefix_id' => $prefix,
                'name' => $name,
                'lastname' => $lastname,
                'email' => $email,
                'password' => bcrypt('11111111'),
            ]);
        return redirect()->route('setting.user');
    }

    public function view($id)
    {
        $user = User::find($id);
        return view('setting.user.view',[
            'user' => $user
        ]);
    }

    public function update(Request $request,$id)
    {
        $name = $request->name;
        $lastname = $request->lastname;
        $email = $request->email;
        $mainRole = $request->main_role;

        $user = User::find($id)->update([
                'is_admin' => $mainRole,
                'name' => $name,
                'lastname' => $lastname,
                'email' => $email
            ]);
        return redirect()->route('setting.user');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        if ($user->roles()->exists()) {
            return response()->json(['error' => 'ผู้ใช้งานมอบหมายบทบาทแล้ว'], 422);
        }

        $user->delete();

        return response()->json(['message' => 'ผู้ใช้งานได้ถูกลบออกเรียบร้อยแล้ว']);
    }
}

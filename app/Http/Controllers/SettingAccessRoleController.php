<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Helpers\ActivityLogger;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SettingAccessRoleController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลรายการบทบาททั้งหมด
        $roles = Role::all();

        // ส่งข้อมูลรายการบทบาทไปยังหน้าวิวเพื่อแสดงผล
        return view('setting.access.role.index', [
            'roles' => $roles
        ]);
    }

    public function create()
    {
        // แสดงหน้าสร้างบทบาท
        return view('setting.access.role.create');
    }

    public function store(Request $request)
    {
        $validator = $this->validateFormData($request);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $name = $request->name;

        Role::create([
            'name' => $name
        ]);
        return redirect()->route('setting.access.role')->with('message', 'นำเข้าข้อมูลเรียบร้อยแล้ว');
    }

    public function view($id)
    {
        $role = Role::findOrFail($id);
        return view('setting.access.role.view', [
            'role' => $role
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = $this->validateFormData($request);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $role = Role::findOrFail($id);
        $role->update($validator->validated());
        return redirect()->route('setting.access.role')->with('success', 'อัปเดต Role เรียบร้อยแล้ว');
    }

    public function delete($id)
    {
        $role = Role::findOrFail($id);

        if ($role->users()->exists()) {
            return response()->json(['error' => 'Role นี้ถูกใช้งานอยู่ในปัจจุบันและไม่สามารถลบได้'], 422);
        }

        $role->delete();

        return response()->json(['message' => 'Role ได้ถูกลบออกเรียบร้อยแล้ว']);
    }


    public function validateFormData($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);

        return $validator;
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{


    public function index()
    {
        $roles = Role::get();

        return view('roles.index',
    [
        'roles' => $roles
    ]);

    }

    public function create()
    {
        return view('roles.create');

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name'
            ]
        ]);

        Role::create([
            'name' => $request->name
        ]);

        return redirect('roles');
    }

    public function edit(Role $role)
    {
        return view('roles.edit',
    [
        'role' => $role
    ]);
    }

    public function update(Role $role, Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name'
            ]
        ]
            );

            $role->update(
            [
                'name' => $request->name
            ]
        );

        return redirect('roles');
    }

    public function destroy($roleId)
    {

        $role = Role::find($roleId);
        $role->delete();
        return redirect('roles');

    }

    public function addPermissionToRole($roleId){

        $permissions = Permission::get();
        $role = Role::findOrfail($roleId);
        
        return view('roles.add-permissions',
        [
            'role' => $role,
            'permissions' => $permissions
        ]
    );

    }

    public function givePermissionToRole(Request $request, $roleId){

        // dd($reqest->all());
        $request->validate(
            [
                'permission' => 'required|array'
            ]
            );

        $role = Role::findOrfail($roleId);
        $role->syncPermissions($request->permission);
        return redirect()->back();

    }
}

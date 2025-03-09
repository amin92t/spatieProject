<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function edit(Permission $permission)
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


}

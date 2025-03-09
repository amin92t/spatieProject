<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    
    public function index()
    {
        $permissions = Permission::get();

        return view('permissions.index',
    [
        'permissions' => $permissions
    ]);

    }

    public function create()
    {
        return view('permissions.create');

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name'
            ]
        ]);

        Permission::create([
            'name' => $request->name
        ]);

        return redirect('permissions');
    }

    public function edit(Permission $permission)
    {
        return view('permissions.edit',
    [
        'permission' => $permission
    ]);
    }

    public function update(Permission $permission, Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name'
            ]
        ]
            );

            $permission->update(
            [
                'name' => $request->name
            ]
        );

        return redirect('permissions');
    }

    public function destroy()
    {

    }



}

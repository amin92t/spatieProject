<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    
    public function index()
    {
        return view('permissions.index');
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

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }



}

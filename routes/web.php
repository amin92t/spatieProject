<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/permissions', PermissionController::class);
Route::get('/permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);


Route::resource('/roles', RoleController::class);
Route::get('/roles/{roleId}/delete', [RoleController::class, 'destroy']);
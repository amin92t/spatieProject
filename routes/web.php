<?php

use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/permissions', PermissionController::class);
Route::get('/permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);
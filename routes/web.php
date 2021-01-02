<?php

use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin', function () {
    return view('BackEnd.index');
})->name('backendhome');
Route::resource('adminroles', 'Admin\RolesController');
Route::resource('adminusers', 'Admin\UsersController');
Route::get('admin/roles/load', 'Admin\LoadDataController@LoadDataRoles')->name('loadroles');
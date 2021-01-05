<?php

use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Route;

// Admin
Route::get('admin', function () {
    return view('BackEnd.index');
})->name('backendhome');
Route::resource('adminroles', 'Admin\RolesController');
Route::resource('adminusers', 'Admin\UsersController');
Route::get('admin/roles/load', 'Admin\LoadDataController@LoadDataRoles')->name('loadroles');

// User
//-----home
Route::get('/', 'User\HomeController@Index')->name('home');
//-----product
Route::get('/product/hot', 'User\ProductController@HotProduct')->name('hotproduct');
Route::get('/product/new', 'User\ProductController@NewProduct')->name('newproduct');
Route::get('/product/detail', 'User\ProductController@DetailProduct')->name('details');
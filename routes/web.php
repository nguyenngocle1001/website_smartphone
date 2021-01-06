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

//Login
Route::any('Login', 'Admin\LoginAdminController@index') ;
Route::post('/admin_dashboard', 'Admin\LoginAdminController@dashboard') ;
Route::get('/logout', 'Admin\LoginAdminController@logout');

//
Route::resource('admincategorys', 'Admin\CategoryController');
//
Route::resource('adminmanufacturers', 'Admin\ManufacturersController');
//
Route::resource('adminproducts', 'Admin\ProductsController');

// User
//-----home
Route::get('/', 'User\HomeController@Index')->name('home');
//-----product
Route::get('/products', 'User\ProductController@Index')->name('products');
Route::get('/product/detail', 'User\ProductController@DetailProduct')->name('details');
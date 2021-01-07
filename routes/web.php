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
Route::any('/Login', 'Admin\LoginAdminController@index');
Route::post('/admin_dashboard', 'Admin\LoginAdminController@dashboard');
Route::get('/logout', 'Admin\LoginAdminController@logout');

//
Route::resource('admincategorys', 'Admin\CategoryController');
//
Route::resource('adminmanufacturers', 'Admin\ManufacturersController');
//
Route::resource('adminproducts', 'Admin\ProductsController');

//User_login
Route::post('/user_login', 'User\LoginController@Login')->name('login');
Route::get('/user_logout', 'User\LoginController@Logout');

Route::post('/user_register', 'User\RegisterController@Register');

// User
//-----home
Route::get('/', 'User\HomeController@Index')->name('home');
//-----product
Route::get('/products', 'User\ProductController@Index')->name('products');
//-----detail
Route::get('/product/detail/{id}', 'User\ProductController@DetailProduct')->name('details');
//-----search
Route::post('/products/search', 'User\ProductController@Search')->name('search');
//-----filter category
Route::get('/products/category/{id}', 'User\ProductController@ProductCategory')->name('category');
//-----filter manufacture
Route::get('/products/manufacture/{id}', 'User\ProductController@ProductManufacture')->name('manufacture');


//Layout
//-----load navigation
Route::get('/home/navigation', 'User\HomeController@LoadNavigation')->name('navigation');
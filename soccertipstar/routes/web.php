<?php

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

Route::get('/', function () {
    return view('blog.index');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/role/fetch_roles_ajax', 'RoleController@fetch_roles_ajax')->name('fetch_roles_ajax');
Auth::routes();
Route::resource('user', 'UserController');
Route::resource('profile', 'ProfileController');
Route::resource('role', 'RoleController');
Route::resource('permission', 'PermissionController');




<?php

use Illuminate\Support\Facades\Route;
Auth::routes();
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

Route::get("/",[\App\Http\Controllers\HomeController::class,"index"]);


Route::get('/admin',[\App\Http\Controllers\Admin\AdminController::class,'index']);
Route::get('/delete/{id}',[\App\Http\Controllers\Admin\AdminController::class,"destroy"]);

#logout
Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout']);

#user
Route::get('/user/update',[\App\Http\Controllers\User\UserController::class,"index"]);
Route::get('/user/update/{id}',[\App\Http\Controllers\User\UserController::class,"edit"]);

Route::get('/home', 'HomeController@index')->name('home');

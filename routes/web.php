<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

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
    return view('welcome');
});

// Route::get("/home-ad", "Admin\HomeController@home");

// Route::get("/product", "Admin\ProductController@list");

// Route::get("/user", "Admin\UserController@list");

Auth::routes();

Route::get('/admin-home', 'Admin\HomeController@index')->name('home');


Route::prefix("product") -> group( function(){
   Route::get("/", [
    "as" => "product.list",
    "uses" => "Admin\ProductController@list",
    "middleware" => "can:product-list"
   ]);
   Route::get("/add", [
    "as" => "product.add",
    "uses" => "Admin\ProductController@add",
    "middleware" => "can:product-add"
   ]);
   Route::get("/detail/{id}", [
    "as" => "product.detail",
    "uses" => "Admin\ProductController@detail",
    "middleware" => "can:product-detail"
   ]);
   Route::get("/delete/{id}", [
    "as" => "product.delete",
    "uses" => "Admin\ProductController@delete",
    "middleware" => "can:product-delete"
   ]);
});

Route::prefix("role") -> group( function(){
    Route::get("/", [
     "as" => "role.list",
     "uses" => "Admin\RoleController@list",
     "middleware" => "can:role-list"
    ]);
    Route::get("/add", [
     "as" => "role.add",
     "uses" => "Admin\RoleController@add",
     "middleware" => "can:role-add"
    ]);
    Route::get("/detail/{id}", [
     "as" => "role.detail",
     "uses" => "Admin\RoleController@detail",
     "middleware" => "can:role-detail"
    ]);
    Route::get("/delete/{id}", [
     "as" => "role.delete",
     "uses" => "Admin\RoleController@delete",
     "middleware" => "can:role-delete"
    ]);
 });

 Route::prefix("user") -> group( function(){
    Route::get("/", [
     "as" => "user.list",
     "uses" => "Admin\UserController@list",
     "middleware" => "can:user-list"
    ]);
    Route::get("/add", [
     "as" => "user.add",
     "uses" => "Admin\UserController@add",
     "middleware" => "can:user-add"
    ]);
    Route::get("/detail/{id}", [
     "as" => "user.detail",
     "uses" => "Admin\UserController@detail",
     "middleware" => "can:user-detail"
    ]);
    Route::get("/delete/{id}", [
     "as" => "user.delete",
     "uses" => "Admin\UserController@delete",
     "middleware" => "can:user-delete"
    ]);
 });
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
   Route::get("/create", [
    "as" => "product.create",
    "uses" => "Admin\ProductController@create",
    "middleware" => "can:product-create"
   ]);
   Route::get("/show/{id}", [
    "as" => "product.show",
    "uses" => "Admin\ProductController@show",
    "middleware" => "can:product-show"
   ]);
   Route::get("/destroy/{id}", [
    "as" => "product.destroy",
    "uses" => "Admin\ProductController@destroy",
    "middleware" => "can:product-destroy"
   ]);
});

Route::prefix("role") -> group( function(){
    Route::get("/", [
     "as" => "role.list",
     "uses" => "Admin\RoleController@list",
     "middleware" => "can:role-list"
    ]);
    Route::get("/create", [
     "as" => "role.create",
     "uses" => "Admin\RoleController@create",
     "middleware" => "can:role-create"
    ]);
    Route::post("/store", [
      "as" => "role.store",
      "uses" => "Admin\RoleController@store",
      "middleware" => "can:role-create"
     ]);
    Route::get("/show/{id}", [
     "as" => "role.show",
     "uses" => "Admin\RoleController@show",
     "middleware" => "can:role-show"
    ]);
    Route::get("/edit/{id}", [
      "as" => "role.edit",
      "uses" => "Admin\RoleController@edit",
      "middleware" => "can:role-update"
     ]);
     Route::post("/update/{id}", [
      "as" => "role.update",
      "uses" => "Admin\RoleController@update",
      "middleware" => "can:role-update"
     ]);
    Route::post("/destroy/{id}", [
     "as" => "role.destroy",
     "uses" => "Admin\RoleController@destroy",
     "middleware" => "can:role-destroy"
    ]);
 });

 Route::prefix("user") -> group( function(){
    Route::get("/", [
     "as" => "user.list",
     "uses" => "Admin\UserController@list",
     "middleware" => "can:user-list"
    ]);
    Route::get("/create", [
     "as" => "user.create",
     "uses" => "Admin\UserController@create",
     "middleware" => "can:user-create"
    ]);
    Route::post("/store", [
      "as" => "user.store",
      "uses" => "Admin\UserController@store",
      "middleware" => "can:user-create"
     ]);
    Route::get("/show/{id}", [
     "as" => "user.show",
     "uses" => "Admin\UserController@show",
     "middleware" => "can:user-show"
    ]);
    Route::get("/edit/{id}", [
      "as" => "user.edit",
      "uses" => "Admin\UserController@edit",
      "middleware" => "can:user-update"
     ]);
     Route::post("/update/{id}", [
      "as" => "user.update",
      "uses" => "Admin\UserController@update",
      "middleware" => "can:user-update"
     ]);
    Route::post("/destroy/{id}", [
     "as" => "user.destroy",
     "uses" => "Admin\UserController@destroy",
     "middleware" => "can:user-destroy"
    ]);
 });

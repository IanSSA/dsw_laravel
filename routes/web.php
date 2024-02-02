<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', "App\Http\Controllers\HomeController@index")->name("home.index");

Route::get("/about", "App\Http\Controllers\HomeController@about")->name("home.about");

Route::get("/products", "App\Http\Controllers\ProductController@products")->name("products.index");

Route::get("/products/{id}", "App\Http\Controllers\ProductController@show")->name("products.show");

Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
Route::post('/admin/new_products', 'App\Http\Controllers\Admin\AdminProductController@newproduct')->name("admin.product.create");

Route::get('/admin/eliminar/{id}', 'App\Http\Controllers\Admin\AdminProductController@eliminar')->name("admin.product.eliminar");
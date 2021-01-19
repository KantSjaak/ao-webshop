<?php

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

Route::view('/', 'welcome');

Route::get('/categories', 'CategoryController@show');

Route::get('/products/{type}', 'ProductController@showProductsByCategory');

Route::get('/product/{id}', 'ProductController@showProduct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/cart', 'CartController@show')->middleware(\App\Http\Middleware\EnsureLogin::class);

route::get('/cart/{id}', 'CartController@save');

route::get('/cart/{pp}/{id}', 'CartController@push');

route::get('/order', 'OrderController@SendOrder')->middleware(\App\Http\Middleware\EnsureLogin::class);

route::get('/orders', 'OrderController@GetOrders');
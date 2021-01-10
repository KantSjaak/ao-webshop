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

Route::get('/products/{type}', 'ProductsController@showProducts');

Route::get('/product/{id}', 'ProductController@showProduct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/cart', 'CartController@show');

route::get('/cart/{id}', 'CartController@save');

route::get('/cart/{pp}/{id}', 'CartController@push');

route::get('/test/save', 'CartController@save');

route::get('/test/clear', 'CartController@SessionClear');

route::get('/test/getAll', 'CartController@getAll');

route::get('/test/push', 'CartController@push');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

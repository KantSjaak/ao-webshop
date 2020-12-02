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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/categories', function () {
    return view('category');
});*/

Route::get('/categories', 'CategoryController@show');

Route::get('/products/{type}', 'ProductController@showProducts')->name('filterCategory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

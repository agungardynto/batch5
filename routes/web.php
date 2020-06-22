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

Route::resource('withimage', 'WithimageController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('karyawan', 'KaryawanController');
Route::resource('bagian', 'BagianController');
Route::get('bagian/{bagian}', 'BagianController@show')->name('bagian.show')->middleware('auth')->middleware('can:view,bagian');

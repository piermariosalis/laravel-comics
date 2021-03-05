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

Route::get('/', 'PageController@index')->name('index');

Route::get('details', 'PageController@details')->name('details');

Auth::routes(['register' => false]);



Route::middleware('auth')->name('admin.')->namespace('Admin')->prefix('admin')->group(function () {
    Route::resource('comics', 'ComicController');
    Route::get('admin/comics', 'HomeController@index')->name('index');
    Route::get('create', 'HomeController@create')->name('create');

});

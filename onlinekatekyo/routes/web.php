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

Route::get('/', 'InfomationController@index')->name('infomation.top');
Route::get('/about', 'InfomationController@about')->name('infomation.about');
Route::get('/charmpoint', 'InfomationController@charmpoint')->name('infomation.charmpoint');
Route::get('/list', 'InfomationController@list')->name('infomation.list');
Route::get('/price', 'InfomationController@price')->name('infomation.price');


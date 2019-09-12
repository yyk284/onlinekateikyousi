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

Route::get('/', 'InfomationController@index')->name('infomation.index');
Route::get('/about', 'InfomationController@about')->name('infomation.about');
Route::get('/company', 'InfomationController@company')->name('infomation.company');
Route::get('/finish', 'InfomationController@charmpoint')->name('infomation.finish');
Route::get('/list', 'InfomationController@list')->name('infomation.list');
Route::get('/price', 'InfomationController@price')->name('infomation.price');
Route::get('/access', 'InfomationController@access')->name('infomation.access');
Route::get('/comfirm', 'InfomationController@comfirm')->name('infomation.comfirm');
Route::get('/from', 'InfomationController@form')->name('infomation.form');
Route::get('/charge', 'InfomationController@charge')->name('infomation.charge');
Route::get('/contact', 'InfomationController@contact')->name('infomation.contact');
Route::get('/recruit', 'InfomationController@recruit')->name('infomation.recruit');
Route::get('/faq', 'InfomationController@faq')->name('infomation.faq');
Route::get('/info', 'InfomationController@info')->name('infomation.info');
Route::get('/tutors', 'TutorController@index')->name('tutor.index');







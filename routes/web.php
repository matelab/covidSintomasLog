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
Auth::routes();
Auth::routes(['verify' => true]);

/*Route::get('/', 'HomeController@index')->name('home')->middleware('verified')->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified')->middleware('auth');*/

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/sintomas', 'HistorySymptomController@index')->name('sintomas');
    Route::get('/sintomas/create', 'HistorySymptomController@create')->name('sintomasCreate');
});

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

Auth::routes(['verify' => true]);

Route::get('/', function(){
    if(Auth::check()){
        return view('home');
    }else {
        return view('auth.login');
    }
});

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/tratamientos', 'HistorySymptomController@index')->name('tratamientos');
    Route::get('/sintomas', 'HistorySymptomDetailsController@index')->name('sintomas');
    Route::get('/sintomas/create', 'HistorySymptomDetailsController@create')->name('sintomasCreate');
    Route::post('/sintomas/store', 'HistorySymptomDetailsController@store')->name('sintomasStore');
});

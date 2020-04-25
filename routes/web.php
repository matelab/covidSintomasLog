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
    /**Pagina de Inicio del Sistema */
    Route::get('/home', 'HomeController@index')->name('home');
    /**Pagina del Historial de los Tratamientos */
    Route::get('/tratamientos', 'HistorySymptomController@index')->name('tratamientos');
    /**Finalizar el Tratamiento*/
    Route::post('/tratamientos/{historySymptom}', 'HistorySymptomController@update')->name('tratamientosUpdate');
    /**Pagina del Historial de los Controles Cargados (Sintomas) */
    Route::get('/sintomas', 'HistorySymptomDetailsController@index')->name('sintomas');
    /**Pagina para el Alta de un Control */
    Route::get('/sintomas/create', 'HistorySymptomDetailsController@create')->name('sintomasCreate');
    /**Guardando el Control Cargado */
    Route::post('/sintomas/store', 'HistorySymptomDetailsController@store')->name('sintomasStore');
    /**Pagina para Ver un Control Cargado (Solo del Tratamiento Activo) */
    Route::get('/sintomas/{historySymptomDetail}', 'HistorySymptomDetailsController@show')->name('sintomasShow');
    /**Pagina para Editar un Control Cargado (Solo del Tratamiento Activo) */
    Route::get('/sintomas/{historySymptomDetail}/edit', 'HistorySymptomDetailsController@edit')->name('sintomasEdit');
    /**Guardamos los Datos Editado del Control */
    Route::post('/sintomas/{historySymptomDetail}/edit', 'HistorySymptomDetailsController@update')->name('sintomasUpdate');
    /**Elimina un Control Cargado */
    Route::delete('/sintomas/{historySymptomDetail}', 'HistorySymptomDetailsController@destroy')->name('sintomasDestroy');
});

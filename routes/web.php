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
/**Para Forzar el HTTPS */
URL::forceScheme('https');

Route::get('/', function () {
    return redirect()->route("home");
});

/**Pagina de Inicio del Sistema */
Route::get('/home', 'HomeController@index')->name('home');
/**Permitir logout con petición get */
Route::get("/logout", function () {
    Auth::logout();
    return redirect()->route("home");
})->name("logout");

/**Rutas que que este Verificado el Mail para poder Acceder */
Route::middleware(['auth','verified'])->group(function () {
    /**Pagina del Historial de los Tratamientos */
    Route::get('/tratamientos', 'HistorySymptomController@index')->name('tratamientos');
    /**Finalizar el Tratamiento*/
    Route::post('/tratamientos/{historySymptom}', 'HistorySymptomController@update')->name('tratamientosUpdate');
    /**Pagina del Historial de los Controles Cargados (Síntomas Solo del Tratamiento Finalizado) */
    Route::get('/tratamientos/{historySymptom}', 'HistorySymptomController@show')->name('sintomasFinished');
    /**Pagina del Historial de los Controles Cargados (Síntomas Solo del Tratamiento Finalizado) */
    Route::get('/sintomas', 'HistorySymptomDetailsController@index')->name('sintomas');
    /**Pagina para el Alta de un Control (Solo del Tratamiento Activo)*/
    Route::get('/sintomas/create', 'HistorySymptomDetailsController@create')->name('sintomasCreate');
    /**Guardando el Control Cargado (Solo del Tratamiento Activo)*/
    Route::post('/sintomas/store', 'HistorySymptomDetailsController@store')->name('sintomasStore');
    /**Pagina para Ver un Control Cargado (Solo del Tratamiento Activo) */
    Route::get('/sintomas/{historySymptomDetail}', 'HistorySymptomDetailsController@show')->name('sintomasShow');
    /**Pagina para Ver un Control Cargado (Solo del Tratamiento Activo) */
    Route::get('/sintomas/{historySymptomDetail}/pdf', 'HistorySymptomDetailsController@exportPdf')->name('sintomasExportPdf');
    /**Pagina para Editar un Control Cargado (Solo del Tratamiento Activo) */
    Route::get('/sintomas/{historySymptomDetail}/edit', 'HistorySymptomDetailsController@edit')->name('sintomasEdit');
    /**Guardamos los Datos Editado del Control */
    Route::post('/sintomas/{historySymptomDetail}/edit', 'HistorySymptomDetailsController@update')->name('sintomasUpdate');
    /**Elimina un Control Cargado */
    Route::delete('/sintomas/{historySymptomDetail}', 'HistorySymptomDetailsController@destroy')->name('sintomasDestroy');
});

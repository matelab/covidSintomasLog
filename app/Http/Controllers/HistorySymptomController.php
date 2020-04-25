<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HistorySymptom;
use Carbon\Carbon;

class HistorySymptomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**Obtenemos Todos los Tratamientos del Usuario */
        $historySymptoms = auth()->user()->historySymptoms()->orderBy('created_at','desc')->paginate(15);
        return view('tratamientos.index')->with(compact('historySymptoms'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HistorySymptom  $historySymptoms
     * @return \Illuminate\Http\Response
     */
    public function show(HistorySymptom $historySymptom)
    {
        /**Obtenemos Todo el Historial de los Controles por el ID de Tratamiento Los Finalizados*/
        $symptoms = $historySymptom->historySymptomDetails()->orderBy('created_at','desc')->paginate(10);
        return view('sintomas.indexFinished')->with(compact('symptoms','historySymptom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HistorySymptom  $historySymptom
     * @return \Illuminate\Http\Response
     */
    public function edit(HistorySymptom $historySymptom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HistorySymptom  $historySymptom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorySymptom $historySymptom)
    {
        /**Cambiamos el Estado del Tratamiento */
        $historySymptom->status = 'Finished';
        $historySymptom->finished_date = Carbon::now();
        /**Guardamos los Cambios */
        $historySymptom->save();
        /**Generamos Un Mensaje y Redireccionammos */
        flash('¡Bien Hecho! Finalizaste el Tratamiento.')->success()->important();
        /**Volvemos al Historial de Tratamientos */
        return redirect('/tratamientos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HistorySymptom  $historySymptom
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistorySymptom $historySymptom)
    {
        //
    }
}

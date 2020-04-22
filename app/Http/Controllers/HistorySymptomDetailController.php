<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HistorySymptomDetail;

class HistorySymptomDetailsController extends Controller
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
        /**Obtenemos Todo el Historial de los Controles pero solo del Tratamiento Activo */
        $symptoms = auth()->user()->HistorySymptom->historySymptomDetails()->orderBy('created_at','desc')->paginate(10);
        return view('sintomas.index')->with(compact('symptoms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sintomas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**Validamos los Datos */
        $this->validate($request, HistorySymptomDetail::$rules, HistorySymptomDetail::$messages);

        /**Instanciamos el Modelo de HistorySymptomDetails */
        $historySymptomDetail = New HistorySymptomDetail();
        /**ID del HitorySymptom Activo del Usuario */
        $historySymptomDetail->history_symptom_id = auth()->user()->HistorySymptom->id;//Campo Calculado del ID del HistorySymptom para el usuario solo hay un HistorySymptom activo para cada Usuario
        /**Recibimos los datos*/
         $historySymptomDetail->temperature = $request->input('fiebre');
         $historySymptomDetail->oxygen_saturation = $request->input('saturacion');
         $historySymptomDetail->mood = $request->input('estado');
         $historySymptomDetail->sore_throat = $request->input('garganta');
         $historySymptomDetail->fatigue = $request->input('cansancio');
         $historySymptomDetail->lung_pain = $request->input('pulmon');
         $historySymptomDetail->appetite = $request->input('olfato');
         $historySymptomDetail->smell = $request->input('olfato');
         $historySymptomDetail->will = $request->input('voluntad');
         $historySymptomDetail->cough = $request->input('tos');
         $historySymptomDetail->diarrhea = $request->input('diarrea');
         $historySymptomDetail->changes = $request->input('cambio');
         if ($request->cambio==1) {
            $historySymptomDetail->changes_description = $request->input('textComment');
         }else {
            $historySymptomDetail->changes_description = '';
         }
         $historySymptomDetail->talk_doctor = $request->input('hablar');
         $historySymptomDetail->commentary = $request->input('comentario');
         /**Guardamos Los Datos */
         $historySymptomDetail->save();
         /**Generamos Un Mensaje y Redireccionammos */
         flash('¡Bien Hecho! Se Agrego Correctamente tu Control. Sigue Asi.')->success()->important();
         /**Redireccionamos a la Vista del Historial de Controles */
         return redirect('sintomas/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HistorySymptomDetail  $historySymptomDetail
     * @return \Illuminate\Http\Response
     */
    public function show(HistorySymptomDetail $historySymptomDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HistorySymptomDetail  $historySymptomDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(HistorySymptomDetail  $historySymptomDetail)
    {
        return view('sintomas.edit')->with(compact('historySymptomDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HistorySymptomDetail  $historySymptomDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorySymptomDetail $historySymptomDetail)
    {
        /**Validamos los Datos */
        $this->validate($request, HistorySymptomDetail::$rules, HistorySymptomDetail::$messages);
        /**Actualizamos Los Datos */
        /**Recibimos los datos*/
        $historySymptomDetail->temperature = $request->input('fiebre');
        $historySymptomDetail->oxygen_saturation = $request->input('saturacion');
        $historySymptomDetail->mood = $request->input('estado');
        $historySymptomDetail->sore_throat = $request->input('garganta');
        $historySymptomDetail->fatigue = $request->input('cansancio');
        $historySymptomDetail->lung_pain = $request->input('pulmon');
        $historySymptomDetail->appetite = $request->input('olfato');
        $historySymptomDetail->smell = $request->input('olfato');
        $historySymptomDetail->will = $request->input('voluntad');
        $historySymptomDetail->cough = $request->input('tos');
        $historySymptomDetail->diarrhea = $request->input('diarrea');
        if ($request->cambio==1) {
            $historySymptomDetail->changes_description = $request->input('textComment');
         }else {
            $historySymptomDetail->changes_description = '';
         }
        $historySymptomDetail->talk_doctor = $request->input('hablar');
        $historySymptomDetail->commentary = $request->input('comentario');
        /**Guardamos Los Datos */
        $historySymptomDetail->save();
        /**Generamos Un Mensaje y Redireccionammos */
        flash('¡Bien Hecho! Se Edito Correctamente tu Control.')->success()->important();
        /**Redireccionamos a la Vista del Historial de Controles */
        return redirect('sintomas/');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HistorySymptomDetail  $historySymptomDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistorySymptomDetail $historySymptomDetail)
    {
        $historySymptomDetail->delete();
        /**Generamos Un Mensaje y Redireccionammos */
        flash('¡Bien Hecho! Se Elimino Correctamente tu Control.')->success()->important();
        /**Redireccionamos a la Vista del Historial de Controles */
        return back();
    }
}

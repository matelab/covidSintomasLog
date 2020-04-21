<?php

namespace App\Http\Controllers;

use App\HistorySymptomDetail;
use Illuminate\Http\Request;

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
        /**Validaciones y mensajes personalizados*/
        $messages = [
            'fiebre.required'=>'Es Obligatorio Seleccionar una Temperatura.',
            'fiebre.min'=>'Valor no Permitido de Temperatura',
            'fiebre.max'=>'Valor no Permitido de Temperatura',
            'saturacion'=>'Es Obligatorio Seleccionar un Nivel de Saturación de oxigeno.',
            'saturacion.min'=>'Valor no Permitido para Nivel de Saturación de oxigeno.',
            'saturacion.max'=>'Valor no Permitido para Nivel de Saturación de oxigeno.',
            'estado'=>'Es Obligatorio Seleccionar un Valor para Estado de Animo.',
            'estado.min'=>'Valor no Permitido para Estado de Animo.',
            'estado.max'=>'Valor no Permitido para Estado de Animo.',
            'garganta'=>'Es Obligatorio Seleccionar un Valor para Dolor de Garganta.',
            'garganta.min'=>'Valor no Permitido para Dolor de Garganta.',
            'garganta.max'=>'Valor no Permitido para Dolor de Garganta.',
            'cansancio'=>'Es Obligatorio Seleccionar un Valor para Nivel de Cansancio.',
            'cansancio.min'=>'Valor no Permitido para Nivel de Cansancio.',
            'cansancio.max'=>'Valor no Permitido para Nivel de Cansancio.',
            'pulmon'=>'Es Obligatorio Seleccionar un Valor para Dolor de Pulmón.',
            'pulmon.min'=>'Valor no Permitido para Dolor de Pulmón.',
            'pulmon.max'=>'Valor no Permitido para Dolor de Pulmón.',
            'apetito'=>'Es Obligatorio Seleccionar un Valor para Nivel de Apetito.',
            'apetito.min'=>'Valor no Permitido para Nivel de Apetito.',
            'apetito.max'=>'Valor no Permitido para Nivel de Apetito.',
            'olfato'=>'Es Obligatorio Seleccionar un Valor para Nivel de Olfato.',
            'olfato,min'=>'Valor no Permitido para Nivel de Olfato.',
            'olfato.max'=>'Valor no Permitido para Nivel de Olfato.',
            'voluntad'=>'Es Obligatorio Seleccionar un Valor para Tus Ganas de Ganar.',
            'voluntad.min'=>'Valor no Permitido para Tus Ganas de Ganar.',
            'voluntad.max'=>'Valor no Permitido para Tus Ganas de Ganar.',
            'tos'=>'Es Obligatorio Seleccionar un Valor para Nivel de Tos.',
            'tos.min'=>'Valor no Permitido para Nivel de Tos.',
            'tos.max'=>'Valor no Permitido para Nivel de Tos.',
            'diarrea'=>'Es Obligatorio Seleccionar un Valor para Nivel de Diarrea.',
            'diarrea.min'=>'Valor no Permitido para Nivel de Diarrea.',
            'diarrea.max'=>'Valor no Permitido para Nivel de Diarrea.',
            'textComment.max'=>'Excediste el Máximo de Caracteres en la Descripción de tus Cambios. Máximo 300.',
            'comentario.max'=>'Excediste el Máximo de Caracteres en tu Comentario. Máximo 300.',
        ];

        $rules = [
                'fiebre' => 'required|numeric|min:36|max:39.1',
                'saturacion'=>'required|numeric|min:32|max:100',
                'estado'=>'required|numeric|min:1|max:10',
                'garganta'=>'required|numeric|min:1|max:10',
                'cansancio'=>'required|numeric|min:1|max:10',
                'pulmon'=>'required|numeric|min:1|max:10',
                'apetito'=>'required|numeric|min:1|max:10',
                'olfato'=>'required|numeric|min:1|max:10',
                'voluntad'=>'required|numeric|min:1|max:10',
                'tos'=>'required|numeric|min:1|max:10',
                'diarrea'=>'required|numeric|min:1|max:10',
                'textComment'=>'max:300',
                'comentario'=>'max:300',
            ];
        $this->validate($request, $rules, $messages);

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
         $historySymptomDetail->changes = $request->input('textComment');
         $historySymptomDetail->talk_doctor = $request->input('hablar');
         $historySymptomDetail->commentary = $request->input('comentario');
         /**Guardamos Los Datos */
         $historySymptomDetail->save();
         /**Generamos Un Mensaje y Redireccionammos */
         flash('¡Bien Hecho! Se Agrego Correctamente tu Control. Sigue Asi.')->success()->important();
         return redirect('sintomas/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HistorySymptom  $historySymptom
     * @return \Illuminate\Http\Response
     */
    public function show(HistorySymptom $historySymptom)
    {
        //
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
        //
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

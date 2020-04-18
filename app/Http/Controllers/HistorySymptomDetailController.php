<?php

namespace App\Http\Controllers;

use App\HistorySymptomDetails;
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
        $symptoms = auth()->user()->HistorySymptom->historySymptomDetails()->paginate(15);
        return view('sintomas.index')->with(compact('symptoms'));
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

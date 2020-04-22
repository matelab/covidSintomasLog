<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorySymptomDetail extends Model
{
    /**Validaciones y mensajes personalizados*/
    public static $messages = [
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

    public static $rules = [
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
}

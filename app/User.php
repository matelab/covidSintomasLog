<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**Método para la relación entre el Modelo User y HistorySymptom */
    public function historySymptoms()
    {
        /**Un Usuario Muchos historySymptoms */
        return $this->hasMany(HistorySymptom::class);
    }
    /**Metodo para el history_symptom_id del usuario */
    public function getHistorySymptomAttribute()
    {
        /**Accedemos al HistorySymptom con el Estado Active solo la Primer Coincidencia*/
        $historySymptom = $this->historySymptoms()->where('status','Active')->first();
        /**Si tiene un HistorySymptom Activo devolvemos el ID */
        if ($historySymptom) {
            return $historySymptom;
        }else {
            /**Si no tiene ningún HistorySymptom activo lo creamos uno */
            $historySymptom = New HistorySymptom();
            $historySymptom->status = 'Active';
            $historySymptom->user_id = $this->id;
            $historySymptom->save();
            return $historySymptom;
        }

    }
}

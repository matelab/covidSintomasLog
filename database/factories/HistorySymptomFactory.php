<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\HistorySymptom;
use App\User;

$factory->define(HistorySymptom::class, function (Faker $faker) {
    /**Obtenemos Todos los Usuarios */
    $user=User::all();
    return [

            'status'=>'Active',
            /**Relacionamos el Primer Usuario de la Lista Con el Historial */
            'user_id'=>$user->first()->id,
    ];
});

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
            'temperature'=> $faker->randomFloat(2,1,50),
            'oxygen_saturation'=>$faker->randomFloat(2,1,50),
            'heart_rate'=>$faker->numberBetween(1,5),
            'mood'=>$faker->numberBetween(1,5),
            'sore_throat'=>$faker->numberBetween(1,5),
            'fatigue'=>$faker->numberBetween(1,5),
            'lung_pain'=>$faker->numberBetween(1,5),
            'smell'=>$faker->numberBetween(1,5),
            'cough'=>$faker->numberBetween(1,5),
            'changes'=>$faker->text,
            'talk_doctor'=>$faker->text,
            'created_at'=>$faker->dateTime(),
            /**Relacionamos el Primer Usuario de la Lista Con el Historial */
            'user_id'=>$user->first()->id,
    ];
});

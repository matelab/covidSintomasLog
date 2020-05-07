<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\HistorySymptomDetail;
use App\HistorySymptom;

$factory->define(HistorySymptomDetail::class, function (Faker $faker) {
    /**Obtenemos Todos los Usuarios */
    $historySymptom=HistorySymptom::all();
    return [

            /**Relacionamos el Primer Usuario de la Lista Con el Historial */
            'history_symptom_id'=>$historySymptom->first()->id,
            'temperature'=> $faker->randomFloat(2,1,50),
            'oxygen_saturation'=>$faker->randomFloat(2,1,50),
            'mood'=>$faker->numberBetween(0,10),
            'sore_throat'=>$faker->numberBetween(0,10),
            'fatigue'=>$faker->numberBetween(1,5),
            'lung_pain'=>$faker->numberBetween(1,5),
            'appetite'=>$faker->numberBetween(1,5),
            'smell'=>$faker->numberBetween(1,5),
            'will'=>$faker->numberBetween(1,5),
            'cough'=>$faker->numberBetween(1,5),
            'diarrhea'=>$faker->numberBetween(1,5),
            'changes_description'=>$faker->text,
            'commentary'=>$faker->text,
            'created_at'=>$faker->dateTime()
    ];
});

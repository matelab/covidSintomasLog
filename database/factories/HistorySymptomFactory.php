<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\HistorySymptom;

$factory->define(HistorySymptom::class, function (Faker $faker) {
    return [

            'temperature'=> $faker->randomNumber(5),
            'oxygen_saturation'=>$faker->randomNumber(5),
            'heart_rate'=>$faker->randomNumber(5),
            'mood'=>$faker->randomNumber(5),
            'sore_throat'=>$faker->randomNumber(5),
            'fatigue'=>$faker->randomNumber(5),
            'lung_pain'=>$faker->randomNumber(5),
            'smell'=>$faker->randomNumber(5),
            'cough'=>$faker->randomNumber(5),
            'changes'=>$faker->text,
            'talk_doctor'=>$faker->text,
            'created_at'=>$faker->dateTime(),
            'user_id'=>1
    ];
});

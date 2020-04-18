<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorySymptomsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_symptoms_details', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->float('temperature');
            $table->float('oxygen_saturation');
            $table->integer('heart_rate');
            $table->integer('mood');
            $table->integer('sore_throat');
            $table->integer('fatigue');
            $table->integer('lung_pain');
            $table->integer('smell');
            $table->integer('cough');
            $table->text('changes')->nullable();
            $table->text('talk_doctor')->nullable();

            //FK user_id->Personas o Usuarios
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_symptoms_details');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorySymptomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_symptom_details', function (Blueprint $table) {
            $table->bigIncrements('id');

            //FK Historial de Síntomas (Tratamientos Activos) a Detalle del Historial de Síntomas
            $table->unsignedBigInteger('history_symptom_id');
            $table->foreign('history_symptom_id')->references('id')->on('history_symptoms');

            $table->float('temperature');
            $table->float('oxygen_saturation')->nullable();
            $table->integer('mood');
            $table->integer('sore_throat');
            $table->integer('fatigue');
            $table->integer('lung_pain');
            $table->integer('appetite');
            $table->integer('smell');
            $table->integer('will');
            $table->integer('cough');
            $table->integer('diarrhea');
            $table->boolean('changes')->nullable()->default(false);
            $table->text('changes_description')->nullable();
            $table->boolean('talk_doctor')->nullable()->default(false);
            $table->text('commentary')->nullable();

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
        Schema::dropIfExists('history_symptom_details');
    }
}

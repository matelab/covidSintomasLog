<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorySymptomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_symptoms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->date('finished_date')->nullable();//fecha para cuando finalizo el tratamiento
            $table->string('status');//Active(cuando esta en el tratamiento), Finished(cuando Termino el Tratameinto)

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
        Schema::dropIfExists('history_symptoms');
    }
}

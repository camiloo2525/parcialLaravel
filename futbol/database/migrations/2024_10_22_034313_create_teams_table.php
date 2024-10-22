<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('nombreEstadio');
            $table->integer('capacidadEstadio');
            $table->string('entrenador');
            $table->string('patrocinador');
            $table->string('equipoRival');
            $table->date('añoFundacion');
            $table->integer('titulos');
            $table->text('historia');
            $table->date('proximoPartido')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Asegúrate de que sea correcto
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
        Schema::dropIfExists('teams');
    }
}




<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->id();

            $table->string('pais', 255);
            $table->string('estado', 255);
            $table->string('municipio', 255);
            $table->string('localidad', 255);
            $table->string('codigo_postal', 255);
            $table->string('calle', 255);
            $table->integer('num_ext');
            $table->integer('num_int');

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
        Schema::dropIfExists('directions');
    }
}

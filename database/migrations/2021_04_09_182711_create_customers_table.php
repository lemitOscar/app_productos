<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 255);
            $table->string('email', 255);
            $table->string('telefono', 255);

            $table->string('pais', 255);
            $table->string('municipio', 255);
            $table->string('localidad', 255);
            $table->string('codigo_postal', 255);
            $table->string('calle', 255)->nullable();
            $table->integer('num_ext')->nullable();
            $table->integer('num_int')->nullable();

            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id')
                ->references('id')
                ->on('states')
                ->onDelete('set null');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

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
        Schema::dropIfExists('customers');
    }
}

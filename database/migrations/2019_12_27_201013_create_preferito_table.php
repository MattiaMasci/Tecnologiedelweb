<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferitoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferito', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('utente_id');
            $table->foreign('utente_id')->references('id')->on('utente');
            $table->unsignedBigInteger('modello_id');
            $table->foreign('modello_id')->references('id')->on('modello');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preferito');
    }
}

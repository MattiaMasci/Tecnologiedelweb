<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordine', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('utente_id');
            $table->foreign('utente_id')->references('id')->on('utente');
            $table->unsignedBigInteger('modello_id');
            $table->foreign('modello_id')->references('id')->on('modello');
            $table->unsignedBigInteger('taglia_id');
            $table->foreign('taglia_id')->references('id')->on('taglia');
            $table->unsignedBigInteger('colore_id');
            $table->foreign('colore_id')->references('id')->on('colore');
            $table->integer('quantita');
            $table->date('dataordine');
            $table->date('dataaccettazione');
            $table->date('dataspedizione');
            $table->date('dataarrivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordine');
    }
}

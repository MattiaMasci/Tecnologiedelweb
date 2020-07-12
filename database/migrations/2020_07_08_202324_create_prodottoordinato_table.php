<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdottoordinatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodottoordinato', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->integer('modello_id');
            $table->unsignedBigInteger('ordine_id');
            $table->foreign('ordine_id')->references('id')->on('ordine');
            $table->integer('taglia_id');
            $table->integer('colore_id');
            $table->integer('quantita');
            $table->float('prezzo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodottoordinato');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfiloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cittaspedizione', 20);
            $table->string('viaspedizione', 20);
            $table->string('numerocspedizione', 20);
            $table->string('capspedizione', 20);
            $table->string('cittafatturazione', 20);
            $table->string('viafatturazione', 20);
            $table->string('numerocfatturazione', 20);
            $table->string('capfatturazione', 20);
            $table->unsignedBigInteger('utente_id');
            $table->foreign('utente_id')->references('id')->on('utente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profilo');
    }
}

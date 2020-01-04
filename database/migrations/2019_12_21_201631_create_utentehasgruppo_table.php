<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtentehasgruppoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utentehasgruppo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('utente_id');
            $table->foreign('utente_id')->references('id')->on('utente');
            $table->unsignedBigInteger('gruppo_id');
            $table->foreign('gruppo_id')->references('id')->on('gruppo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utentehasgruppo');
    }
}

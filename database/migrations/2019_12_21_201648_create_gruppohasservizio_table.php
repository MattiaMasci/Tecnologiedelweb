<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruppohasservizioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gruppohasservizio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('gruppo_id');
            $table->foreign('gruppo_id')->references('id')->on('gruppo');
            $table->unsignedBigInteger('servizio_id');
            $table->foreign('servizio_id')->references('id')->on('servizio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gruppohasservizio');
    }
}

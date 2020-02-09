<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('modello_id');
            $table->foreign('modello_id')->references('id')->on('modello');
            $table->unsignedBigInteger('taglia_id');
            $table->foreign('taglia_id')->references('id')->on('taglia');
            $table->unsignedBigInteger('colore_id');
            $table->foreign('colore_id')->references('id')->on('colore');
            $table->integer('quantita');
            $table->date('datarichiesta');
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
        Schema::dropIfExists('reso');
    }
}

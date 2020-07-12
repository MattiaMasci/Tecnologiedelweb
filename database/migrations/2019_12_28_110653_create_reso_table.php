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
            $table->integer('users_id');
            $table->integer('modello_id');
            $table->integer('taglia_id');
            $table->integer('colore_id');
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

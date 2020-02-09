<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerehasmodelloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generehasmodello', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('prezzo');
            $table->unsignedBigInteger('genere_id');
            $table->foreign('genere_id')->references('id')->on('genere');
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
        Schema::dropIfExists('generehasmodello');
    }
}

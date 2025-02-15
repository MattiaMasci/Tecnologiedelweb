<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modello', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',65);
            $table->text('descrizione');
            //$table->text('descrizione1');
            $table->date('datauscita');
            $table->float('mediavoto')->nullable();
            $table->integer('collezione_id');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modello');
    }
}

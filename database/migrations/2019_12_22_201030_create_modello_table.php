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
            $table->string('nome',30);
            $table->text('descrizione');
            $table->text('descrizione1');
            $table->date('datauscita');
            $table->float('mediavoto')->nullable();
            $table->unsignedBigInteger('collezione_id');
            $table->foreign('collezione_id')->references('id')->on('collezione');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marca');
            $table->unsignedBigInteger('stile_id');
            $table->foreign('stile_id')->references('id')->on('stile');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModellohasmaterialeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modellohasmateriale', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('modello_id');
            $table->foreign('modello_id')->references('id')->on('modello');
            $table->unsignedBigInteger('materiale_id');
            $table->foreign('materiale_id')->references('id')->on('materiale');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modellohasmateriale');
    }
}

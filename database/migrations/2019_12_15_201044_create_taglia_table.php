<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagliaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taglia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero', 5);
            $table->unsignedBigInteger('fasciadeta_id');
            $table->foreign('fasciadeta_id')->references('id')->on('fasciadeta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taglia');
    }
}

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
            $table->string('cittaspedizione', 40);
            $table->string('viaspedizione', 40);
            $table->string('numerocspedizione', 40);
            $table->string('capspedizione', 40);
            $table->string('cittafatturazione', 40);
            $table->string('viafatturazione', 40);
            $table->string('numerocfatturazione', 40);
            $table->string('capfatturazione', 40);
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
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

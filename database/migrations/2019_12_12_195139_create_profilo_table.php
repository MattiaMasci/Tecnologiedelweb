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
            $table->date('datanascita')->nullable();
            $table->string('nomefatturazione', 40)->nullable();
            $table->string('cognomefatturazione', 40)->nullable();
            $table->string('aziendafatturazione', 40)->nullable();
            $table->string('emailfatturazione', 40)->nullable();
            $table->string('telefonofatturazione', 40)->nullable();
            $table->string('indirizzofatturazione', 40)->nullable();
            $table->string('nazionefatturazione', 40)->nullable();
            $table->string('abitazionefatturazione', 40)->nullable();
            $table->string('cittafatturazione', 40)->nullable();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altre', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->binary('data');
            $table->string('tipo');
            $table->integer('posizione');
            $table->unsignedBigInteger('foto_id');
            $table->foreign('foto_id')->references('id')->on('foto');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE altre ADD data  MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('altre');
    }
}

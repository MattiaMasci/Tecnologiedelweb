<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 20);
            $table->string('reference', 20);
            $table->tinyInteger('top');
            $table->string('sesso')->nullable();
            $table->tinyInteger('stato');
            //$table->binary('foto')->nullable();
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE marca ADD foto  LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marca');
    }
}

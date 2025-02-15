<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotositoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotosito', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pagina');
            $table->integer('categoria_id')->nullable();
            $table->integer('genere_id')->nullable();
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE fotosito ADD data  LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotosito');
    }
}

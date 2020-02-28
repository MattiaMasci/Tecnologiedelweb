<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string( 'name' );
            $table->string( 'url' );
            $table->integer( 'parent_id' )->default(0);
            $table->text( 'description' );
            $table->tinyInteger( 'status' )->default(1);
            $table->rememberToken();
            $table->timestamps();
            /* $table->unsignedBigInteger('macrocategoria_id');
            $table->foreign('macrocategoria_id')->references('id')->on('macrocategoria'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria');
    }
}

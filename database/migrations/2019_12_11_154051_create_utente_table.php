<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utente', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string( 'nome', 20 );
            $table->string( 'cognome', 20 );
            $table->string( 'username', 20 );
            $table->string( 'password', 500 );
            $table->string( 'email', 30 )->unique();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utente');
    }
}

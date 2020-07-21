<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordine', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('users_id');
            $table->string('pagamento');
            $table->float('totale');
            $table->date('dataordine');
            $table->date('dataaccettazione');
            $table->date('dataspedizione');
            $table->date('dataarrivo');
            $table->string('nomefatturazione', 40)->nullable();
            $table->string('cognomefatturazione', 40)->nullable();
            $table->string('aziendafatturazione', 40)->nullable();
            $table->string('emailfatturazione', 40)->nullable();
            $table->string('telefonofatturazione', 40)->nullable();
            $table->string('indirizzofatturazione', 40)->nullable();
            $table->string('nazionefatturazione', 40)->nullable();
            $table->string('abitazionefatturazione', 40)->nullable();
            $table->string('cittafatturazione', 40)->nullable();
            $table->string('nomespedizione', 40)->nullable();
            $table->string('cognomespedizione', 40)->nullable();
            $table->string('aziendaspedizione', 40)->nullable();
            $table->string('emailspedizione', 40)->nullable();
            $table->string('telefonospedizione', 40)->nullable();
            $table->string('indirizzospedizione', 40)->nullable();
            $table->string('nazionespedizione', 40)->nullable();
            $table->string('abitazionespedizione', 40)->nullable();
            $table->string('cittaspedizione', 40)->nullable();
            $table->string('notespedizione', 40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordine');
    }
}

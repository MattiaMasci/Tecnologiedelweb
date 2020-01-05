<?php

use Illuminate\Database\Seeder;

class RecensioneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('recensione')->delete();

        DB::table('gruppo')->insert([
            'voto' => '',
            'descrizione' => '',
            'utente_id' => '',
            'modello_id' => ''
        ]);
    }
}

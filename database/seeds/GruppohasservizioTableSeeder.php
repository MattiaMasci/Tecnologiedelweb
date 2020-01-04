<?php

use Illuminate\Database\Seeder;

class GruppohasservizioTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('gruppohasservizio')->delete();

        DB::table('gruppohasservizio')->insert([
            'utente_id' => '',
            'servizio_id' => ''
        ]);
    }

}

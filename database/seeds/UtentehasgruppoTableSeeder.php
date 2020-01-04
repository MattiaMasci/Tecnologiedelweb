<?php

use Illuminate\Database\Seeder;

class UtentehasgruppoTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('utentehasgruppo')->delete();

        DB::table('utentehasgruppo')->insert([
            'utente_id' => '',
            'gruppo_id' => ''
        ]);
    }

}

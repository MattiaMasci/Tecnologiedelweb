<?php

use Illuminate\Database\Seeder;

class UtentehasgruppoTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('utentehasgruppo')->delete();

        DB::table('utentehasgruppo')->insert([
            [
                'utente_id' => '1',
                'gruppo_id' => '1'
            ],
            [
                'utente_id' => '1',
                'gruppo_id' => '2'
            ],
            [
                'utente_id' => '2',
                'gruppo_id' => '1'
            ],
            [
                'utente_id' => '2',
                'gruppo_id' => '2'
            ],
            [
                'utente_id' => '3',
                'gruppo_id' => '1'
            ],
            [
                'utente_id' => '3',
                'gruppo_id' => '2'
            ],
        ]);
    }

}

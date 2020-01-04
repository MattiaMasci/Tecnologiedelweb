<?php

use Illuminate\Database\Seeder;

class PreferitoTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('preferito')->delete();

        DB::table('preferito')->insert([
            'utente_id' => '',
            'modello_id' => ''
        ]);
    }

}

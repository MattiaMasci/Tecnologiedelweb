<?php

use Illuminate\Database\Seeder;

class ServizioTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('servizio')->delete();

        DB::table('servizio')->insert([
            [
                'tipo' => 'Amministrazione'
            ],
            [
                'tipo' => 'Utilizzo'
            ],
        ]);
    }

}

<?php

use Illuminate\Database\Seeder;

class QuantitaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('quantita')->delete();

        DB::table('quantita')->insert([
            'modello_id' => '',
            'taglia_id' => '',
            'colore_id' => '',
            'quantita' => ''
        ]);
    }

}

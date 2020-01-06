<?php

use Illuminate\Database\Seeder;

class QuantitaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('quantita')->delete();

        DB::table('quantita')->insert([
            [
                'modello_id' => '1',
                'taglia_id' => '5',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '2',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '15'
            ],
            [
                'modello_id' => '3',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '5'
            ],
            [
                'modello_id' => '4',
                'taglia_id' => '6',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            [
                'modello_id' => '5',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '13'
            ],
        ]);
    }

}

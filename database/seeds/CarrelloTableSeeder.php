<?php

use Illuminate\Database\Seeder;

class CarrelloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('carrello')->delete();

        DB::table('carrello')->insert([
            [
                'users_id' => '1',
                'modello_id' => '2',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '1'
            ],
            [
                'users_id' => '1',
                'modello_id' => '5',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '1'
            ],
            [
                'users_id' => '2',
                'modello_id' => '2',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '1'
            ],
        ]);

    }

}

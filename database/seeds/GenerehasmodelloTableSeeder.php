<?php

use Illuminate\Database\Seeder;

class GenerehasmodelloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('generehasmodello')->delete();

        DB::table('generehasmodello')->insert([
            [
                'genere_id' => '1',
                'modello_id' => '2',
                'prezzo' => '13.99'
            ],
            [
                'genere_id' => '2',
                'modello_id' => '2',
                'prezzo' => '21.99'
            ],
            [
                'genere_id' => '3',
                'modello_id' => '2',
                'prezzo' => '26.99'
            ],
            [
                'genere_id' => '4',
                'modello_id' => '2',
                'prezzo' => '35.99'
            ],
            [
                'genere_id' => '1',
                'modello_id' => '5',
                'prezzo' => '13.99'
            ],
            [
                'genere_id' => '2',
                'modello_id' => '5',
                'prezzo' => '21.99'
            ],
            [
                'genere_id' => '3',
                'modello_id' => '5',
                'prezzo' => '26.99'
            ],
            [
                'genere_id' => '4',
                'modello_id' => '5',
                'prezzo' => '35.99'
            ],
        ]);
    }

}

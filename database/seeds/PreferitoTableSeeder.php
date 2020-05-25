<?php

use Illuminate\Database\Seeder;

class PreferitoTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('preferito')->delete();

        DB::table('preferito')->insert([
            [
                'users_id' => '1',
                'modello_id' => '2',
                'genere_id' => '1'
            ],
            [
                'users_id' => '1',
                'modello_id' => '5',
                'genere_id' => '1'
            ],
            [
                'users_id' => '2',
                'modello_id' => '2',
                'genere_id' => '1'
            ],
            [
                'users_id' => '2',
                'modello_id' => '5',
                'genere_id' => '1'
            ]
        ]);
    }

}

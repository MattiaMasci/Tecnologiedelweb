<?php

use Illuminate\Database\Seeder;

class RecensioneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('recensione')->delete();

        DB::table('recensione')->insert([
            [
                'voto' => '3',
                'descrizione' => 'Comode e resistenti',
                'data' => '2020-01-03',
                'users_id' => '1',
                'modello_id' => '1'
            ],
            [
                'voto' => '5',
                'descrizione' => 'La qualità fa la differenza',
                'data' => '2020-01-05',
                'users_id' => '3',
                'modello_id' => '5'
            ],
        ]);
    }
}

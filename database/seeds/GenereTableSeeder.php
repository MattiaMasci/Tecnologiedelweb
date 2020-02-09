<?php

use Illuminate\Database\Seeder;

class GenereTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('genere')->delete();

        DB::table('genere')->insert([
            [
                'tipo' => 'Uomo'
            ],
            [
                'tipo' => 'Donna'
            ],
            [
                'tipo' => 'Bambino'
            ],
            [
                'tipo' => 'Bambina'
            ],
        ]);
    }

}

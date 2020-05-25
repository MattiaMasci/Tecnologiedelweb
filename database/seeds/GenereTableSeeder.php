<?php

use Illuminate\Database\Seeder;

class GenereTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('genere')->delete();

        DB::table('genere')->insert([
            [
                'tipo' => 'Uomo',
                'reference' => 'uomo'
            ],
            [
                'tipo' => 'Donna',
                'reference' => 'donna'
            ],
            [
                'tipo' => 'Bambino',
                'reference' => 'bambino'
            ],
            [
                'tipo' => 'Bambina',
                'reference' => 'bambina'
            ],
        ]);
    }

}

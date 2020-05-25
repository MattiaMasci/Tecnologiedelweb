<?php

use Illuminate\Database\Seeder;

class ColoreTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('colore')->delete();

        DB::table('colore')->insert([
            [
                'nome' => 'Multicolor'
            ],
            [
                'nome' => 'Blue'
            ],
            [
                'nome' => 'Yellow'
            ],
            [
                'nome' => 'Green'
            ],
            [
                'nome' => 'Red'
            ],
            [
                'nome' => 'Pink'
            ],
            [
                'nome' => 'Purple'
            ],
            [
                'nome' => 'Orange'
            ],
            [
                'nome' => 'Gray'
            ],
            [
                'nome' => 'Black'
            ],
            [
                'nome' => 'White'
            ],
            [
                'nome' => 'Cyan'
            ],
            [
                'nome' => 'Olive'
            ],
            [
                'nome' => 'Orchid'
            ]
        ]);
    }

}

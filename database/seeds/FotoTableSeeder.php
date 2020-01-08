<?php

use Illuminate\Database\Seeder;

class FotoTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('foto')->delete();

        DB::table('foto')->insert([
            [
                'modello_id' => '1',
                'link' => 'localhost\Tecnologiedelweb\database\foto\airmax'
            ],
            [
                'modello_id' => '2',
                'link' => 'localhost\Tecnologiedelweb\database\foto\polo'
            ],
            [
                'modello_id' => '5',
                'link' => 'localhost\Tecnologiedelweb\database\foto\woolrich'
            ],
            [
                'modello_id' => '3',
                'link' => 'localhost\Tecnologiedelweb\database\foto\jeans'
            ],
        ]);
    }

}

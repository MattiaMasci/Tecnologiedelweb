<?php

use Illuminate\Database\Seeder;

class ProfiloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('profilo')->delete();

        DB::table('profilo')->insert([
            [
                'users_id' => '1',
                'cittaspedizione' => 'Capistrello',
                'viaspedizione' => 'Via regina margherita',
                'numerocspedizione' => '36',
                'capspedizione' => '67053',
                'cittafatturazione' => 'Capistrello',
                'viafatturazione' => 'Via regina margherita',
                'numerocfatturazione' => '36',
                'capfatturazione' => '67053'
            ],
            [
                'users_id' => '2',
                'cittaspedizione' => 'Avezzano',
                'viaspedizione' => 'Via Roma',
                'numerocspedizione' => '125',
                'capspedizione' => '67035',
                'cittafatturazione' => 'Capistrello',
                'viafatturazione' => 'Via verdi',
                'numerocfatturazione' => '38',
                'capfatturazione' => '67053'
            ],
            [
                'users_id' => '3',
                'cittaspedizione' => 'Roma',
                'viaspedizione' => 'Via eur',
                'numerocspedizione' => '26',
                'capspedizione' => '67045',
                'cittafatturazione' => 'Avezzano',
                'viafatturazione' => 'Via xx settembre',
                'numerocfatturazione' => '75',
                'capfatturazione' => '67035'
            ],
        ]);
    }

}

<?php

use Illuminate\Database\Seeder;

class GruppohasservizioTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('gruppohasservizio')->delete();

        DB::table('gruppohasservizio')->insert([
            [
                'gruppo_id' => '1',
                'servizio_id' => '1'
            ],
            [
                'gruppo_id' => '2',
                'servizio_id' => '2'
            ],
        ]);
    }

}

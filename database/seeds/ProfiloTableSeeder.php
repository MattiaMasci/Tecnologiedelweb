<?php

use Illuminate\Database\Seeder;

class ProfiloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('profilo')->delete();

        DB::table('profilo')->insert([
            'utente_id' => '',
            'cittaspedizione' => '',
            'viaspedizione' => '',
            'numerocspedizione' => '',
            'capspedizione' => '',
            'cittafatturazione' => '',
            'viafatturazione' => '',
            'numerocfatturazione' => '',
            'capfatturazione' => ''
        ]);
    }

}

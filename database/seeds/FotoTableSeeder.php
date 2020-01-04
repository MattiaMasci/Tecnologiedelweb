<?php

use Illuminate\Database\Seeder;

class FotoTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('foto')->delete();

        DB::table('foto')->insert([
            'modello_id' => ''
        ]);
    }

}

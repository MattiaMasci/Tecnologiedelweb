<?php

use Illuminate\Database\Seeder;

class SessohasmodelloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('sessohasmodello')->delete();

        DB::table('sessohasmodello')->insert([
            'sesso_id' => '',
            'modello_id' => ''
        ]);
    }

}

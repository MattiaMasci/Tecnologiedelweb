<?php

use Illuminate\Database\Seeder;

class SessohasmodelloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('sessohasmodello')->delete();

        DB::table('sessohasmodello')->insert([
            [
                'sesso_id' => '1',
                'modello_id' => '1'
            ],
            [
                'sesso_id' => '1',
                'modello_id' => '2'
            ],
            [
                'sesso_id' => '1',
                'modello_id' => '3'
            ],
            [
                'sesso_id' => '1',
                'modello_id' => '4'
            ],
            [
                'sesso_id' => '1',
                'modello_id' => '5'
            ],
        ]);
    }

}

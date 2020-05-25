<?php

use Illuminate\Database\Seeder;

class CollezioneTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('collezione')->delete();

        DB::table('collezione')->insert([
            [
                'nome' => 'Nessuna Collezione',
                'reference' => 'NessunaCollezione',
                'stato' => '0',
                'foto' => ''
            ],
            [
                'nome' => 'Collezione Uomo',
                'reference' => 'CollezioneUomo',
                'stato' => '1',
                'foto' => ''
            ],
            [
                'nome' => 'Collezione Donna',
                'reference' => 'CollezioneDonna',
                'stato' => '1',
                'foto' => ''
            ]
        ]);
    }

}

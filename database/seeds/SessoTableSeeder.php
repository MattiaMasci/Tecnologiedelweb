<?php

use Illuminate\Database\Seeder;

class SessoTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('sesso')->delete();

        DB::table('sesso')->insert([
            [
                'genere' => 'Maschio'
            ],
            [
                'genere' => 'Femmina'
            ],
        ]);
    }

}

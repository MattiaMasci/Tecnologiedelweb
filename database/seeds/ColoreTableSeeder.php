<?php

use Illuminate\Database\Seeder;

class ColoreTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('colore')->delete();

        DB::table('colore')->insert([
            'nome' => ''
        ]);
    }

}

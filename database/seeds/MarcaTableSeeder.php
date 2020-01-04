<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('marca')->delete();

        DB::table('marca')->insert([
            'nome' => ''
        ]);
    }

}

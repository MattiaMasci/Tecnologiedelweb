<?php

use Illuminate\Database\Seeder;

class CarrelloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('carrello')->delete();

        DB::table('carrello')->insert([
        ]);

    }

}

<?php

use Illuminate\Database\Seeder;

class OrdineTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('ordine')->delete();

        DB::table('ordine')->insert([
        ]);
    }

}

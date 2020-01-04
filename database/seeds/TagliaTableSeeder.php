<?php

use Illuminate\Database\Seeder;

class TagliaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('taglia')->delete();

        DB::table('taglia')->insert([
            'numero' => '',
            'fasciadeta_id' => ''
        ]);
    }

}

<?php

use Illuminate\Database\Seeder;

class ModellohasmaterialeTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('modellohasmateriale')->delete();

        DB::table('modellohasmateriale')->insert([
            'modello_id' => '',
            'materiale_id' => ''
        ]);
    }

}

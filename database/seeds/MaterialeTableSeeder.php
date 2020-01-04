<?php

use Illuminate\Database\Seeder;

class MaterialeTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('materiale')->delete();

        DB::table('materiale')->insert([
            'tipo' => ''
        ]);
    }

}

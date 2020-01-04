<?php

use Illuminate\Database\Seeder;

class FasciadetaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('fasciadeta')->delete();

        DB::table('fasciadeta')->insert([
            'range' => ''
        ]);
    }

}

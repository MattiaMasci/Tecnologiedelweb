<?php

use Illuminate\Database\Seeder;

class ResoTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('reso')->delete();

        /* DB::table('reso')->insert([
            'modello_id' => '',
            'taglia_id' => '',
            'colore_id' => '',
            'users_id' => '',
            'quantita' => '',
            'datarichiesta' => '',
            'dataaccettazione' => '',
            'dataspedizione' => '',
            'dataarrivo' => ''
        ]); */
    }

}

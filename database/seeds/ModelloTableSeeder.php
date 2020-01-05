<?php

use Illuminate\Database\Seeder;

class ModelloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('modello')->delete();

        DB::table('modello')->insert([
            'collezione_id' => '',
            'categoria_id' => '',
            'marca_id' => '',
            'stile_id' => '',
            'nome' => '',
            'datauscita' => '',
            'sconto' => '',
            'descrizione' => '',
            'giudizio' => ''
        ]);
    }

}

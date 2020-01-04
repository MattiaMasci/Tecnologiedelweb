<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('categoria')->delete();

        DB::table('categoria')->insert([
            'nome' => '',
            'macrocategoria_id' => ''
        ]);


    }

}

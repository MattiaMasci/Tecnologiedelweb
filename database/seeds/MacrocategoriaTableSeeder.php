<?php

use Illuminate\Database\Seeder;

class MacrocategoriaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('macrocategoria')->delete();

        DB::table('macrocategoria')->insert([
            [
                'nome' => 'Scarpe'
            ],
            [
                'nome' => 'Maglie'
            ],
            [
                'nome' => 'Pantaloni'
            ],
        ]);
    }

}

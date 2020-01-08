<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('categoria')->delete();

        DB::table('categoria')->insert([
            [
                'nome' => 'T-shirt',
                'macrocategoria_id' => '2'
            ],
            [
                'nome' => 'Jeans',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Sneakers',
                'macrocategoria_id' => '1'
            ],
            [
                'nome' => 'Trousers',
                'macrocategoria_id' => '3'
            ],
        ]);
    }

}

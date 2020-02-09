<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('categoria')->delete();

        DB::table('categoria')->insert([
            [
                'nome' => 'T-shirt&Polo',
                'macrocategoria_id' => '2'
            ],
            [
                'nome' => 'Camicie',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Giacche',
                'macrocategoria_id' => '1'
            ],
            [
                'nome' => 'Pantaloni',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Maglieria&Felpe',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Jeans',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Completi&Cravatte',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Sport',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Tutto',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Vestiti',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'T-shirt&Top',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Gonne',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Premium',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Pullover&Cardigan',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Notte',
                'macrocategoria_id' => '3'
            ],
            [
                'nome' => 'Cardigan',
                'macrocategoria_id' => '3'
            ],

        ]);
    }

}

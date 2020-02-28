<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('categoria')->delete();

        DB::table('categoria')->insert([
            [
                'name' => 'T-shirt&Polo',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Camicie',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Giacche',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Pantaloni',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Maglieria&Felpe',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Jeans',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Completi&Cravatte',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Sport',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Tutto',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Vestiti',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'T-shirt&Top',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Gonne',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Premium',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Pullover&Cardigan',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Notte',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],
            [
                'name' => 'Cardigan',
                'url' => 'T-shirt&Polo',
                'description' => 'T-shirt&Polo'
            ],

        ]);
    }

}

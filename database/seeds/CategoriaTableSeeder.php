<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('categoria')->delete();

        DB::table('categoria')->insert([
            [
                'reference' => 't-shirt&polo',
                'name' => 'T-shirt & Polo',
                'stato' => '1',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'camicie',
                'name' => 'Camicie',
                'stato' => '1',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'giacche',
                'name' => 'Giacche',
                'stato' => '1',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'pantaloni',
                'name' => 'Pantaloni',
                'stato' => '1',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'maglieria&felpe',
                'name' => 'Maglieria & Felpe',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'jeans',
                'name' => 'Jeans',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'completi&cravatte',
                'name' => 'Completi & Cravatte',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'sport',
                'name' => 'Abbigliamento Sportivo',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'tutto',
                'name' => '... Tutti gli Articoli',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'vestiti',
                'name' => 'Vestiti',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 't-shirt&top',
                'name' => 'T-shirt & Top',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'gonne',
                'name' => 'Gonne',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'premium',
                'name' => 'Abbigliamento Premium',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'pullover&cardigan',
                'name' => 'Pullover & Cardigan',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'notte',
                'name' => 'Per la Notte',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ],
            [
                'reference' => 'cardigan',
                'name' => 'Cardigan',
                'stato' => '0',
                'description' => 'T-shirt&Polo'
            ]
        ]);
    }

}

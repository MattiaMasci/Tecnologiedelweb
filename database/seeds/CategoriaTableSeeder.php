<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('categoria')->delete();

        DB::table('categoria')->insert([
            /*1*/
            [
                'reference' => 't-shirt&polo',
                'name' => 'T-shirt & Polo',
                'stato' => '1',
                'description' => 'T-shirt e Polo estive'
            ],
            /*2*/
            [
                'reference' => 'camicie',
                'name' => 'Camicie',
                'stato' => '1',
                'description' => 'Camicie'
            ],
            /*3*/
            [
                'reference' => 'giacche',
                'name' => 'Giacche',
                'stato' => '1',
                'description' => 'Giacche'
            ],
            /*4*/
            [
                'reference' => 'pantaloni',
                'name' => 'Pantaloni',
                'stato' => '1',
                'description' => 'Pantaloni'
            ],
            /*5*/
            [
                'reference' => 'maglieria&felpe',
                'name' => 'Maglieria & Felpe',
                'stato' => '0',
                'description' => 'Maglie e Felpe in caldo cotone'
            ],
            /*6*/
            [
                'reference' => 'jeans',
                'name' => 'Jeans',
                'stato' => '0',
                'description' => 'Jeans'
            ],
            /*7*/
            [
                'reference' => 'completi&cravatte',
                'name' => 'Completi & Cravatte',
                'stato' => '0',
                'description' => 'Set di Completi e Cravatte da cerimonia'
            ],
            /*8*/
            [
                'reference' => 'sport',
                'name' => 'Abbigliamento Sportivo',
                'stato' => '0',
                'description' => 'Abbigliamento sportivo'
            ],
            /*9*/
            [
                'reference' => 'tutto',
                'name' => '... Tutti gli Articoli',
                'stato' => '0',
                'description' => 'Tutte le categorie'
            ],
            /*10*/
            [
                'reference' => 'vestiti',
                'name' => 'Vestiti',
                'stato' => '0',
                'description' => 'Vestiti per ogni occasione'
            ],
            /*11*/
            [
                'reference' => 't-shirt&top',
                'name' => 'T-shirt & Top',
                'stato' => '0',
                'description' => 'T-shirt e Top estivi'
            ],
            /*12*/
            [
                'reference' => 'gonne',
                'name' => 'Gonne',
                'stato' => '0',
                'description' => 'Gonne'
            ],
            /*13*/
            [
                'reference' => 'premium',
                'name' => 'Abbigliamento Premium',
                'stato' => '0',
                'description' => 'Abbigliamento Premium'
            ],
            /*14*/
            [
                'reference' => 'pullover&cardigan',
                'name' => 'Pullover & Cardigan',
                'stato' => '0',
                'description' => 'Pullover e Cardigan invernali'
            ],
            /*15*/
            [
                'reference' => 'notte',
                'name' => 'Per la Notte',
                'stato' => '0',
                'description' => 'Abbigliamento da notte'
            ],
            /*16*/
            [
                'reference' => 'cardigan',
                'name' => 'Cardigan',
                'stato' => '0',
                'description' => 'Cardigan invernali'
            ]
        ]);
    }

}

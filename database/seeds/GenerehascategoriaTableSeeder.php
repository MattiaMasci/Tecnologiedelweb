<?php

use Illuminate\Database\Seeder;

class GenerehascategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('generehascategoria')->delete();

        DB::table('generehascategoria')->insert([
            [
                'genere_id' => '1',
                'categoria_id' => '9'
            ],
            [
                'genere_id' => '1',
                'categoria_id' => '1'
            ],
            [
                'genere_id' => '1',
                'categoria_id' => '2'
            ],
            [
                'genere_id' => '1',
                'categoria_id' => '5'
            ],
            [
                'genere_id' => '1',
                'categoria_id' => '4'
            ],
            [
                'genere_id' => '1',
                'categoria_id' => '6'
            ],
            [
                'genere_id' => '1',
                'categoria_id' => '3'
            ],
            [
                'genere_id' => '1',
                'categoria_id' => '7'
            ],
            [
                'genere_id' => '1',
                'categoria_id' => '8'
            ],
            [
                'genere_id' => '2',
                'categoria_id' => '9'
            ],
            [
                'genere_id' => '2',
                'categoria_id' => '10'
            ],
            [
                'genere_id' => '2',
                'categoria_id' => '1'
            ],
            [
                'genere_id' => '2',
                'categoria_id' => '2'
            ],
            [
                'genere_id' => '2',
                'categoria_id' => '5'
            ],
            [
                'genere_id' => '2',
                'categoria_id' => '12'
            ],
            [
                'genere_id' => '2',
                'categoria_id' => '4'
            ],
            [
                'genere_id' => '2',
                'categoria_id' => '6'
            ],
            [
                'genere_id' => '2',
                'categoria_id' => '3'
            ],
            [
                'genere_id' => '2',
                'categoria_id' => '8'
            ],
            [
                'genere_id' => '2',
                'categoria_id' => '13'
            ],
            [
                'genere_id' => '3',
                'categoria_id' => '9'
            ],
            [
                'genere_id' => '3',
                'categoria_id' => '11'
            ],
            [
                'genere_id' => '3',
                'categoria_id' => '14'
            ],
            [
                'genere_id' => '3',
                'categoria_id' => '2'
            ],
            [
                'genere_id' => '3',
                'categoria_id' => '3'
            ],
            [
                'genere_id' => '3',
                'categoria_id' => '4'
            ],
            [
                'genere_id' => '3',
                'categoria_id' => '8'
            ],
            [
                'genere_id' => '3',
                'categoria_id' => '15'
            ],
            [
                'genere_id' => '4',
                'categoria_id' => '9'
            ],
            [
                'genere_id' => '4',
                'categoria_id' => '10'
            ],
            [
                'genere_id' => '4',
                'categoria_id' => '11'
            ],
            [
                'genere_id' => '4',
                'categoria_id' => '16'
            ],
            [
                'genere_id' => '4',
                'categoria_id' => '12'
            ],
            [
                'genere_id' => '4',
                'categoria_id' => '4'
            ],
            [
                'genere_id' => '4',
                'categoria_id' => '3'
            ],[
                'genere_id' => '4',
                'categoria_id' => '8'
            ]
        ]);
    }
}

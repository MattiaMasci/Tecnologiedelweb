<?php

use Illuminate\Database\Seeder;

class ProdottoordinatoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('prodottoordinato')->delete();

        DB::table('prodottoordinato')->insert([
                'nome' => '1',
                'modello_id' => '1',
                'ordine_id' => '1',
                'taglia_id' => '5',
                'colore_id' => '1',
                'quantita' => '20',
                'prezzo' => '20'
        ]);
    }
}

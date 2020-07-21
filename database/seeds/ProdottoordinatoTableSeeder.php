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
        ]);
    }
}

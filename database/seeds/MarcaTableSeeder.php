<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('marca')->delete();

        DB::table('marca')->insert([
            [
                'nome' => 'Nike',
                'reference' => 'nike',
                'top' => '1',
                'stato' => '1',
                'sesso' => 'Uomo',
                'foto' => ''
            ],
            [
                'nome' => 'Ralph Loren',
                'reference' => 'ralph loren',
                'top' => '0',
                'stato' => '1',
                'sesso' => 'Uomo',
                'foto' => ''
            ],
            [
                'nome' => 'Denim',
                'reference' => 'denim',
                'top' => '0',
                'stato' => '1',
                'sesso' => 'Uomo',
                'foto' => ''
            ],
            [
                'nome' => 'Adidas',
                'reference' => 'adidas',
                'top' => '0',
                'stato' => '1',
                'sesso' => 'Uomo',
                'foto' => ''
            ],
            [
                'nome' => 'Woolrich',
                'reference' => 'woolrich',
                'top' => '0',
                'stato' => '1',
                'sesso' => 'Uomo',
                'foto' => ''
            ],
        ]);
    }

}

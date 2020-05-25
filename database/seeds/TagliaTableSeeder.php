<?php

use Illuminate\Database\Seeder;

class TagliaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('taglia')->delete();

        DB::table('taglia')->insert([
            [
                'numero' => 'S',
                'adulto' => '1'
            ],
            [
                'numero' => 'M',
                'adulto' => '1'
            ],
            [
                'numero' => 'L',
                'adulto' => '1'
            ],
            [
                'numero' => 'XL',
                'adulto' => '1'
            ],
            [
                'numero' => '40',
                'adulto' => '0'
            ],
            [
                'numero' => '41',
                'adulto' => '0'
            ],
            [
                'numero' => '42',
                'adulto' => '0'
            ],
            [
                'numero' => '43',
                'adulto' => '0'
            ],
            [
                'numero' => '44',
                'adulto' => '0'
            ],
        ]);
    }

}

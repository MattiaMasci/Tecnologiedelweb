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
                'numero' => '104',
                'adulto' => '0'
            ],
            [
                'numero' => '116',
                'adulto' => '0'
            ],
            [
                'numero' => '128',
                'adulto' => '0'
            ],
            [
                'numero' => '140',
                'adulto' => '0'
            ],
            [
                'numero' => '152',
                'adulto' => '0'
            ],
        ]);
    }

}

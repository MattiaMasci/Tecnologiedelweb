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
            ],
            [
                'numero' => 'M',
            ],
            [
                'numero' => 'L',
            ],
            [
                'numero' => 'XL',
            ],
            [
                'numero' => '40',
            ],
            [
                'numero' => '41',
            ],
            [
                'numero' => '42',
            ],
            [
                'numero' => '43',
            ],
            [
                'numero' => '44',
            ],
        ]);
    }

}

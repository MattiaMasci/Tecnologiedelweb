<?php

use Illuminate\Database\Seeder;

class CollezioneTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('collezione')->delete();

        DB::table('collezione')->insert([
            [
                'nome' => 'Jeans Collection'
            ],
            [
                'nome' => 'Men Collection'
            ],
            [
                'nome' => 'Shoes Collection'
            ],
            [
                'nome' => 'Exclusive Collection'
            ],
        ]);
    }

}

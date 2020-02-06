<?php

use Illuminate\Database\Seeder;

class FotoTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('foto')->delete();

        DB::table('foto')->insert([
            [
                'modello_id' => '1',
                'link' => 'img\women\girl-1.png'
            ],
            [
                'modello_id' => '2',
                'link' => 'img\women\girl-2.png'
            ],
            [
                'modello_id' => '5',
                'link' => 'img\women\girl-3.png'
            ],
            [
                'modello_id' => '3',
                'link' => 'img\women\girl-4.png'
            ],
        ]);
    }

}

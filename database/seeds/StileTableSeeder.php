<?php

use Illuminate\Database\Seeder;

class StileTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('stile')->delete();

        DB::table('stile')->insert([
            [
                'nome' => 'Casual'
            ],
            [
                'nome' => 'Formale'
            ],
            [
                'nome' => 'Standard'
            ],
        ]);
    }

}

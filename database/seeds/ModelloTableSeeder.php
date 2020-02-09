<?php

use Illuminate\Database\Seeder;

class ModelloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('modello')->delete();

        DB::table('modello')->insert([
            [
                'collezione_id' => '3',
                'categoria_id' => '3',
                'marca_id' => '1',
                'stile_id' => '3',
                'nome' => 'Air max 360',
                'datauscita' => '2019-12-21',
                'sconto' => '0',
                'descrizione' => 'Scarpe da ginnastica comode e belle.'
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '1',
                'marca_id' => '2',
                'stile_id' => '1',
                'nome' => 'Polo',
                'datauscita' => '2019-12-13',
                'sconto' => '10',
                'descrizione' => 'T-shirt sempre alla moda.'
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '2',
                'marca_id' => '3',
                'stile_id' => '1',
                'nome' => 'Jeans j-360',
                'datauscita' => '2019-12-02',
                'sconto' => '20',
                'descrizione' => 'Jeans strappati per tutte le evenienze.'
            ],
            [
                'collezione_id' => '3',
                'categoria_id' => '3',
                'marca_id' => '4',
                'stile_id' => '3',
                'nome' => 'Yeezy boost',
                'datauscita' => '2019-12-24',
                'sconto' => '0',
                'descrizione' => 'Scarpe da ginnastica griffate.'
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '1',
                'marca_id' => '5',
                'stile_id' => '1',
                'nome' => 'T-shirt 8080',
                'datauscita' => '2019-12-22',
                'sconto' => '0',
                'descrizione' => 'T-shirt Woolrich con logo.'
            ],
        ]);
    }
}

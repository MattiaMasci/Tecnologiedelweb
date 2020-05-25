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
                'mediavoto' => '3',
                'datauscita' => '2019-12-21',
                'descrizione' => 'Scarpe da ginnastica comode e belle.',
                'descrizione1' => 'Scarpe da ginnastica comode e belle.'
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '1',
                'marca_id' => '2',
                'stile_id' => '1',
                'nome' => 'Polo',
                'mediavoto' => '0',
                'datauscita' => '2019-12-13',
                'descrizione' => 'T-shirt sempre alla moda.',
                'descrizione1' => 'T-shirt sempre alla moda.'
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '2',
                'marca_id' => '3',
                'stile_id' => '1',
                'nome' => 'Jeans j-360',
                'mediavoto' => '0',
                'datauscita' => '2019-12-02',
                'descrizione' => 'Jeans strappati per tutte le evenienze.',
                'descrizione1' => 'Jeans strappati per tutte le evenienze.'
            ],
            [
                'collezione_id' => '3',
                'categoria_id' => '3',
                'marca_id' => '4',
                'stile_id' => '3',
                'nome' => 'Yeezy boost',
                'mediavoto' => '0',
                'datauscita' => '2019-12-24',
                'descrizione' => 'Scarpe da ginnastica griffate.',
                'descrizione1' => 'Scarpe da ginnastica griffate.'
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '1',
                'marca_id' => '5',
                'stile_id' => '1',
                'nome' => 'T-shirt 8080',
                'mediavoto' => '5',
                'datauscita' => '2019-12-22',
                'descrizione' => 'T-shirt Woolrich con logo.',
                'descrizione1' => 'T-shirt Woolrich con logo.'
            ],
        ]);
    }
}

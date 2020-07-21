<?php

use Illuminate\Database\Seeder;

class ProfiloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('profilo')->delete();

        DB::table('profilo')->insert([
            [
                'users_id' => '1',
                'datanascita' => '1996/03/07',
                'nomefatturazione' => 'Mattia',
                'cognomefatturazione' => 'Masci',
                'aziendafatturazione' => '',
                'emailfatturazione' => 'mascimattia@gmail.com',
                'telefonofatturazione' => '3205635465',
                'indirizzofatturazione' => 'W 13th Ave',
                'nazionefatturazione' => 'USA',
                'abitazionefatturazione' => '',
                'cittafatturazione' => 'Denver'
            ],
            [
                'users_id' => '2',
                'datanascita' => '1996/12/08',
                'nomefatturazione' => 'Davide',
                'cognomefatturazione' => 'Barbagrigia',
                'aziendafatturazione' => '',
                'emailfatturazione' => 'babagrigiadavide@gmail.com',
                'telefonofatturazione' => '3245645445',
                'indirizzofatturazione' => 'Fox St',
                'nazionefatturazione' => 'USA',
                'abitazionefatturazione' => '',
                'cittafatturazione' => 'Denver'
            ],
            [
                'users_id' => '3',
                'datanascita' => '1996/11/24',
                'nomefatturazione' => 'Giovanni',
                'cognomefatturazione' => 'Spaziani',
                'aziendafatturazione' => '',
                'emailfatturazione' => 'spazianigiovanni.@gmail.com',
                'telefonofatturazione' => '3495637865',
                'indirizzofatturazione' => 'E 11th Ave',
                'nazionefatturazione' => 'USA',
                'abitazionefatturazione' => '',
                'cittafatturazione' => 'Denver'
            ],
        ]);
    }

}

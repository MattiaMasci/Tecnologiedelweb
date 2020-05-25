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
                'nomefatturazione' => 'Mattia',
                'cognomefatturazione' => 'Masci',
                'aziendafatturazione' => '',
                'emailfatturazione' => 'mascimattia@gmail.com',
                'telefonofatturazione' => '320563546',
                'indirizzofatturazione' => 'Via Aia 34',
                'nazionefatturazione' => 'IT',
                'abitazionefatturazione' => '',
                'cittafatturazione' => 'Capestrano',
                'nomespedizione' => 'Mattia',
                'cognomespedizione' => 'Masci',
                'aziendaspedizione' => '',
                'emailspedizione' => 'mascimattia@gmail.com',
                'telefonospedizione' => '320563546',
                'indirizzospedizione' => 'Via Aia 34',
                'nazionespedizione' => 'IT',
                'abitazionespedizione' => 'Capestrano',
                'cittaspedizione' => '',
            ],
            [
                'users_id' => '2',
                'nomefatturazione' => '',
                'cognomefatturazione' => '',
                'aziendafatturazione' => '',
                'emailfatturazione' => '',
                'telefonofatturazione' => '',
                'indirizzofatturazione' => '',
                'nazionefatturazione' => '',
                'abitazionefatturazione' => '',
                'cittafatturazione' => '',
                'nomespedizione' => '',
                'cognomespedizione' => '',
                'aziendaspedizione' => '',
                'emailspedizione' => '',
                'telefonospedizione' => '',
                'indirizzospedizione' => '',
                'nazionespedizione' => '',
                'abitazionespedizione' => '',
                'cittaspedizione' => '',
            ],
            [
                'users_id' => '3',
                'nomefatturazione' => '',
                'cognomefatturazione' => '',
                'aziendafatturazione' => '',
                'emailfatturazione' => '',
                'telefonofatturazione' => '',
                'indirizzofatturazione' => '',
                'nazionefatturazione' => '',
                'abitazionefatturazione' => '',
                'cittafatturazione' => '',
                'nomespedizione' => '',
                'cognomespedizione' => '',
                'aziendaspedizione' => '',
                'emailspedizione' => '',
                'telefonospedizione' => '',
                'indirizzospedizione' => '',
                'nazionespedizione' => '',
                'abitazionespedizione' => '',
                'cittaspedizione' => '',
            ],
        ]);
    }

}

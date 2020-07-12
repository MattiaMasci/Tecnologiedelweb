<?php

use Illuminate\Database\Seeder;

class OrdineTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('ordine')->delete();

        DB::table('ordine')->insert([
            'users_id' => '2',
            'pagamento' => 'paypal',
            'totale' => 50,
            'dataordine' => '2022-12-20',
            'dataaccettazione' => '2022-12-21',
            'dataspedizione' => '2022-12-23',
            'dataarrivo' => '2023-01-02',
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
            'notespedizione' => ''
        ]);
    }

}

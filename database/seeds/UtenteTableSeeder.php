<?php

use Illuminate\Database\Seeder;

class UtenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('utente')->delete();

        DB::table('utente')->insert([
            'nome' => '',
            'cognome' => '',
            'username' => '',
            'password' => '',
            'email' => '',
            'gruppo_id' => ''
        ]);

    }
}

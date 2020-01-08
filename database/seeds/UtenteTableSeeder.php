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
            [
                'nome' => 'Mattia',
                'cognome' => 'Masci',
                'username' => 'mattiamasc',
                'password' => 'mattiamasc',
                'email' => 'mascimattia@gmail.com'
            ],
            [
                'nome' => 'Davide',
                'cognome' => 'Barbagrigia',
                'username' => 'dabarba',
                'password' => 'dabarba',
                'email' => 'babagrigiadavide@gmail.com'
            ],
            [
                'nome' => 'Giovanni',
                'cognome' => 'Spaziani',
                'username' => 'giospa',
                'password' => 'giospa',
                'email' => 'giovanni.spaziani@gmail.com'
            ],
        ]);
    }
}

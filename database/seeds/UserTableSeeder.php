<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('users')->delete();

        DB::table('users')->insert([
            [
                'name' => 'Mattia',
                'cognome' => 'Masci',
                'username' => 'mattiamasc',
                'password' => Hash::make('mattiamas'),
                'email' => 'mascimattia@gmail.com'
            ],
            [
                'name' => 'Paolo',
                'cognome' => 'Maldini',
                'username' => 'paolomald',
                'password' => Hash::make('paolomal'),
                'email' => 'maldinipaolo@gmail.com'
            ],
            [
                'name' => 'Davide',
                'cognome' => 'Barbagrigia',
                'username' => 'dabarba',
                'password' => Hash::make('davideba'),
                'email' => 'babagrigiadavide@gmail.com'
            ],
            [
                'name' => 'Giovanni',
                'cognome' => 'Spaziani',
                'username' => 'giospa',
                'password' => Hash::make('giovaspa'),
                'email' => 'giovanni.spaziani@gmail.com'
            ],
        ]);
    }
}

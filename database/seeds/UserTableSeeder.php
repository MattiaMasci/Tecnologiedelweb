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
                'username' => 'mattiama',
                'password' => Hash::make('mattiama'),
                'email' => 'mascimattia@gmail.com'
            ],
            [
                'name' => 'Davide',
                'cognome' => 'Barbagrigia',
                'username' => 'davbarba',
                'password' => Hash::make('davbarba'),
                'email' => 'barbagrigiadavide@gmail.com'
            ],
            [
                'name' => 'Giovanni',
                'cognome' => 'Spaziani',
                'username' => 'giovaspa',
                'password' => Hash::make('giovaspa'),
                'email' => 'spazianigiovanni@gmail.com'
            ],
        ]);
    }
}

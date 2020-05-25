<?php

use Illuminate\Database\Seeder;

class UsershasgruppoTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('usershasgruppo')->delete();

        DB::table('usershasgruppo')->insert([
            [
                'users_id' => '1',
                'gruppo_id' => '2'
            ],
            [
                'users_id' => '2',
                'gruppo_id' => '1'
            ],
            [
                'users_id' => '2',
                'gruppo_id' => '2'
            ],
            [
                'users_id' => '3',
                'gruppo_id' => '2'
            ],
            [
                'users_id' => '4',
                'gruppo_id' => '2'
            ]
        ]);
    }

}

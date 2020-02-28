<?php

use Illuminate\Database\Seeder;

class AltreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //eliminiamo eventuali foto già presenti
        DB::table('altre')->delete();

        DB::table('altre')->insert([
            [
                'foto_id' => '1',
                'data' => 'img\women\girl-1.png',
                'tipo' => '',
                'posizione' => ''
            ],
            [
                'foto_id' => '2',
                'data' => 'img\women\girl-2.png',
                'tipo' => '',
                'posizione' => ''
            ],
            [
                'foto_id' => '3',
                'data' => 'img\women\girl-3.png',
                'tipo' => '',
                'posizione' => ''
            ],
            [
                'foto_id' => '4',
                'data' => 'img\women\girl-4.png',
                'tipo' => '',
                'posizione' => ''
            ],
        ]);
    }
}

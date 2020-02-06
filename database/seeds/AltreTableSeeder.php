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
                'link' => 'img\women\girl-1.png'
            ],
            [
                'foto_id' => '2',
                'link' => 'img\women\girl-2.png'
            ],
            [
                'foto_id' => '3',
                'link' => 'img\women\girl-3.png'
            ],
            [
                'foto_id' => '4',
                'link' => 'img\women\girl-4.png'
            ],
        ]);
    }
}

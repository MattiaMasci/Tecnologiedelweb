<?php

use Illuminate\Database\Seeder;

class GruppoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gruppo')->insert([
            'nome' => ''
        ]);
    }
}

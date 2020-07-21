<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('marca')->delete();

        DB::table('marca')->insert([
            /*1*/
            [
                'nome' => 'Nike',
                'reference' => 'nike',
                'top' => '1',
                'stato' => '1',
                'sesso' => 'Uomo',
                'foto' => ''
            ],
            /*2*/
            [
                'nome' => 'Pier One',
                'reference' => 'pier-one',
                'top' => '0',
                'stato' => '1',
                'sesso' => 'Uomo',
                'foto' => ''
            ],
            /*3*/
            [
                'nome' => 'Oakley',
                'reference' => 'oakley',
                'top' => '0',
                'stato' => '1',
                'sesso' => 'Uomo',
                'foto' => ''
            ],
            /*4*/
            [
                'nome' => 'Adidas',
                'reference' => 'adidas',
                'top' => '0',
                'stato' => '1',
                'sesso' => 'Uomo',
                'foto' => ''
            ],
            /*5*/
            [
                'nome' => 'Jack & Jones',
                'reference' => 'jack-jones',
                'top' => '0',
                'stato' => '1',
                'sesso' => 'Uomo',
                'foto' => ''
            ],
            /*6*/
            [
                'nome' => 'Tom Tailor',
                'reference' => 'tom-tailor',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*7*/
            [
                'nome' => 'Sheego',
                'reference' => 'sheego',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*8*/
            [
                'nome' => 'Uterque',
                'reference' => 'uterque',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*9*/
            [
                'nome' => 'Tommy Jeans',
                'reference' => 'tommy-jeans',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*10*/
            [
                'nome' => 'Bruun & Stengade',
                'reference' => 'bruun-stengade',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*11*/
            [
                'nome' => 'Isaac Dewhirst',
                'reference' => 'isaac-dewhirst',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*12*/
            [
                'nome' => 'Selected Homme',
                'reference' => 'selected-homme',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*13*/
            [
                'nome' => 'Burton',
                'reference' => 'burton',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*14*/
            [
                'nome' => 'Indicode Jeans',
                'reference' => 'indicode-jeans',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*15*/
            [
                'nome' => 'DeFacto',
                'reference' => 'defacto',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*16*/
            [
                'nome' => 'La Martina',
                'reference' => 'la-martina',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*17*/
            [
                'nome' => 'Mango',
                'reference' => 'mango',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*18*/
            [
                'nome' => 'Desigual',
                'reference' => 'desigual',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*19*/
            [
                'nome' => 'North Face',
                'reference' => 'north-face',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*20*/
            [
                'nome' => 'Name It',
                'reference' => 'name-it',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*21*/
            [
                'nome' => 'Tommy Hilfiger',
                'reference' => 'tommy-hilfiger',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*22*/
            [
                'nome' => 'Quicksilver',
                'reference' => 'quicksilver',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*23*/
            [
                'nome' => 'Blue Seven',
                'reference' => 'blue-seven',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*24*/
            [
                'nome' => 'Save the Duck',
                'reference' => 'save-the-duck',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*25*/
            [
                'nome' => 'Lemon Beret',
                'reference' => 'lemon-beret',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*26*/
            [
                'nome' => 'Diesel',
                'reference' => 'diesel',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ],
            /*27*/
            [
                'nome' => 'Key Largo',
                'reference' => 'key-largo',
                'top' => '0',
                'stato' => '0',
                'sesso' => '',
                'foto' => ''
            ]
        ]);
    }

}

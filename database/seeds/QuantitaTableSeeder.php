<?php

use Illuminate\Database\Seeder;

class QuantitaTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('quantita')->delete();

        DB::table('quantita')->insert([
            /*Camicie*/
            /*1*/
            [
                'modello_id' => '1',
                'taglia_id' => '1',
                'colore_id' => '11',
                'quantita' => '50'
            ],
            [
                'modello_id' => '1',
                'taglia_id' => '3',
                'colore_id' => '11',
                'quantita' => '30'
            ],
            [
                'modello_id' => '1',
                'taglia_id' => '4',
                'colore_id' => '11',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '2',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '2',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '2',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '3',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '3',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '3',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '4',
                'taglia_id' => '1',
                'colore_id' => '11',
                'quantita' => '50'
            ],
            [
                'modello_id' => '4',
                'taglia_id' => '3',
                'colore_id' => '11',
                'quantita' => '30'
            ],
            [
                'modello_id' => '4',
                'taglia_id' => '4',
                'colore_id' => '11',
                'quantita' => '40'
            ],
            /*5*/

            /*6*/
            [
                'modello_id' => '6',
                'taglia_id' => '2',
                'colore_id' => '5',
                'quantita' => '20'
            ],
            [
                'modello_id' => '6',
                'taglia_id' => '3',
                'colore_id' => '5',
                'quantita' => '30'
            ],
            [
                'modello_id' => '6',
                'taglia_id' => '4',
                'colore_id' => '5',
                'quantita' => '40'
            ],
            /*7*/

            /*8*/
            [
                'modello_id' => '8',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '8',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '8',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            /*9*/
            [
                'modello_id' => '9',
                'taglia_id' => '2',
                'colore_id' => '11',
                'quantita' => '20'
            ],
            [
                'modello_id' => '9',
                'taglia_id' => '3',
                'colore_id' => '11',
                'quantita' => '30'
            ],
            [
                'modello_id' => '9',
                'taglia_id' => '4',
                'colore_id' => '11',
                'quantita' => '40'
            ],
            /*10*/
            [
                'modello_id' => '10',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '10',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '10',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*11*/
            [
                'modello_id' => '11',
                'taglia_id' => '1',
                'colore_id' => '12',
                'quantita' => '50'
            ],
            [
                'modello_id' => '11',
                'taglia_id' => '2',
                'colore_id' => '12',
                'quantita' => '20'
            ],
            [
                'modello_id' => '11',
                'taglia_id' => '3',
                'colore_id' => '12',
                'quantita' => '30'
            ],
            [
                'modello_id' => '11',
                'taglia_id' => '4',
                'colore_id' => '12',
                'quantita' => '40'
            ],
            /*12*/
            [
                'modello_id' => '12',
                'taglia_id' => '1',
                'colore_id' => '11',
                'quantita' => '50'
            ],
            [
                'modello_id' => '12',
                'taglia_id' => '2',
                'colore_id' => '11',
                'quantita' => '20'
            ],
            [
                'modello_id' => '12',
                'taglia_id' => '3',
                'colore_id' => '11',
                'quantita' => '30'
            ],
            [
                'modello_id' => '12',
                'taglia_id' => '4',
                'colore_id' => '11',
                'quantita' => '40'
            ],
            /*T-shirt&Polo*/
            /*1*/

            /*2*/
            [
                'modello_id' => '14',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '14',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '14',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '15',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '15',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '15',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '16',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '16',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '16',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*5*/
            [
                'modello_id' => '17',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '17',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '17',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*6*/
            [
                'modello_id' => '18',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '18',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '18',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*7*/
            [
                'modello_id' => '19',
                'taglia_id' => '1',
                'colore_id' => '11',
                'quantita' => '50'
            ],
            [
                'modello_id' => '19',
                'taglia_id' => '2',
                'colore_id' => '11',
                'quantita' => '20'
            ],
            [
                'modello_id' => '19',
                'taglia_id' => '4',
                'colore_id' => '11',
                'quantita' => '40'
            ],
            [
                'modello_id' => '19',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '19',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '19',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            [
                'modello_id' => '19',
                'taglia_id' => '1',
                'colore_id' => '13',
                'quantita' => '50'
            ],
            [
                'modello_id' => '19',
                'taglia_id' => '2',
                'colore_id' => '13',
                'quantita' => '20'
            ],
            [
                'modello_id' => '19',
                'taglia_id' => '4',
                'colore_id' => '13',
                'quantita' => '40'
            ],
            /*8*/

            /*9*/
            [
                'modello_id' => '21',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '21',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '21',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*10*/
            [
                'modello_id' => '22',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '22',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '22',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*11*/
            [
                'modello_id' => '23',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '23',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '23',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '23',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*12*/
            [
                'modello_id' => '24',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '24',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '24',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '24',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*Completi&Cravatte*/
            /*1*/
            [
                'modello_id' => '25',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '25',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '25',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*2*/

            /*3*/
            [
                'modello_id' => '27',
                'taglia_id' => '1',
                'colore_id' => '12',
                'quantita' => '50'
            ],
            [
                'modello_id' => '27',
                'taglia_id' => '2',
                'colore_id' => '12',
                'quantita' => '20'
            ],
            [
                'modello_id' => '27',
                'taglia_id' => '3',
                'colore_id' => '12',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '28',
                'taglia_id' => '1',
                'colore_id' => '10',
                'quantita' => '50'
            ],
            [
                'modello_id' => '28',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '28',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*Giacche*/
            /*1*/
            [
                'modello_id' => '29',
                'taglia_id' => '1',
                'colore_id' => '9',
                'quantita' => '50'
            ],
            [
                'modello_id' => '29',
                'taglia_id' => '3',
                'colore_id' => '9',
                'quantita' => '30'
            ],
            [
                'modello_id' => '29',
                'taglia_id' => '4',
                'colore_id' => '9',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '30',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '30',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '30',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*3*/

            /*4*/
            [
                'modello_id' => '32',
                'taglia_id' => '1',
                'colore_id' => '10',
                'quantita' => '50'
            ],
            [
                'modello_id' => '32',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '32',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*Jeans*/
            /*1*/
            [
                'modello_id' => '33',
                'taglia_id' => '1',
                'colore_id' => '10',
                'quantita' => '50'
            ],
            [
                'modello_id' => '33',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '33',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '34',
                'taglia_id' => '2',
                'colore_id' => '10',
                'quantita' => '20'
            ],
            [
                'modello_id' => '34',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '34',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '35',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '35',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '35',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            /*4*/

            /*Maglieria&Felpe*/
            /*1*/

            /*2*/
            [
                'modello_id' => '38',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '38',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '38',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '39',
                'taglia_id' => '1',
                'colore_id' => '14',
                'quantita' => '50'
            ],
            [
                'modello_id' => '39',
                'taglia_id' => '2',
                'colore_id' => '14',
                'quantita' => '20'
            ],
            [
                'modello_id' => '39',
                'taglia_id' => '3',
                'colore_id' => '14',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '40',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '40',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '40',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*Pantaloni*/
            /*1*/
            [
                'modello_id' => '41',
                'taglia_id' => '1',
                'colore_id' => '4',
                'quantita' => '50'
            ],
            [
                'modello_id' => '41',
                'taglia_id' => '3',
                'colore_id' => '4',
                'quantita' => '30'
            ],
            [
                'modello_id' => '41',
                'taglia_id' => '4',
                'colore_id' => '4',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '42',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '42',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '42',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*3*/

            /*4*/
            [
                'modello_id' => '44',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '44',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '44',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*Sport*/
            /*1*/
            [
                'modello_id' => '45',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '45',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '45',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '46',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '46',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '46',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '47',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '47',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '47',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            /*4*/

            /*DONNA*/
            /*Camicie*/
            /*1*/
            [
                'modello_id' => '49',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '49',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '49',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '50',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '50',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '50',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*3*/

            /*4*/
            [
                'modello_id' => '52',
                'taglia_id' => '1',
                'colore_id' => '13',
                'quantita' => '50'
            ],
            [
                'modello_id' => '52',
                'taglia_id' => '3',
                'colore_id' => '13',
                'quantita' => '30'
            ],
            [
                'modello_id' => '52',
                'taglia_id' => '4',
                'colore_id' => '13',
                'quantita' => '40'
            ],
            /*Giacche*/
            /*1*/

            /*2*/
            [
                'modello_id' => '54',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '54',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '54',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '55',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '55',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '55',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '56',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '56',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '56',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*Gonne*/
            /*1*/
            [
                'modello_id' => '57',
                'taglia_id' => '1',
                'colore_id' => '10',
                'quantita' => '50'
            ],
            [
                'modello_id' => '57',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '57',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*2*/

            /*3*/
            [
                'modello_id' => '59',
                'taglia_id' => '1',
                'colore_id' => '14',
                'quantita' => '50'
            ],
            [
                'modello_id' => '59',
                'taglia_id' => '2',
                'colore_id' => '14',
                'quantita' => '20'
            ],
            [
                'modello_id' => '59',
                'taglia_id' => '3',
                'colore_id' => '14',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '60',
                'taglia_id' => '1',
                'colore_id' => '4',
                'quantita' => '50'
            ],
            [
                'modello_id' => '60',
                'taglia_id' => '3',
                'colore_id' => '4',
                'quantita' => '30'
            ],
            [
                'modello_id' => '60',
                'taglia_id' => '4',
                'colore_id' => '4',
                'quantita' => '40'
            ],
            /*Jeans*/
            /*1*/

            /*2*/
            [
                'modello_id' => '62',
                'taglia_id' => '2',
                'colore_id' => '10',
                'quantita' => '20'
            ],
            [
                'modello_id' => '62',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '62',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '63',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '63',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '63',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '64',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '64',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '64',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*Maglieria&Felpe*/
            /*1*/
            [
                'modello_id' => '65',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '65',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '65',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*2*/

            /*3*/
            [
                'modello_id' => '67',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '67',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '67',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '68',
                'taglia_id' => '1',
                'colore_id' => '10',
                'quantita' => '50'
            ],
            [
                'modello_id' => '68',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '68',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*Pantaloni*/
            /*1*/
            [
                'modello_id' => '69',
                'taglia_id' => '1',
                'colore_id' => '10',
                'quantita' => '50'
            ],
            [
                'modello_id' => '69',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '69',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '70',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '70',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '70',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '71',
                'taglia_id' => '1',
                'colore_id' => '11',
                'quantita' => '50'
            ],
            [
                'modello_id' => '71',
                'taglia_id' => '2',
                'colore_id' => '11',
                'quantita' => '20'
            ],
            [
                'modello_id' => '71',
                'taglia_id' => '3',
                'colore_id' => '11',
                'quantita' => '30'
            ],
            /*4*/

            /*Premium*/

            /*Sport*/
            /*1*/
            [
                'modello_id' => '73',
                'taglia_id' => '1',
                'colore_id' => '10',
                'quantita' => '50'
            ],
            [
                'modello_id' => '73',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '73',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '74',
                'taglia_id' => '2',
                'colore_id' => '10',
                'quantita' => '20'
            ],
            [
                'modello_id' => '74',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '74',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*3*/

            /*4*/
            [
                'modello_id' => '76',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '76',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '76',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*T-shirt&Polo*/
            /*1*/
            [
                'modello_id' => '77',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '77',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '77',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '78',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '78',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '78',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '79',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '79',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '79',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            /*4*/

            /*Vestiti*/
            /*1*/
            [
                'modello_id' => '81',
                'taglia_id' => '1',
                'colore_id' => '10',
                'quantita' => '50'
            ],
            [
                'modello_id' => '81',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '81',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '82',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '82',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '82',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*3*/

            /*4*/
            [
                'modello_id' => '84',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '84',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '84',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*BAMBINO*/
            /*Camicie*/

            /*Giacche*/
            /*1*/
            [
                'modello_id' => '85',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '85',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '85',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '86',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '86',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '86',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '87',
                'taglia_id' => '1',
                'colore_id' => '9',
                'quantita' => '50'
            ],
            [
                'modello_id' => '87',
                'taglia_id' => '2',
                'colore_id' => '9',
                'quantita' => '20'
            ],
            [
                'modello_id' => '87',
                'taglia_id' => '3',
                'colore_id' => '9',
                'quantita' => '30'
            ],
            /*4*/

            /*Notte*/

            /*Pantaloni*/
            /*1*/

            /*2*/
            [
                'modello_id' => '90',
                'taglia_id' => '2',
                'colore_id' => '9',
                'quantita' => '20'
            ],
            [
                'modello_id' => '90',
                'taglia_id' => '3',
                'colore_id' => '9',
                'quantita' => '30'
            ],
            [
                'modello_id' => '90',
                'taglia_id' => '4',
                'colore_id' => '9',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '91',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '91',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '91',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '92',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '92',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '92',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*Pullover&Cardigan*/
            /*1*/
            [
                'modello_id' => '93',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '93',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '93',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*2*/

            /*3*/
            [
                'modello_id' => '95',
                'taglia_id' => '1',
                'colore_id' => '10',
                'quantita' => '50'
            ],
            [
                'modello_id' => '95',
                'taglia_id' => '2',
                'colore_id' => '10',
                'quantita' => '20'
            ],
            [
                'modello_id' => '95',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '96',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '96',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '96',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*Sport*/
            /*1*/
            [
                'modello_id' => '97',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '97',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '97',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '98',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '98',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '98',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*3*/

            /*4*/
            [
                'modello_id' => '100',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '100',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '100',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*T-shirt&Top*/
            /*1*/
            [
                'modello_id' => '101',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '101',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '101',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '102',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '102',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '102',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '103',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '103',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '103',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            /*4*/

            /*BAMBINA*/
            /*Cardigan*/
            /*1*/

            /*2*/
            [
                'modello_id' => '106',
                'taglia_id' => '2',
                'colore_id' => '6',
                'quantita' => '20'
            ],
            [
                'modello_id' => '106',
                'taglia_id' => '3',
                'colore_id' => '6',
                'quantita' => '30'
            ],
            [
                'modello_id' => '106',
                'taglia_id' => '4',
                'colore_id' => '6',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '107',
                'taglia_id' => '1',
                'colore_id' => '11',
                'quantita' => '50'
            ],
            [
                'modello_id' => '107',
                'taglia_id' => '2',
                'colore_id' => '11',
                'quantita' => '20'
            ],
            [
                'modello_id' => '107',
                'taglia_id' => '3',
                'colore_id' => '11',
                'quantita' => '30'
            ],
            [
                'modello_id' => '107',
                'taglia_id' => '1',
                'colore_id' => '6',
                'quantita' => '50'
            ],
            [
                'modello_id' => '107',
                'taglia_id' => '2',
                'colore_id' => '6',
                'quantita' => '20'
            ],
            [
                'modello_id' => '107',
                'taglia_id' => '3',
                'colore_id' => '6',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '108',
                'taglia_id' => '1',
                'colore_id' => '6',
                'quantita' => '50'
            ],
            [
                'modello_id' => '108',
                'taglia_id' => '3',
                'colore_id' => '6',
                'quantita' => '30'
            ],
            [
                'modello_id' => '108',
                'taglia_id' => '4',
                'colore_id' => '6',
                'quantita' => '40'
            ],
            /*Giacche*/
            /*1*/
            [
                'modello_id' => '109',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '109',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '109',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '110',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '110',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '110',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '111',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '111',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '111',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            /*4*/

            /*Gonne*/
            /*1*/
            [
                'modello_id' => '113',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '113',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '113',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*2*/

            /*3*/
            [
                'modello_id' => '115',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '115',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '115',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '116',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '116',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '116',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*Pantaloni*/
            /*1*/
            [
                'modello_id' => '117',
                'taglia_id' => '1',
                'colore_id' => '10',
                'quantita' => '50'
            ],
            [
                'modello_id' => '117',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '117',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*2*/

            /*3*/
            [
                'modello_id' => '119',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '119',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '119',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '120',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '120',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '120',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*Sport*/
            /*1*/
            [
                'modello_id' => '121',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '121',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '121',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '122',
                'taglia_id' => '2',
                'colore_id' => '10',
                'quantita' => '20'
            ],
            [
                'modello_id' => '122',
                'taglia_id' => '3',
                'colore_id' => '10',
                'quantita' => '30'
            ],
            [
                'modello_id' => '122',
                'taglia_id' => '4',
                'colore_id' => '10',
                'quantita' => '40'
            ],
            /*3*/

            /*4*/
            [
                'modello_id' => '124',
                'taglia_id' => '1',
                'colore_id' => '1',
                'quantita' => '50'
            ],
            [
                'modello_id' => '124',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '124',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*T-shirt&Top*/
            /*1*/
            [
                'modello_id' => '125',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '125',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '125',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*2*/
            [
                'modello_id' => '126',
                'taglia_id' => '2',
                'colore_id' => '1',
                'quantita' => '20'
            ],
            [
                'modello_id' => '126',
                'taglia_id' => '3',
                'colore_id' => '1',
                'quantita' => '30'
            ],
            [
                'modello_id' => '126',
                'taglia_id' => '4',
                'colore_id' => '1',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '127',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '127',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '127',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            /*4*/

            /*Vestiti*/
            /*1*/

            /*2*/
            [
                'modello_id' => '130',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '130',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '130',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
            /*3*/
            [
                'modello_id' => '131',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '131',
                'taglia_id' => '2',
                'colore_id' => '2',
                'quantita' => '20'
            ],
            [
                'modello_id' => '131',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            /*4*/
            [
                'modello_id' => '132',
                'taglia_id' => '1',
                'colore_id' => '2',
                'quantita' => '50'
            ],
            [
                'modello_id' => '132',
                'taglia_id' => '3',
                'colore_id' => '2',
                'quantita' => '30'
            ],
            [
                'modello_id' => '132',
                'taglia_id' => '4',
                'colore_id' => '2',
                'quantita' => '40'
            ],
        ]);
    }

}

<?php

use Illuminate\Database\Seeder;

class GenerehasmodelloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('generehasmodello')->delete();

        DB::table('generehasmodello')->insert([
            /*UOMO*/
            /*Camicie*/
            /*1*/
            [
                'genere_id' => '1',
                'modello_id' => '1',
                'prezzo' => '25.50',
                'sconto' => '10',
            ],
            /*2*/
            [
                'genere_id' => '1',
                'modello_id' => '2',
                'prezzo' => '29.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '1',
                'modello_id' => '3',
                'prezzo' => '26.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '1',
                'modello_id' => '4',
                'prezzo' => '33.00',
                'sconto' => '15',
            ],
            /*5*/
            [
                'genere_id' => '1',
                'modello_id' => '5',
                'prezzo' => '24.99',
                'sconto' => '5',
            ],
            /*6*/
            [
                'genere_id' => '1',
                'modello_id' => '6',
                'prezzo' => '29.99',
                'sconto' => '0',
            ],
            /*7*/
            [
                'genere_id' => '1',
                'modello_id' => '7',
                'prezzo' => '43.50',
                'sconto' => '0',
            ],
            /*8*/
            [
                'genere_id' => '1',
                'modello_id' => '8',
                'prezzo' => '36.00',
                'sconto' => '20',
            ],
            /*9*/
            [
                'genere_id' => '1',
                'modello_id' => '9',
                'prezzo' => '29.99',
                'sconto' => '0',
            ],
            /*10*/
            [
                'genere_id' => '1',
                'modello_id' => '10',
                'prezzo' => '19.99',
                'sconto' => '0',
            ],
            /*11*/
            [
                'genere_id' => '1',
                'modello_id' => '11',
                'prezzo' => '27.50',
                'sconto' => '0',
            ],
            /*12*/
            [
                'genere_id' => '1',
                'modello_id' => '12',
                'prezzo' => '29.99',
                'sconto' => '0',
            ],
            /*T-shirt&Polo*/
            /*1*/
            [
                'genere_id' => '1',
                'modello_id' => '13',
                'prezzo' => '25.50',
                'sconto' => '10',
            ],
            /*2*/
            [
                'genere_id' => '1',
                'modello_id' => '14',
                'prezzo' => '29.99',
                'sconto' => '15',
            ],
            /*3*/
            [
                'genere_id' => '1',
                'modello_id' => '15',
                'prezzo' => '26.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '1',
                'modello_id' => '16',
                'prezzo' => '33.00',
                'sconto' => '30',
            ],
            /*5*/
            [
                'genere_id' => '1',
                'modello_id' => '17',
                'prezzo' => '24.99',
                'sconto' => '0',
            ],
            /*6*/
            [
                'genere_id' => '1',
                'modello_id' => '18',
                'prezzo' => '29.99',
                'sconto' => '40',
            ],
            /*7*/
            [
                'genere_id' => '1',
                'modello_id' => '19',
                'prezzo' => '43.50',
                'sconto' => '0',
            ],
            /*8*/
            [
                'genere_id' => '1',
                'modello_id' => '20',
                'prezzo' => '36.00',
                'sconto' => '10',
            ],
            /*9*/
            [
                'genere_id' => '1',
                'modello_id' => '21',
                'prezzo' => '29.99',
                'sconto' => '0',
            ],
            /*10*/
            [
                'genere_id' => '1',
                'modello_id' => '22',
                'prezzo' => '19.99',
                'sconto' => '0',
            ],
            /*11*/
            [
                'genere_id' => '1',
                'modello_id' => '23',
                'prezzo' => '27.50',
                'sconto' => '0',
            ],
            /*12*/
            [
                'genere_id' => '1',
                'modello_id' => '24',
                'prezzo' => '29.99',
                'sconto' => '15',
            ],
            /*Completi&Cravatte*/
            /*1*/
            [
                'genere_id' => '1',
                'modello_id' => '25',
                'prezzo' => '67.50',
                'sconto' => '10',
            ],
            /*2*/
            [
                'genere_id' => '1',
                'modello_id' => '26',
                'prezzo' => '80.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '1',
                'modello_id' => '27',
                'prezzo' => '96.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '1',
                'modello_id' => '28',
                'prezzo' => '75.00',
                'sconto' => '0',
            ],
            /*Giacche*/
            /*1*/
            [
                'genere_id' => '1',
                'modello_id' => '29',
                'prezzo' => '45.50',
                'sconto' => '20',
            ],
            /*2*/
            [
                'genere_id' => '1',
                'modello_id' => '30',
                'prezzo' => '50.99',
                'sconto' => '25',
            ],
            /*3*/
            [
                'genere_id' => '1',
                'modello_id' => '31',
                'prezzo' => '61.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '1',
                'modello_id' => '32',
                'prezzo' => '49.00',
                'sconto' => '10',
            ],
            /*Jeans*/
            /*1*/
            [
                'genere_id' => '1',
                'modello_id' => '33',
                'prezzo' => '36.50',
                'sconto' => '5',
            ],
            /*2*/
            [
                'genere_id' => '1',
                'modello_id' => '34',
                'prezzo' => '46.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '1',
                'modello_id' => '35',
                'prezzo' => '48.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '1',
                'modello_id' => '36',
                'prezzo' => '41.00',
                'sconto' => '0',
            ],
            /*Maglieria&Felpe*/
            /*1*/
            [
                'genere_id' => '1',
                'modello_id' => '37',
                'prezzo' => '33.50',
                'sconto' => '10',
            ],
            /*2*/
            [
                'genere_id' => '1',
                'modello_id' => '38',
                'prezzo' => '41.99',
                'sconto' => '15',
            ],
            /*3*/
            [
                'genere_id' => '1',
                'modello_id' => '39',
                'prezzo' => '29.99',
                'sconto' => '10',
            ],
            /*4*/
            [
                'genere_id' => '1',
                'modello_id' => '40',
                'prezzo' => '35.00',
                'sconto' => '15',
            ],
            /*Pantaloni*/
            /*1*/
            [
                'genere_id' => '1',
                'modello_id' => '41',
                'prezzo' => '36.50',
                'sconto' => '10',
            ],
            /*2*/
            [
                'genere_id' => '1',
                'modello_id' => '42',
                'prezzo' => '29.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '1',
                'modello_id' => '43',
                'prezzo' => '36.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '1',
                'modello_id' => '44',
                'prezzo' => '33.00',
                'sconto' => '0',
            ],
            /*Sport*/
            /*1*/
            [
                'genere_id' => '1',
                'modello_id' => '45',
                'prezzo' => '66.50',
                'sconto' => '5',
            ],
            /*2*/
            [
                'genere_id' => '1',
                'modello_id' => '46',
                'prezzo' => '59.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '1',
                'modello_id' => '47',
                'prezzo' => '46.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '1',
                'modello_id' => '48',
                'prezzo' => '71.00',
                'sconto' => '0',
            ],
            /*DONNA*/
            /*Camicie*/
            /*1*/
            [
                'genere_id' => '2',
                'modello_id' => '49',
                'prezzo' => '25.50',
                'sconto' => '5',
            ],
            /*2*/
            [
                'genere_id' => '2',
                'modello_id' => '50',
                'prezzo' => '29.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '2',
                'modello_id' => '51',
                'prezzo' => '31.99',
                'sconto' => '5',
            ],
            /*4*/
            [
                'genere_id' => '2',
                'modello_id' => '52',
                'prezzo' => '33.00',
                'sconto' => '0',
            ],
            /*Giacche*/
            /*1*/
            [
                'genere_id' => '2',
                'modello_id' => '53',
                'prezzo' => '45.50',
                'sconto' => '10',
            ],
            /*2*/
            [
                'genere_id' => '2',
                'modello_id' => '54',
                'prezzo' => '39.99',
                'sconto' => '10',
            ],
            /*3*/
            [
                'genere_id' => '2',
                'modello_id' => '55',
                'prezzo' => '33.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '2',
                'modello_id' => '56',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
            /*Gonne*/
            /*1*/
            [
                'genere_id' => '2',
                'modello_id' => '57',
                'prezzo' => '26.50',
                'sconto' => '0',
            ],
            /*2*/
            [
                'genere_id' => '2',
                'modello_id' => '58',
                'prezzo' => '39.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '2',
                'modello_id' => '59',
                'prezzo' => '33.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '2',
                'modello_id' => '60',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
            /*Jeans*/
            /*1*/
            [
                'genere_id' => '2',
                'modello_id' => '61',
                'prezzo' => '36.50',
                'sconto' => '15',
            ],
            /*2*/
            [
                'genere_id' => '2',
                'modello_id' => '62',
                'prezzo' => '29.99',
                'sconto' => '5',
            ],
            /*3*/
            [
                'genere_id' => '2',
                'modello_id' => '63',
                'prezzo' => '33.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '2',
                'modello_id' => '64',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
            /*Maglieria&Felpe*/
            /*1*/
            [
                'genere_id' => '2',
                'modello_id' => '65',
                'prezzo' => '45.50',
                'sconto' => '15',
            ],
            /*2*/
            [
                'genere_id' => '2',
                'modello_id' => '66',
                'prezzo' => '39.99',
                'sconto' => '20',
            ],
            /*3*/
            [
                'genere_id' => '2',
                'modello_id' => '67',
                'prezzo' => '33.99',
                'sconto' => '10',
            ],
            /*4*/
            [
                'genere_id' => '2',
                'modello_id' => '68',
                'prezzo' => '38.00',
                'sconto' => '10',
            ],
            /*Pantaloni*/
            /*1*/
            [
                'genere_id' => '2',
                'modello_id' => '69',
                'prezzo' => '45.50',
                'sconto' => '5',
            ],
            /*2*/
            [
                'genere_id' => '2',
                'modello_id' => '70',
                'prezzo' => '39.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '2',
                'modello_id' => '71',
                'prezzo' => '33.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '2',
                'modello_id' => '72',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
            /*Premium*/

            /*Sport*/
            /*1*/
            [
                'genere_id' => '2',
                'modello_id' => '73',
                'prezzo' => '45.50',
                'sconto' => '0',
            ],
            /*2*/
            [
                'genere_id' => '2',
                'modello_id' => '74',
                'prezzo' => '39.99',
                'sconto' => '5',
            ],
            /*3*/
            [
                'genere_id' => '2',
                'modello_id' => '75',
                'prezzo' => '33.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '2',
                'modello_id' => '76',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
            /*T-shirt&Polo*/
            /*1*/
            [
                'genere_id' => '2',
                'modello_id' => '77',
                'prezzo' => '26.50',
                'sconto' => '5',
            ],
            /*2*/
            [
                'genere_id' => '2',
                'modello_id' => '78',
                'prezzo' => '29.99',
                'sconto' => '10',
            ],
            /*3*/
            [
                'genere_id' => '2',
                'modello_id' => '79',
                'prezzo' => '33.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '2',
                'modello_id' => '80',
                'prezzo' => '31.00',
                'sconto' => '0',
            ],
            /*Vestiti*/
            /*1*/
            [
                'genere_id' => '2',
                'modello_id' => '81',
                'prezzo' => '45.50',
                'sconto' => '0',
            ],
            /*2*/
            [
                'genere_id' => '2',
                'modello_id' => '82',
                'prezzo' => '39.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '2',
                'modello_id' => '83',
                'prezzo' => '33.99',
                'sconto' => '5',
            ],
            /*4*/
            [
                'genere_id' => '2',
                'modello_id' => '84',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
            /*BAMBINO*/
            /*Camicie*/

            /*Giacche*/
            /*1*/
            [
                'genere_id' => '3',
                'modello_id' => '85',
                'prezzo' => '45.50',
                'sconto' => '10',
            ],
            /*2*/
            [
                'genere_id' => '3',
                'modello_id' => '86',
                'prezzo' => '39.99',
                'sconto' => '15',
            ],
            /*3*/
            [
                'genere_id' => '3',
                'modello_id' => '87',
                'prezzo' => '33.99',
                'sconto' => '15',
            ],
            /*4*/
            [
                'genere_id' => '3',
                'modello_id' => '88',
                'prezzo' => '38.00',
                'sconto' => '10',
            ],
            /*Notte*/

            /*Pantaloni*/
            /*1*/
            [
                'genere_id' => '3',
                'modello_id' => '89',
                'prezzo' => '36.50',
                'sconto' => '0',
            ],
            /*2*/
            [
                'genere_id' => '3',
                'modello_id' => '90',
                'prezzo' => '31.99',
                'sconto' => '5',
            ],
            /*3*/
            [
                'genere_id' => '3',
                'modello_id' => '91',
                'prezzo' => '29.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '3',
                'modello_id' => '92',
                'prezzo' => '26.00',
                'sconto' => '0',
            ],
            /*Pullover&Cardigan*/
            /*1*/
            [
                'genere_id' => '3',
                'modello_id' => '93',
                'prezzo' => '36.50',
                'sconto' => '10',
            ],
            /*2*/
            [
                'genere_id' => '3',
                'modello_id' => '94',
                'prezzo' => '39.99',
                'sconto' => '15',
            ],
            /*3*/
            [
                'genere_id' => '3',
                'modello_id' => '95',
                'prezzo' => '33.99',
                'sconto' => '10',
            ],
            /*4*/
            [
                'genere_id' => '3',
                'modello_id' => '96',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
            /*Sport*/
            /*1*/
            [
                'genere_id' => '3',
                'modello_id' => '97',
                'prezzo' => '36.50',
                'sconto' => '0',
            ],
            /*2*/
            [
                'genere_id' => '3',
                'modello_id' => '98',
                'prezzo' => '29.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '3',
                'modello_id' => '99',
                'prezzo' => '33.99',
                'sconto' => '10',
            ],
            /*4*/
            [
                'genere_id' => '3',
                'modello_id' => '100',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
            /*T-shirt&Top*/
            /*1*/
            [
                'genere_id' => '3',
                'modello_id' => '101',
                'prezzo' => '26.50',
                'sconto' => '0',
            ],
            /*2*/
            [
                'genere_id' => '3',
                'modello_id' => '102',
                'prezzo' => '29.99',
                'sconto' => '5',
            ],
            /*3*/
            [
                'genere_id' => '3',
                'modello_id' => '103',
                'prezzo' => '23.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '3',
                'modello_id' => '104',
                'prezzo' => '28.00',
                'sconto' => '0',
            ],
            /*BAMBINA*/
            /*Cardigan*/
            /*1*/
            [
                'genere_id' => '4',
                'modello_id' => '105',
                'prezzo' => '36.50',
                'sconto' => '10',
            ],
            /*2*/
            [
                'genere_id' => '4',
                'modello_id' => '106',
                'prezzo' => '39.99',
                'sconto' => '15',
            ],
            /*3*/
            [
                'genere_id' => '4',
                'modello_id' => '107',
                'prezzo' => '33.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '4',
                'modello_id' => '108',
                'prezzo' => '38.00',
                'sconto' => '10',
            ],
            /*Giacche*/
            /*1*/
            [
                'genere_id' => '4',
                'modello_id' => '109',
                'prezzo' => '36.50',
                'sconto' => '10',
            ],
            /*2*/
            [
                'genere_id' => '4',
                'modello_id' => '110',
                'prezzo' => '39.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '4',
                'modello_id' => '111',
                'prezzo' => '33.99',
                'sconto' => '20',
            ],
            /*4*/
            [
                'genere_id' => '4',
                'modello_id' => '112',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
            /*Gonne*/
            /*1*/
            [
                'genere_id' => '4',
                'modello_id' => '113',
                'prezzo' => '26.50',
                'sconto' => '0',
            ],
            /*2*/
            [
                'genere_id' => '4',
                'modello_id' => '114',
                'prezzo' => '29.99',
                'sconto' => '5',
            ],
            /*3*/
            [
                'genere_id' => '4',
                'modello_id' => '115',
                'prezzo' => '33.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '4',
                'modello_id' => '116',
                'prezzo' => '28.00',
                'sconto' => '0',
            ],
            /*Pantaloni*/
            /*1*/
            [
                'genere_id' => '4',
                'modello_id' => '117',
                'prezzo' => '26.50',
                'sconto' => '0',
            ],
            /*2*/
            [
                'genere_id' => '4',
                'modello_id' => '118',
                'prezzo' => '29.99',
                'sconto' => '5',
            ],
            /*3*/
            [
                'genere_id' => '4',
                'modello_id' => '119',
                'prezzo' => '33.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '4',
                'modello_id' => '120',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
            /*Sport*/
            /*1*/
            [
                'genere_id' => '4',
                'modello_id' => '121',
                'prezzo' => '26.50',
                'sconto' => '5',
            ],
            /*2*/
            [
                'genere_id' => '4',
                'modello_id' => '122',
                'prezzo' => '29.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '4',
                'modello_id' => '123',
                'prezzo' => '33.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '4',
                'modello_id' => '124',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
            /*T-shirt&Top*/
            /*1*/
            [
                'genere_id' => '4',
                'modello_id' => '125',
                'prezzo' => '26.50',
                'sconto' => '5',
            ],
            /*2*/
            [
                'genere_id' => '4',
                'modello_id' => '126',
                'prezzo' => '29.99',
                'sconto' => '0',
            ],
            /*3*/
            [
                'genere_id' => '4',
                'modello_id' => '127',
                'prezzo' => '23.99',
                'sconto' => '5',
            ],
            /*4*/
            [
                'genere_id' => '4',
                'modello_id' => '128',
                'prezzo' => '28.00',
                'sconto' => '0',
            ],
            /*Vestiti*/
            /*1*/
            [
                'genere_id' => '4',
                'modello_id' => '129',
                'prezzo' => '36.50',
                'sconto' => '0',
            ],
            /*2*/
            [
                'genere_id' => '4',
                'modello_id' => '130',
                'prezzo' => '39.99',
                'sconto' => '10',
            ],
            /*3*/
            [
                'genere_id' => '4',
                'modello_id' => '131',
                'prezzo' => '33.99',
                'sconto' => '0',
            ],
            /*4*/
            [
                'genere_id' => '4',
                'modello_id' => '132',
                'prezzo' => '38.00',
                'sconto' => '0',
            ],
        ]);
    }

}

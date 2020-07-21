<?php

use Illuminate\Database\Seeder;

class ModelloTableSeeder extends Seeder {

    public function run()
    {
        //eliminiamo eventuali utenti già presenti
        DB::table('modello')->delete();

        DB::table('modello')->insert([
            /*UOMO*/
            /*Camicie*/
            [
                'collezione_id' => '2',
                'categoria_id' => '2',
                'marca_id' => '15',
                'nome' => 'Camicia',
                'mediavoto' => '0',
                'datauscita' => '2017-12-21',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 60% cotone, 40% poliestere<br>
<strong>Avvertenze</strong>: Lavaggio a secco possibile<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Francese<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '2',
                'marca_id' => '14',
                'nome' => 'FOXES - Camicia',
                'mediavoto' => '0',
                'datauscita' => '2016-12-13',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 40 gradi, Non asciugare in asciugatrice, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Kent<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '2',
                'marca_id' => '2',
                'nome' => 'Camicia',
                'mediavoto' => '0',
                'datauscita' => '2017-12-02',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 40 gradi, Non asciugare in asciugatrice<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Con bottoni<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Fantasia</strong>: A scacchi',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '2',
                'marca_id' => '2',
                'nome' => 'Camicia',
                'mediavoto' => '0',
                'datauscita' => '2012-12-24',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Avvertenze</strong>: Non asciugare in asciugatrice, Lavaggio a macchina a 30 gradi<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Coreana<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '2',
                'marca_id' => '2',
                'nome' => 'Camicia elegante',
                'mediavoto' => '0',
                'datauscita' => '2019-12-22',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 40 gradi, Non asciugare in asciugatrice<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Kent<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Trasparenza</strong>: Leggera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '2',
                'marca_id' => '2',
                'nome' => 'Camicia elegante',
                'mediavoto' => '0',
                'datauscita' => '2019-12-22',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 40 gradi, Non asciugare in asciugatrice<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Kent<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '2',
                'marca_id' => '6',
                'nome' => 'Camicia',
                'mediavoto' => '0',
                'datauscita' => '2015-12-29',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 40 gradi, Non asciugare in asciugatrice<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Con bottoni<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '2',
                'marca_id' => '9',
                'nome' => 'ORIGINAL STRETCH SLIM FIT - Camicia',
                'mediavoto' => '0',
                'datauscita' => '2017-12-21',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 97% cotone, 3% elastan<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 30 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Kent<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '2',
                'marca_id' => '9',
                'nome' => 'ORIGINAL STRETCH SLIM FIT - Camicia',
                'mediavoto' => '0',
                'datauscita' => '2016-10-07',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 97% cotone, 3% elastan<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 30 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Kent<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Trasparenza</strong>: Leggera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '2',
                'marca_id' => '13',
                'nome' => 'MENS SHABOOYA CAMP SHORT SLEEVE - Camicia',
                'mediavoto' => '0',
                'datauscita' => '2016-06-03',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 30 gradi<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Trekking urbano<br>
<strong>Colletto</strong>: Kent<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Trasparenza</strong>: Leggera<br>
<strong>Fantasia</strong>: Righe',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '2',
                'marca_id' => '9',
                'nome' => 'ORIGINAL STRETCH SLIM FIT - Camicia',
                'mediavoto' => '0',
                'datauscita' => '2017-08-15',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 97% cotone, 3% elastan<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 30 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Kent<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '2',
                'marca_id' => '2',
                'nome' => 'Camicia',
                'mediavoto' => '0',
                'datauscita' => '2016-11-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 70% cotone, 30% lino<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 40 gradi, Non asciugare in asciugatrice, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Coreana<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Trasparenza</strong>: Leggera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            /*T-shirt&Polo*/
            [
                'collezione_id' => '2',
                'categoria_id' => '1',
                'marca_id' => '27',
                'nome' => 'ALIVE - T-shirt con stampa',
                'mediavoto' => '0',
                'datauscita' => '2015-11-18',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo profondo<br>
<strong>Trasparenza</strong>: Leggera<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '1',
                'marca_id' => '9',
                'nome' => 'CHEST LOGO TEE - T-shirt',
                'mediavoto' => '0',
                'datauscita' => '2015-11-19',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Materiale</strong>: Jersey<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 40 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Righe',
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '1',
                'marca_id' => '26',
                'nome' => 'JAKE - T-shirt con stampa',
                'mediavoto' => '0',
                'datauscita' => '2017-11-20',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Materiale</strong>: Jersey<br>
<strong>Avvertenze</strong>: Non asciugare in asciugatrice, Lavaggio a macchina a 30 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '1',
                'marca_id' => '9',
                'nome' => 'T-shirt a righe',
                'mediavoto' => '0',
                'datauscita' => '2014-11-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Materiale</strong>: Jersey<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 40 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Righe',
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '1',
                'marca_id' => '2',
                'nome' => 'T-shirt con stampa',
                'mediavoto' => '0',
                'datauscita' => '2019-11-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Materiale</strong>: Jersey<br>
<strong>Avvertenze</strong>: Non asciugare in asciugatrice, Lavaggio a macchina a 30 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '1',
                'marca_id' => '2',
                'nome' => 'T-shirt con stampa',
                'mediavoto' => '0',
                'datauscita' => '2017-06-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Materiale</strong>: Jersey<br>
<strong>Avvertenze</strong>: Non asciugare in asciugatrice, Lavaggio a macchina a 30 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '1',
                'marca_id' => '2',
                'nome' => '5 PACK - T-shirt basic',
                'mediavoto' => '0',
                'datauscita' => '2015-07-08',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Avvertenze</strong>: Non asciugare in asciugatrice, Lavaggio a macchina a 30 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '1',
                'marca_id' => '2',
                'nome' => 'T-shirt',
                'mediavoto' => '0',
                'datauscita' => '2015-11-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Materiale</strong>: Jersey<br>
<strong>Avvertenze</strong>: Non asciugare in asciugatrice, Lavaggio a macchina a 30 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '1',
                'marca_id' => '21',
                'nome' => 'ALL OVER FLOWER - Polo',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Materiale</strong>: Jersey<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 40 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Polo<br>
<strong>Fantasia</strong>: Floreale',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '1',
                'marca_id' => '2',
                'nome' => 'T-shirt con stampa',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 80% cotone, 20% poliestere<br>
<strong>Materiale</strong>: Jersey<br>
<strong>Avvertenze</strong>: Non asciugare in asciugatrice, Lavaggio a macchina a 30 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Melange',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '1',
                'marca_id' => '5',
                'nome' => 'JORJUNON TEE CREW NECK - T-shirt con stampa',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Materiale</strong>: Jersey<br>
<strong>Avvertenze</strong>: Lavaggio a macchina a 40 gradi<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Floreale',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '1',
                'marca_id' => '9',
                'nome' => 'T-shirt con stampa',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br>
<strong>Materiale</strong>: Jersey<br>
<strong>Avvertenze</strong>: Non asciugare in asciugatrice, Lavaggio a macchina a 30 gradi, Lavaggio delicato<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            /*Completi&Cravatte*/
            [
                'collezione_id' => '1',
                'categoria_id' => '7',
                'marca_id' => '12',
                'nome' => 'SLHSLIM MYLOLOGAN SUIT SET - Completo',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 65% poliestere, 33% viscosa, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Colletto</strong>: Bavero<br>
<strong>Chiusura</strong>: Bottoni',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '7',
                'marca_id' => '11',
                'nome' => 'PLAIN WEDDING - Completo',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 65% poliestere, 33% viscosa, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Colletto</strong>: Bavero<br>
<strong>Chiusura</strong>: Bottoni',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '7',
                'marca_id' => '10',
                'nome' => 'ABRUZZO SLIM - Completo',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 65% poliestere, 33% viscosa, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Colletto</strong>: Bavero<br>
<strong>Chiusura</strong>: Bottoni',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '7',
                'marca_id' => '11',
                'nome' => 'BLUE CHECK 3PCS SUIT - Completo',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 65% poliestere, 33% viscosa, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Colletto</strong>: Bavero<br>
<strong>Chiusura</strong>: Bottoni',
            ],
            /*Giacche*/
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '16',
                'nome' => 'LA MARTINA QUIRICO - Giacca da mezza stagione',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Foderato<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '3',
                'nome' => 'PACKABLE JACKET - Giacca a vento',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Foderato<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '17',
                'nome' => 'JAVIER - Giubbotto Bomber',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Foderato<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '17',
                'nome' => 'Giubbotto',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Foderato<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            /*Jeans*/
            [
                'collezione_id' => '2',
                'categoria_id' => '6',
                'marca_id' => '6',
                'nome' => 'JOSH - Shorts di jeans',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  99% cotone, 1% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Tasche</strong>: Tasche posteriori, Tasche laterali',
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '6',
                'marca_id' => '6',
                'nome' => 'Shorts',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  99% cotone, 1% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Tasche</strong>: Tasche posteriori, Tasche laterali',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '6',
                'marca_id' => '6',
                'nome' => 'JOSH - Shorts di jeans',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  99% cotone, 1% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Tasche</strong>: Tasche posteriori, Tasche laterali',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '6',
                'marca_id' => '6',
                'nome' => 'JOSH - Shorts',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  99% cotone, 1% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Tasche</strong>: Tasche posteriori, Tasche laterali',
            ],
            /*Maglieria&Felpe*/
            [
                'collezione_id' => '1',
                'categoria_id' => '5',
                'marca_id' => '6',
                'nome' => 'TOM TAILOR PULLOVER - Maglione',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Coreana<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '5',
                'marca_id' => '6',
                'nome' => 'STRICKPULLOVER - Maglione',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Coreana<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '5',
                'marca_id' => '6',
                'nome' => 'STRICKPULLOVER MIT STR - Maglione',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Coreana<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '5',
                'marca_id' => '6',
                'nome' => 'STRICKJACKEN FEINER',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Coreana<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            /*Pantaloni*/
            [
                'collezione_id' => '2',
                'categoria_id' => '4',
                'marca_id' => '5',
                'nome' => 'MARCO BOWIE',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  98% cotone, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vitato</strong>: Normale<br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '5',
                'nome' => 'MARCO BOWIE - Chino',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  98% cotone, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vitato</strong>: Normale<br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '5',
                'nome' => 'Chino',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  98% cotone, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vitato</strong>: Normale<br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '2',
                'categoria_id' => '4',
                'marca_id' => '5',
                'nome' => 'MARCO BOWIE - Chino',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  98% cotone, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vitato</strong>: Normale<br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            /*Sport*/
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'DRY TEE SAVAGE - T-shirt con stampa',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  59% cotone, 41% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Running<br>
<strong>Scollo</strong>: Tondo<br>
<strong>Trasparenza</strong>: Leggera',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'DRY TEE SAVAGE',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  59% cotone, 41% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Running<br>
<strong>Scollo</strong>: Tondo<br>
<strong>Trasparenza</strong>: Leggera',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'T-shirt con stampa',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  59% cotone, 41% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Running<br>
<strong>Scollo</strong>: Tondo<br>
<strong>Trasparenza</strong>: Leggera',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'T-shirt',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>:  59% cotone, 41% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Running<br>
<strong>Scollo</strong>: Tondo<br>
<strong>Trasparenza</strong>: Leggera',
            ],
            /*DONNA*/
            /*Camicie*/
            [
                'collezione_id' => '3',
                'categoria_id' => '2',
                'marca_id' => '8',
                'nome' => 'Camicia',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% viscosa<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Righe<br>
<strong>Trasparenza</strong>: Leggera',
            ],
            [
                'collezione_id' => '3',
                'categoria_id' => '2',
                'marca_id' => '8',
                'nome' => 'Camicia',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% viscosa<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Righe<br>
<strong>Trasparenza</strong>: Leggera',
            ],
            [
                'collezione_id' => '3',
                'categoria_id' => '2',
                'marca_id' => '8',
                'nome' => 'Camicia',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% viscosa<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Righe<br>
<strong>Trasparenza</strong>: Leggera',
            ],
            [
                'collezione_id' => '3',
                'categoria_id' => '2',
                'marca_id' => '8',
                'nome' => 'Camicia',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% viscosa<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Righe<br>
<strong>Trasparenza</strong>: Leggera',
            ],
            /*Giacche*/
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '18',
                'nome' => 'CHAQ KENDALL',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 79% poliestere, 16% viscosa, 5% elastan<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Colletto</strong>: Bavero<br>
<strong>Chiusura</strong>: Bottoni',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '18',
                'nome' => 'CHAQ KENDALL - Blazer',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 79% poliestere, 16% viscosa, 5% elastan<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Colletto</strong>: Bavero<br>
<strong>Chiusura</strong>: Bottoni',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '18',
                'nome' => 'Blazer',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 79% poliestere, 16% viscosa, 5% elastan<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Colletto</strong>: Bavero<br>
<strong>Chiusura</strong>: Bottoni',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '18',
                'nome' => 'CHAQ KENDALL - Blazer',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 79% poliestere, 16% viscosa, 5% elastan<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Colletto</strong>: Bavero<br>
<strong>Chiusura</strong>: Bottoni',
            ],
            /*Gonne*/
            [
                'collezione_id' => '1',
                'categoria_id' => '12',
                'marca_id' => '8',
                'nome' => 'MIT KNÖPFEN - Gonna a portafoglio',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '12',
                'marca_id' => '8',
                'nome' => 'MIT KNÖPFEN',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '12',
                'marca_id' => '8',
                'nome' => 'Gonna a portafoglio',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '12',
                'marca_id' => '8',
                'nome' => 'MIT KNÖPFEN - Gonna',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            /*Jeans*/
            [
                'collezione_id' => '1',
                'categoria_id' => '6',
                'marca_id' => '7',
                'nome' => 'SHEEGO CAPRI-JEANS - Jeans',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 98% cotone, 2% elastan<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '6',
                'marca_id' => '7',
                'nome' => 'SHEEGO CAPRI-JEANS - Jeans a zampa',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 98% cotone, 2% elastan<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '6',
                'marca_id' => '7',
                'nome' => 'SHEEGO CAPRI-JEANS',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 98% cotone, 2% elastan<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '6',
                'marca_id' => '7',
                'nome' => 'Jeans a zampa d\'elefante',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 98% cotone, 2% elastan<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale',
            ],
            /*Maglieria&Felpe*/
            [
                'collezione_id' => '1',
                'categoria_id' => '5',
                'marca_id' => '7',
                'nome' => 'Cardigan',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 60% viscosa, 40% cotone<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Trasparenza</strong>: Forte<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '5',
                'marca_id' => '7',
                'nome' => 'Cardigan',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 60% viscosa, 40% cotone<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Trasparenza</strong>: Forte<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '5',
                'marca_id' => '7',
                'nome' => 'Cardigan',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 60% viscosa, 40% cotone<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Trasparenza</strong>: Forte<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '5',
                'marca_id' => '7',
                'nome' => 'Cardigan',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 60% viscosa, 40% cotone<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Trasparenza</strong>: Forte<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            /*Pantaloni*/
            [
                'collezione_id' => '3',
                'categoria_id' => '4',
                'marca_id' => '7',
                'nome' => 'Shorts',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 95% viscosa, 5% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Alta<br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '7',
                'nome' => 'Shorts',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 95% viscosa, 5% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Alta<br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '7',
                'nome' => 'Shorts',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 95% viscosa, 5% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Alta<br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '3',
                'categoria_id' => '4',
                'marca_id' => '7',
                'nome' => 'Shorts',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 95% viscosa, 5% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Alta<br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            /*Premium*/

            /*Sport*/
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'AIR - Collant',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 83% poliestere, 17% elastan<br>
<strong>Composizione parte inferiore</strong>: 75% nylon, 25% elastan<br>
<strong>Composizione inserto</strong>: 94% poliestere, 6% elastan<br>
<strong>Materiale</strong>: Rete, jersey<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>tipo di sport</strong>: Running<br>
<strong>Vita</strong>: Elastici, Regolabile<br>
<strong>Funzione</strong>: Traspirante, asciugatura rapida',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'Collant',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 83% poliestere, 17% elastan<br>
<strong>Composizione parte inferiore</strong>: 75% nylon, 25% elastan<br>
<strong>Composizione inserto</strong>: 94% poliestere, 6% elastan<br>
<strong>Materiale</strong>: Rete, jersey<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>tipo di sport</strong>: Running<br>
<strong>Vita</strong>: Elastici, Regolabile<br>
<strong>Funzione</strong>: Traspirante, asciugatura rapida',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'AIR',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 83% poliestere, 17% elastan<br>
<strong>Composizione parte inferiore</strong>: 75% nylon, 25% elastan<br>
<strong>Composizione inserto</strong>: 94% poliestere, 6% elastan<br>
<strong>Materiale</strong>: Rete, jersey<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>tipo di sport</strong>: Running<br>
<strong>Vita</strong>: Elastici, Regolabile<br>
<strong>Funzione</strong>: Traspirante, asciugatura rapida',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'AIR - Collant',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 83% poliestere, 17% elastan<br>
<strong>Composizione parte inferiore</strong>: 75% nylon, 25% elastan<br>
<strong>Composizione inserto</strong>: 94% poliestere, 6% elastan<br>
<strong>Materiale</strong>: Rete, jersey<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>tipo di sport</strong>: Running<br>
<strong>Vita</strong>: Elastici, Regolabile<br>
<strong>Funzione</strong>: Traspirante, asciugatura rapida',
            ],
            /*T-shirt&Polo*/
            [
                'collezione_id' => '3',
                'categoria_id' => '1',
                'marca_id' => '7',
                'nome' => 'SHEEGO',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: tondo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '1',
                'marca_id' => '7',
                'nome' => 'SHEEGO - T-shirt basic',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: tondo',
            ],
            [
                'collezione_id' => '3',
                'categoria_id' => '1',
                'marca_id' => '7',
                'nome' => 'Basic T-shirt',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: tondo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '1',
                'marca_id' => '7',
                'nome' => 'T-shirt',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: tondo',
            ],
            /*Vestiti*/
            [
                'collezione_id' => '3',
                'categoria_id' => '10',
                'marca_id' => '8',
                'nome' => 'Vestito estivo',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: A V profondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '3',
                'categoria_id' => '10',
                'marca_id' => '8',
                'nome' => 'SCHWARZES KLEID MIT GUIPURE - Vestito estivo',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: A V profondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '3',
                'categoria_id' => '10',
                'marca_id' => '8',
                'nome' => 'Vestito',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: A V profondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '3',
                'categoria_id' => '10',
                'marca_id' => '8',
                'nome' => 'SCHWARZES KLEID MIT GUIPURE',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Fodera</strong>: 100% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: A V profondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            /*BAMBINO*/
            /*Camicie*/

            /*Giacche*/
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '19',
                'nome' => 'YOUTH REACTOR',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Fodera</strong>: Non imbottito<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Cappuccio<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Tasche/strong>: Tasche con cerniera<br>
<strong>Polsini</strong>: Elastico',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '19',
                'nome' => 'YOUTH REACTOR - Giacca a vento',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Fodera</strong>: Non imbottito<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Cappuccio<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Tasche/strong>: Tasche con cerniera<br>
<strong>Polsini</strong>: Elastico',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '19',
                'nome' => 'Giacca a vento',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Fodera</strong>: Non imbottito<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Cappuccio<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Tasche/strong>: Tasche con cerniera<br>
<strong>Polsini</strong>: Elastico',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '19',
                'nome' => 'Giacca',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Fodera</strong>: Non imbottito<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Cappuccio<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Tasche/strong>: Tasche con cerniera<br>
<strong>Polsini</strong>: Elastico',
            ],
            /*Notte*/

            /*Pantaloni*/
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '20',
                'nome' => 'NKMSCOTT LONG - Shorts',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 75% cotone, 25% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Fantasia</strong>: Melange<br>
<strong>Tasche/strong>: Tache posteriori, Tasche laterali<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '20',
                'nome' => 'NKMSCOTT LONG',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 75% cotone, 25% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Fantasia</strong>: Melange<br>
<strong>Tasche/strong>: Tache posteriori, Tasche laterali<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '20',
                'nome' => 'NKMSCOTT LONG - Shorts',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 75% cotone, 25% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Fantasia</strong>: Melange<br>
<strong>Tasche/strong>: Tache posteriori, Tasche laterali<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '20',
                'nome' => 'Shorts',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 75% cotone, 25% poliestere<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Vita</strong>: Normale<br>
<strong>Fantasia</strong>: Melange<br>
<strong>Tasche/strong>: Tache posteriori, Tasche laterali<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            /*Pullover&Cardigan*/
            [
                'collezione_id' => '1',
                'categoria_id' => '14',
                'marca_id' => '21',
                'nome' => 'ESSENTIAL LOGO - Felpa',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '14',
                'marca_id' => '21',
                'nome' => 'ESSENTIAL',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '14',
                'marca_id' => '21',
                'nome' => 'ESSENTIAL LOGO - Felpa',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '14',
                'marca_id' => '21',
                'nome' => 'Felpa',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa<br>
<strong>Dettagli</strong>: Fascia elastica',
            ],
            /*Sport*/
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '4',
                'nome' => 'T-shirt',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Training<br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa fotografica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '4',
                'nome' => 'MARVEL PAN',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Training<br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa fotografica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '4',
                'nome' => 'T-shirt con stampa',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Training<br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa fotografica',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '4',
                'nome' => 'MARVEL PAN - T-shirt',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Training<br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa fotografica',
            ],
            /*T-shirt&Top*/
            [
                'collezione_id' => '1',
                'categoria_id' => '11',
                'marca_id' => '22',
                'nome' => 'T-shirt',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '11',
                'marca_id' => '22',
                'nome' => 'DISTANT FORTUNE',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '11',
                'marca_id' => '22',
                'nome' => 'T-shirt con stampa',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '11',
                'marca_id' => '22',
                'nome' => 'DISTANT FORTUNE - T-shirt',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% cotone<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Fantasia</strong>: Stampa',
            ],
            /*BAMBINA*/
            /*Cardigan*/
            [
                'collezione_id' => '1',
                'categoria_id' => '16',
                'marca_id' => '23',
                'nome' => 'BOLERO',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 92% cotone, 8% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: A V profondo<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Trasparenza</strong>: Leggera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '16',
                'marca_id' => '23',
                'nome' => 'BOLERO 2 PACK - Cardigan',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 92% cotone, 8% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: A V profondo<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Trasparenza</strong>: Leggera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '16',
                'marca_id' => '23',
                'nome' => 'BOLERO - Cardigan',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 92% cotone, 8% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: A V profondo<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Trasparenza</strong>: Leggera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '16',
                'marca_id' => '23',
                'nome' => 'Cardigan',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 92% cotone, 8% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: A V profondo<br>
<strong>Chiusura</strong>: Bottoni<br>
<strong>Trasparenza</strong>: Leggera<br>
<strong>Fantasia</strong>: Monocromo',
            ],
            /*Giacche*/
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '24',
                'nome' => 'GIGAX - Giacca da mezza stagione',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% nylon<br>
<strong>Materiale dell\'imbottitura</strong>: 100% poliestere<br>
<strong>Fodera</strong>: 100% nylon<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Cappuccio<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Tasche</strong>: Chiusura a cerniera, Tasca interna<br>
<strong>Cappuccio</strong>: Foderato',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '24',
                'nome' => 'Giacca',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% nylon<br>
<strong>Materiale dell\'imbottitura</strong>: 100% poliestere<br>
<strong>Fodera</strong>: 100% nylon<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Cappuccio<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Tasche</strong>: Chiusura a cerniera, Tasca interna<br>
<strong>Cappuccio</strong>: Foderato',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '24',
                'nome' => 'GIGAX',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% nylon<br>
<strong>Materiale dell\'imbottitura</strong>: 100% poliestere<br>
<strong>Fodera</strong>: 100% nylon<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Cappuccio<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Tasche</strong>: Chiusura a cerniera, Tasca interna<br>
<strong>Cappuccio</strong>: Foderato',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '3',
                'marca_id' => '24',
                'nome' => 'Giacca da mezza stagione',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% nylon<br>
<strong>Materiale dell\'imbottitura</strong>: 100% poliestere<br>
<strong>Fodera</strong>: 100% nylon<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Colletto</strong>: Cappuccio<br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Tasche</strong>: Chiusura a cerniera, Tasca interna<br>
<strong>Cappuccio</strong>: Foderato',
            ],
            /*Gonne*/
            [
                'collezione_id' => '1',
                'categoria_id' => '12',
                'marca_id' => '18',
                'nome' => 'COLUMBIA - Gonna di jeans',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 71% cotone, 25% poliestere, 2% elastan, 2% viscosa<br>
<strong>Materiale</strong>: Jeans<br>
<strong>Fodera</strong>: 100% nylon<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Dettagli/strong>: Paillette',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '12',
                'marca_id' => '18',
                'nome' => 'Gonna',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 71% cotone, 25% poliestere, 2% elastan, 2% viscosa<br>
<strong>Materiale</strong>: Jeans<br>
<strong>Fodera</strong>: 100% nylon<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Dettagli/strong>: Paillette',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '12',
                'marca_id' => '18',
                'nome' => 'Gonna di jeans',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 71% cotone, 25% poliestere, 2% elastan, 2% viscosa<br>
<strong>Materiale</strong>: Jeans<br>
<strong>Fodera</strong>: 100% nylon<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Dettagli/strong>: Paillette',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '12',
                'marca_id' => '18',
                'nome' => 'COLUMBIA',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 71% cotone, 25% poliestere, 2% elastan, 2% viscosa<br>
<strong>Materiale</strong>: Jeans<br>
<strong>Fodera</strong>: 100% nylon<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Chiusura</strong>: Cerniera<br>
<strong>Dettagli/strong>: Paillette',
            ],
            /*Pantaloni*/
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '20',
                'nome' => 'NKFRANDI - Shorts di jeans',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 71% cotone, 24% poliestere, 3% viscosa, 2% elastan<br>
<strong>Materiale</strong>: Jeans<br>
<strong>Fodera</strong>: Senza imbottitura<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Tasche</strong>: Tasche posteriori, Tasche laterali<br>
<strong>Vita/strong>: Alta',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '20',
                'nome' => 'Shorts',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 71% cotone, 24% poliestere, 3% viscosa, 2% elastan<br>
<strong>Materiale</strong>: Jeans<br>
<strong>Fodera</strong>: Senza imbottitura<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Tasche</strong>: Tasche posteriori, Tasche laterali<br>
<strong>Vita/strong>: Alta',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '20',
                'nome' => 'Shorts di jeans',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 71% cotone, 24% poliestere, 3% viscosa, 2% elastan<br>
<strong>Materiale</strong>: Jeans<br>
<strong>Fodera</strong>: Senza imbottitura<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Tasche</strong>: Tasche posteriori, Tasche laterali<br>
<strong>Vita/strong>: Alta',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '4',
                'marca_id' => '20',
                'nome' => 'NKFRANDI',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 71% cotone, 24% poliestere, 3% viscosa, 2% elastan<br>
<strong>Materiale</strong>: Jeans<br>
<strong>Fodera</strong>: Senza imbottitura<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Chiusura</strong>: Cerniera nascosta<br>
<strong>Tasche</strong>: Tasche posteriori, Tasche laterali<br>
<strong>Vita/strong>: Alta',
            ],
            /*Sport*/
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'DRY ACADEMY SHORT - Pantaloncini sportivi',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Materiale inserto</strong>: 100% poliestere<br>
<strong>Tecnologia</strong>: Dri-Fit (Nike)<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Training<br>
<strong>Tasche/strong>: Tasche laterali<br>
<strong>Vita</strong>: Elastici, Regolabile<br>
<strong>Funzione</strong>: Traspirante, asciugatura rapida',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'Pantaloncini',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Materiale inserto</strong>: 100% poliestere<br>
<strong>Tecnologia</strong>: Dri-Fit (Nike)<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Training<br>
<strong>Tasche/strong>: Tasche laterali<br>
<strong>Vita</strong>: Elastici, Regolabile<br>
<strong>Funzione</strong>: Traspirante, asciugatura rapida',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'Pantaloncini sportivi',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Materiale inserto</strong>: 100% poliestere<br>
<strong>Tecnologia</strong>: Dri-Fit (Nike)<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Training<br>
<strong>Tasche/strong>: Tasche laterali<br>
<strong>Vita</strong>: Elastici, Regolabile<br>
<strong>Funzione</strong>: Traspirante, asciugatura rapida',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '8',
                'marca_id' => '1',
                'nome' => 'DRY ACADEMY SHORT',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Materiale inserto</strong>: 100% poliestere<br>
<strong>Tecnologia</strong>: Dri-Fit (Nike)<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Tipo di sport</strong>: Training<br>
<strong>Tasche/strong>: Tasche laterali<br>
<strong>Vita</strong>: Elastici, Regolabile<br>
<strong>Funzione</strong>: Traspirante, asciugatura rapida',
            ],
            /*T-shirt&Top*/
            [
                'collezione_id' => '1',
                'categoria_id' => '11',
                'marca_id' => '20',
                'nome' => 'NKFVINAYA FLOUNCE STRAP - Top',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 98% poliestere, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Quadrato<br>
<strong>Fantasia</strong>: Floreale',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '11',
                'marca_id' => '20',
                'nome' => 'NKFVINAYA - Top',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 98% poliestere, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Quadrato<br>
<strong>Fantasia</strong>: Floreale',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '11',
                'marca_id' => '20',
                'nome' => 'Top',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 98% poliestere, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Quadrato<br>
<strong>Fantasia</strong>: Floreale',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '11',
                'marca_id' => '20',
                'nome' => 'NKFVINAYA FLOUNCE STRAP',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 98% poliestere, 2% elastan<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Quadrato<br>
<strong>Fantasia</strong>: Floreale',
            ],
            /*Vestiti*/
            [
                'collezione_id' => '1',
                'categoria_id' => '10',
                'marca_id' => '25',
                'nome' => 'Vestito elegante',
                'mediavoto' => '0',
                'datauscita' => '2013-09-17',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Composizione parte superiore</strong>: 70% cotone, 30% poliammide<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Chiusura/strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Cintura inclusa, Cucitura sul seno, Sottoveste',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '10',
                'marca_id' => '25',
                'nome' => 'TEEN GIRLS - Vestito elegante',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Composizione parte superiore</strong>: 70% cotone, 30% poliammide<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Chiusura/strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Cintura inclusa, Cucitura sul seno, Sottoveste',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '10',
                'marca_id' => '25',
                'nome' => 'TEEN GIRLS - Vestito',
                'mediavoto' => '0',
                'datauscita' => '2019-08-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Composizione parte superiore</strong>: 70% cotone, 30% poliammide<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Chiusura/strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Cintura inclusa, Cucitura sul seno, Sottoveste',
            ],
            [
                'collezione_id' => '1',
                'categoria_id' => '10',
                'marca_id' => '25',
                'nome' => 'TEEN GIRLS',
                'mediavoto' => '0',
                'datauscita' => '2016-06-01',
                'descrizione' => '<strong>Composizione e istruzioni di lavaggio</strong><br><br>
<strong>Composizione</strong>: 100% poliestere<br>
<strong>Composizione parte superiore</strong>: 70% cotone, 30% poliammide<br><br>
<strong>Dettagli prodotto</strong><br><br>
<strong>Scollo</strong>: Tondo<br>
<strong>Chiusura/strong>: Cerniera<br>
<strong>Fantasia</strong>: Monocromo<br>
<strong>Dettagli</strong>: Cintura inclusa, Cucitura sul seno, Sottoveste',
            ],
        ]);
    }
}

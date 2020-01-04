<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('CarrelloTableSeeder');
        $this->call('CategoriaTableSeeder');
        $this->call('CollezioneTableSeeder');
        $this->call('ColoreTableSeeder');
        $this->call('FasciadetaTableSeeder');
        $this->call('FotoTableSeeder');
        $this->call('GruppohasservizioTableSeeder');
        $this->call('GruppoTableSeeder');
        $this->call('MacrocategoriaTableSeeder');
        $this->call('MarcaTableSeeder');
        $this->call('MaterialeTableSeeder');
        $this->call('ModellohasmaterialeTableSeeder');
        $this->call('ModelloTableSeeder');
        $this->call('OrdineTableSeeder');
        $this->call('PreferitoTableSeeder');
        $this->call('ProfiloTableSeeder');
        $this->call('QuantitaTableSeeder');
        $this->call('ResoTableSeeder');
        $this->call('ServizioTableSeeder');
        $this->call('SessohasmodelloTableSeeder');
        $this->call('SessoTableSeeder');
        $this->call('StileTableSeeder');
        $this->call('TagliaTableSeeder');
        $this->call('UtentehasgruppoTableSeeder');
        $this->call('UtenteTableSeeder');
    }
}

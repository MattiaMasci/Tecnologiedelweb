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

        $this->call('UserTableSeeder');
        $this->call('ProfiloTableSeeder');
        $this->call('CarrelloTableSeeder');
        $this->call('GruppoTableSeeder');
        $this->call('UsershasgruppoTableSeeder');
        $this->call('ServizioTableSeeder');
        $this->call('GruppohasservizioTableSeeder');
        $this->call('MacrocategoriaTableSeeder');
        $this->call('CategoriaTableSeeder');
        $this->call('SessoTableSeeder');
        $this->call('TagliaTableSeeder');
        $this->call('CollezioneTableSeeder');
        $this->call('StileTableSeeder');
        $this->call('ColoreTableSeeder');
        $this->call('MarcaTableSeeder');
        $this->call('ModelloTableSeeder');
        $this->call('FotoTableSeeder');
        $this->call('OrdineTableSeeder');
        $this->call('PreferitoTableSeeder');
        $this->call('QuantitaTableSeeder');
        $this->call('ResoTableSeeder');
        $this->call('SessohasmodelloTableSeeder');
        $this->call('RecensioneTableSeeder');
        $this->call('AltreTableSeeder');
    }
}

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
        $this->call('GruppoTableSeeder');
        $this->call('UsershasgruppoTableSeeder');
        $this->call('ServizioTableSeeder');
        $this->call('GruppohasservizioTableSeeder');
        $this->call('CategoriaTableSeeder');
        $this->call('GenereTableSeeder');
        $this->call('TagliaTableSeeder');
        $this->call('CollezioneTableSeeder');
        $this->call('StileTableSeeder');
        $this->call('ColoreTableSeeder');
        $this->call('MarcaTableSeeder');
        $this->call('ModelloTableSeeder');
        $this->call('CarrelloTableSeeder');
        //$this->call('FotoTableSeeder');
        //$this->call('OrdineTableSeeder');
        $this->call('PreferitoTableSeeder');
        $this->call('QuantitaTableSeeder');
        $this->call('ResoTableSeeder');
        $this->call('GenerehasmodelloTableSeeder');
        $this->call('RecensioneTableSeeder');
        $this->call('GenerehascategoriaTableSeeder');
        //$this->call('CouponTableSeeder');
        //$this->call('AltreTableSeeder');
        //$this->call('ProdottoordinatoTableSeeder');
    }
}

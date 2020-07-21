<?php

use Illuminate\Database\Seeder;

class FotositoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //eliminiamo eventuali foto già presenti
        DB::table('fotosito')->delete();

        DB::table('fotosito')->insert([
            [
                'data' => '',
                'pagina' => 'Home'
            ],
            [
                'data' => '',
                'pagina' => 'Product'
            ],
            [
                'data' => '',
                'pagina' => 'Product Details'
            ],
            [
                'data' => '',
                'pagina' => 'Cart'
            ],
            [
                'data' => '',
                'pagina' => 'Checkout'
            ],
            [
                'data' => '',
                'pagina' => 'Registration'
            ],
            [
                'data' => '',
                'pagina' => 'Reset Password'
            ],
            [
                'data' => '',
                'pagina' => 'Wishlist'
            ],
            [
                'data' => '',
                'pagina' => 'Contact'
            ],
            [
                'data' => '',
                'pagina' => 'Order'
            ],
            [
                'data' => '',
                'pagina' => 'Order Details'
            ],
            [
                'data' => '',
                'pagina' => 'Profile'
            ]
        ]);
    }
}

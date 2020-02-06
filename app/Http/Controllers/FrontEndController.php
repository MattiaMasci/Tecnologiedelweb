<?php

namespace App\Http\Controllers;

use App\Foto;
use App\Modello;
use App\Sessohasmodello;
use App\Sesso;
use App\Categoria;


use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home() {
        return view('home');
    }

    public function product($sesso, $categoria) {

        $sex = Sesso::where('genere', $sesso)->first();
        $sesso = $sex->id;
        $category = Categoria::where('nome', $categoria)->first();
        $categoria = $category->id;

        $search = Sessohasmodello::where('sesso_id', $sesso)->get();
        $i = 0;
        foreach($search as $src) {
            $id = $src->modello_id;
            $modello = Modello::find($id);
            if ($modello->categoria_id == $categoria) {
                $result[$i] = $modello;
                $name[$i] = $modello->nome;
                $i = $i+1;
            }
        }
        //$name sono i nomi di tutti i modelli
        $i = 0;
        foreach($result as $res) {
            $id = $res->id;
            $photo = Foto::where('modello_id', $id)->first();
            $link[$i] = $photo->link;
            $i = $i+1;
        }
        //$link sono tutti link delle foto

        //return $link;
        //return $name;
        return view('product')->with('photo', $link)->with('modello', $name);

    }

    public function productdetail() {
        return view('product-detail');
    }

    public function cart() {
        return view('cart');
    }

    public function checkout() {
        return view('checkout');
    }

    public function contact() {
        return view('contact');
    }

    public function account() {
        return view('account');
    }

    public function wishlist() {
        return view('wishlist');
    }

    public function error() {
        return view('404');
    }
}

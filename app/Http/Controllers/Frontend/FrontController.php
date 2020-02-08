<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Foto;
use App\Modello;
use App\Sessohasmodello;
use App\Sesso;
use App\Categoria;
use App\Altre;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('Frontend.home');
    }

    public function home()
    {
        return view('Frontend.home');
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
            $identificativo[$i] = $photo->id;
            $link[$i] = $photo->data;
            $i = $i+1;
        }
        //$link sono i link delle foto
        //$identificativo sono sono tutti gli id delle foto

        //return $link;
        //return $name;
        return view('Frontend.product')->with('photo', $link)->with('modello', $name)->with('id', $identificativo);

    }

    public function productdetail($id) {
        $photo = Foto::find($id);
        return view('Frontend.product-detail')->with('foto', $photo);
    }

    public function cart() {
        return view('Frontend.cart');
    }

    public function requestpassword() {
        return view('Frontend.password');
    }

    public function resetpassword($token, $email) {
        return view('Frontend.reset-password')->with('token', $token)->with('email', $email);
    }

    public function checkout() {
        return view('Frontend.checkout');
    }

    public function contact() {
        return view('Frontend.contact');
    }

    public function account() {
        return view('Frontend.account');
    }

    public function wishlist() {
        return view('Frontend.wishlist');
    }

    public function error() {
        return view('Frontend.404');
    }
}

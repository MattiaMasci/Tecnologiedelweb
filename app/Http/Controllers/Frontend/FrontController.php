<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Foto;
use App\Modello;
use App\Generehasmodello;
use App\Genere;
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

    public function product($genere, $categoria) {

        $gen = Genere::where('tipo', $genere)->first();
        $idgen = $gen->id;
        $category = Categoria::where('nome', $categoria)->first();
        $categoria = $category->id;

        $search = Generehasmodello::where('genere_id', $idgen)->get();
        $i = 0;
        $result[0] = 0;
        foreach($search as $src) {
            $id = $src->modello_id;
            $modello = Modello::find($id);
            if ($modello->categoria_id == $categoria) {
                $prezzo[$i] = $src->prezzo;
                $result[$i] = $modello;
                $name[$i] = $modello->nome;
                $i = $i+1;
            }
        }
        //$name sono i nomi di tutti i modelli
        //$prezzo sono i prezzi di tutti i modelli
        $i = 0;

        foreach($result as $res) {
            $id = $res->id;
            $photo = Foto::where('modello_id', $id)->first();
            $identificativo[$i] = $photo->id;
            $link[$i] = $photo->data;
            $i = $i+1;
        }
        //$link sono i link delle foto
        //$identificativo sono tutti gli id delle foto

        return view('Frontend.product')
            ->with('genere', $genere)
            ->with('prezzo', $prezzo)
            ->with('photo', $link)
            ->with('modello', $name)
            ->with('id', $identificativo);

    }

    public function productdetail($genere, $id) {
        $photo = Foto::find($id);
        $idmod = $photo->modello_id;
        $search = Genere::where('tipo', $genere)->first();
        $idgen = $search->id;
        $search = Generehasmodello::where('modello_id', $idmod)->get();
        foreach($search as $src) {
            if ($src->genere_id == $idgen) {
                $prezzo = $src->prezzo;
            }
        }
        return view('Frontend.product-detail')
            ->with('prezzo', $prezzo)
            ->with('foto', $photo);
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

<?php

namespace App\Http\Controllers\Frontend;

use App\Carrello;
use App\Collezione;
use App\Colore;
use App\Coupon;
use App\Generehascategoria;
use App\Gruppo;
use App\Http\Controllers\Controller;

use App\Foto;
use App\Mail\MailDevelop;
use App\Mail\OrdineCreato;
use App\Marca;
use App\Modello;
use App\Generehasmodello;
use App\Genere;
use App\Ordine;
use App\Preferito;
use App\Prodottoordinato;
use App\Profilo;
use App\Quantita;
use App\Recensione;
use App\Taglia;
use App\User;
use App\Categoria;
use App\Altre;

use App\Userhasgruppo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class FrontController extends Controller
{
    public function home(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $email = $data['emailsubscriber'];

            Mail::to($email)->send(new MailDevelop);

            return redirect('/home')->withSuccessMessage('Grazie per la tua iscrizione! Ti abbiamo inviato un’email di conferma.');
        }

        if (session('success_message')) {
            Alert::success('Successo!', session('success_message'));
        }
        if (session('warning_message')) {
            Alert::warning('Errore!', session('warning_message'));
        }

        $active_cat = Categoria::where('stato', 1)->get();

        $i = 0;
        foreach ($active_cat as $cat) {
            $home_products = Modello::where('categoria_id', $cat->id)->take(8)->get();

            foreach($home_products as $key => $val) {
                $generehasmodello = Generehasmodello::where('modello_id', $val->id)->first();
                $genere = Genere::find($generehasmodello->genere_id);
                $home_products[$key]->genere = $genere->tipo;
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $home_products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                    $home_products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                    $home_products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$generehasmodello->prezzo</del></span>";
                }
                else {
                    $home_products[$key]->prezzo_normale = "";
                    $home_products[$key]->prezzo = $generehasmodello->prezzo;
                    $home_products[$key]->sconto = "";
                }

                if ($genere->tipo == 'Uomo' || $genere->tipo == 'Donna') {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                } else {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                }
                if (count($quantita) == 0) {
                    $home_products[$key]->stock = "Non in stock";
                    $home_products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                }
                else $home_products[$key]->stock = "In stock";

                $brand_name = Marca::find($val->marca_id);
                $home_products[$key]->marca = $brand_name->nome;

                $photo = Foto::where('modello_id', $val->id)->first();
                $home_products[$key]->identificativo = $photo->id;

                $home_products[$key]->name_cat = $cat->name;

                $altre = Altre::where('foto_id', $photo->id)->get();

                foreach ($altre as $others) {
                    switch ($others->tipo) {
                        case 'slider':
                            {
                                if ($others->posizione == '1') $home_products[$key]->slid1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $home_products[$key]->slid2 = $others->id;
                                    else $home_products[$key]->slid3 = $others->id;
                                }
                            }
                            break;
                        case 'normal':
                            {
                                if ($others->posizione == '2') $home_products[$key]->norm2 = $others->id;
                                else $home_products[$key]->norm3 = $others->id;
                            }
                            break;
                        case 'thumbnail':
                            {
                                if ($others->posizione == '1') $home_products[$key]->thumb1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $home_products[$key]->thumb2 = $others->id;
                                    else $home_products[$key]->thumb3 = $others->id;
                                }
                            }
                            break;
                    }
                }
            }
            if ($i == 0) $home_one = $home_products;
            else if ($i == 1) $home_two = $home_products;
            else if ($i == 2) $home_three = $home_products;
            else $home_four = $home_products;
            $i = $i+1;
        }

        //Latest
        $latest_products = Modello::orderBy('datauscita', 'desc')->take(12)->get();

        foreach($latest_products as $key => $val) {
            $generehasmodello = Generehasmodello::where('modello_id', $val->id)->first();
            $genere = Genere::find($generehasmodello->genere_id);
            $latest_products[$key]->genere = $genere->tipo;

            if ($generehasmodello->sconto > 0) {
                $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                $latest_products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                $latest_products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                $latest_products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$generehasmodello->prezzo</del></span>";
            }
            else {
                $latest_products[$key]->prezzo_normale = "";
                $latest_products[$key]->prezzo = $generehasmodello->prezzo;
                $latest_products[$key]->sconto = "";
            }

            if ($genere->tipo == 'Uomo' || $genere->tipo == 'Donna') {
                $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
            } else {
                $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
            }
            if (count($quantita) == 0) {
                $latest_products[$key]->stock = "Non in stock";
                $latest_products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
            }
            else $latest_products[$key]->stock = "In stock";

            $brand_name = Marca::find($val->marca_id);
            $latest_products[$key]->marca = $brand_name->nome;

            $photo = Foto::where('modello_id', $val->id)->first();
            $latest_products[$key]->identificativo = $photo->id;

            $altre = Altre::where('foto_id', $photo->id)->get();

            foreach ($altre as $others) {
                switch ($others->tipo) {
                    case 'slider':
                        {
                            if ($others->posizione == '1') $latest_products[$key]->slid1 = $others->id;
                            else {
                                if ($others->posizione == '2') $latest_products[$key]->slid2 = $others->id;
                                else $latest_products[$key]->slid3 = $others->id;
                            }
                        }
                        break;
                    case 'normal':
                        {
                            if ($others->posizione == '2') $latest_products[$key]->norm2 = $others->id;
                            else $latest_products[$key]->norm3 = $others->id;
                        }
                        break;
                    case 'thumbnail':
                        {
                            if ($others->posizione == '1') $latest_products[$key]->thumb1 = $others->id;
                            else {
                                if ($others->posizione == '2') $latest_products[$key]->thumb2 = $others->id;
                                else $latest_products[$key]->thumb3 = $others->id;
                            }
                        }
                        break;
                }
            }
        }

        //Popular
        $popular_products = Modello::orderBy('mediavoto', 'desc')->take(12)->get();

        foreach($popular_products as $key => $val) {
            $generehasmodello = Generehasmodello::where('modello_id', $val->id)->first();
            $genere = Genere::find($generehasmodello->genere_id);
            $popular_products[$key]->genere = $genere->tipo;

            if ($generehasmodello->sconto > 0) {
                $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                $popular_products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                $popular_products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                $popular_products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$generehasmodello->prezzo</del></span>";
            }
            else {
                $popular_products[$key]->prezzo_normale = "";
                $popular_products[$key]->prezzo = $generehasmodello->prezzo;
                $popular_products[$key]->sconto = "";
            }

            if ($genere->tipo == 'Uomo' || $genere->tipo == 'Donna') {
                $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
            } else {
                $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
            }
            if (count($quantita) == 0) {
                $popular_products[$key]->stock = "Non in stock";
                $popular_products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
            }
            else $popular_products[$key]->stock = "In stock";

            $brand_name = Marca::find($val->marca_id);
            $popular_products[$key]->marca = $brand_name->nome;

            $photo = Foto::where('modello_id', $val->id)->first();
            $popular_products[$key]->identificativo = $photo->id;

            $altre = Altre::where('foto_id', $photo->id)->get();

            foreach ($altre as $others) {
                switch ($others->tipo) {
                    case 'slider':
                        {
                            if ($others->posizione == '1') $popular_products[$key]->slid1 = $others->id;
                            else {
                                if ($others->posizione == '2') $popular_products[$key]->slid2 = $others->id;
                                else $popular_products[$key]->slid3 = $others->id;
                            }
                        }
                        break;
                    case 'normal':
                        {
                            if ($others->posizione == '2') $popular_products[$key]->norm2 = $others->id;
                            else $popular_products[$key]->norm3 = $others->id;
                        }
                        break;
                    case 'thumbnail':
                        {
                            if ($others->posizione == '1') $popular_products[$key]->thumb1 = $others->id;
                            else {
                                if ($others->posizione == '2') $popular_products[$key]->thumb2 = $others->id;
                                else $popular_products[$key]->thumb3 = $others->id;
                            }
                        }
                        break;
                }
            }
        }

        $occasioni_products_prezzo = Generehasmodello::orderBy('sconto','desc')->get()->unique('modello_id');
        $occasioni_products = collect(new Modello);
        $i = 0;
        if (count($occasioni_products_prezzo) > 11) $n = 12;
        else $n = count($occasioni_products_prezzo);
        foreach ($occasioni_products_prezzo as $item) {
            $addproduct = Modello::where('id', $item->modello_id)->first();
            $occasioni_products->push($addproduct);
            $array_sconti[$i] = $item->sconto;
            $i = $i+1;
            if ($i == $n) break;
        }

        $i = 0;
        foreach($occasioni_products as $key => $val) {
            $generehasmodello = Generehasmodello::where('modello_id', $val->id)
                ->where('sconto', $array_sconti[$i])
                ->first();
            $genere = Genere::find($generehasmodello->genere_id);
            $occasioni_products[$key]->genere = $genere->tipo;

            if ($generehasmodello->sconto > 0) {
                $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                $occasioni_products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                $occasioni_products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                $occasioni_products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$generehasmodello->prezzo</del></span>";
            }
            else {
                $occasioni_products[$key]->prezzo_normale = "";
                $occasioni_products[$key]->prezzo = $generehasmodello->prezzo;
                $occasioni_products[$key]->sconto = "";
            }

            if ($genere->tipo == 'Uomo' || $genere->tipo == 'Donna') {
                $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
            } else {
                $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
            }
            if (count($quantita) == 0) {
                $occasioni_products[$key]->stock = "Non in stock";
                $occasioni_products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
            }
            else $occasioni_products[$key]->stock = "In stock";

            $brand_name = Marca::find($val->marca_id);
            $occasioni_products[$key]->marca = $brand_name->nome;

            $photo = Foto::where('modello_id', $val->id)->first();
            $occasioni_products[$key]->identificativo = $photo->id;

            $altre = Altre::where('foto_id', $photo->id)->get();

            foreach ($altre as $others) {
                switch ($others->tipo) {
                    case 'slider':
                        {
                            if ($others->posizione == '1') $occasioni_products[$key]->slid1 = $others->id;
                            else {
                                if ($others->posizione == '2') $occasioni_products[$key]->slid2 = $others->id;
                                else $occasioni_products[$key]->slid3 = $others->id;
                            }
                        }
                        break;
                    case 'normal':
                        {
                            if ($others->posizione == '2') $occasioni_products[$key]->norm2 = $others->id;
                            else $occasioni_products[$key]->norm3 = $others->id;
                        }
                        break;
                    case 'thumbnail':
                        {
                            if ($others->posizione == '1') $occasioni_products[$key]->thumb1 = $others->id;
                            else {
                                if ($others->posizione == '2') $occasioni_products[$key]->thumb2 = $others->id;
                                else $occasioni_products[$key]->thumb3 = $others->id;
                            }
                        }
                        break;
                }
            }
            $i = $i+1;
        }

        $collections = Collezione::where('stato', 1)->get();

        $topBrand = Marca::where('stato', 1)->where('top', 1)->first();
        if (empty($topBrand)) {
            $topBrand = Marca::where('stato', 1)->first();
            $brands = Marca::where('stato', 1)->where('id', '!=',  $topBrand->id)->get();
        } else  $brands = Marca::where('stato', 1)->where('top', 0)->get();


        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $i = 0;
        foreach ($active_cat as $key => $val) {
            if ($i == 0) {
                $active_cat[$key]->stampa = "<li class=\"active\"><a href=\"#$val->id\" data-toggle=\"tab\">$val->name</a></li>";
                $stampa_categorie[0] = $val->id;
            }
            else {
                $active_cat[$key]->stampa = "<li><a href=\"#$val->id\" data-toggle=\"tab\">$val->name</a></li>";
                $stampa_categorie[$i] = $val->id;
            }
            $i = $i+1;
        }

        $bodyclass = "";
        $title = "Home | Xenomod";

        return view('Frontend.home')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('totale'))
            ->with(compact('collections'))
            ->with(compact('brands'))
            ->with(compact('topBrand'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('numero_prodotti'))
            ->with(compact('carrello'))
            ->with(compact('home_one'))
            ->with(compact('home_two'))
            ->with(compact('home_three'))
            ->with(compact('home_four'))
            ->with(compact('latest_products'))
            ->with(compact('popular_products'))
            ->with(compact('occasioni_products'))
            ->with(compact('active_cat'))
            ->with(compact('stampa_categorie'));
    }

    public function orderproducts(Request $request) {
        $data = $request->all();
        $valore = $data['valore'];

        if (!empty($data['marca'])) {
            $marca = Marca::where('reference', $data['marca'])->first();
            $temp = Modello::where('marca_id', $marca->id)->get();

            $tempgen = $data['genere'];
            $gen = Genere::where('tipo', $data['genere'])->first();

            $products = collect(new Modello);

            //Prendo tutti i modelli di cui ho bisogno
            foreach ($temp as $temporanea) {
                $generehasmodello = Generehasmodello::where('modello_id', $temporanea->id)->where('genere_id', $gen->id)->first();
                if (!empty($generehasmodello)) $products->push($temporanea);
            }

            $tempcat = '... Tutti gli Articoli';

            foreach($products as $key => $val){
                $src = Generehasmodello::where('genere_id', $gen->id)->where('modello_id', $val->id)->first();
                if ($src->sconto > 0) {
                    $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                    $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                    $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                }
                else {
                    $products[$key]->prezzo_normale = "";
                    $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                    $products[$key]->sconto = "";
                }

                if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                } else {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                }
                if (count($quantita) == 0) {
                    $products[$key]->stock = "Non in stock";
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                }
                else $products[$key]->stock = "In stock";

                $photo = Foto::where('modello_id', $val->id)->first();
                $products[$key]->identificativo = $photo->id;

                $altre = Altre::where('foto_id', $photo->id)->get();

                foreach($altre as $others){
                    switch ($others->tipo) {
                        case 'slider': {
                            if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                else $products[$key]->slid3 = $others->id;
                            }
                        }
                            break;
                        case 'normal': {
                            if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                            else $products[$key]->norm3 = $others->id;
                        }
                            break;
                        case 'thumbnail': {
                            if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                else $products[$key]->thumb3 = $others->id;
                            }
                        }
                            break;
                    }
                }
            }
        } else {
            if (!empty($data['collezione'])) {
                $collezione = Collezione::where('reference', $data['collezione'])->first();
                $products = Modello::where('collezione_id', $collezione->id)->get();

                $tempgen = $data['genere'];
                $gen = Genere::where('tipo', $data['genere'])->first();

                $tempcat = '... Tutti gli Articoli';

                foreach($products as $key => $val){
                    $src = Generehasmodello::where('genere_id', $gen->id)->where('modello_id', $val->id)->first();
                    if ($src->sconto > 0) {
                        $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                        $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                        $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                        $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                    }
                    else {
                        $products[$key]->prezzo_normale = "";
                        $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                        $products[$key]->sconto = "";
                    }

                    if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                        $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                    } else {
                        $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                    }
                    if (count($quantita) == 0) {
                        $products[$key]->stock = "Non in stock";
                        $products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                    }
                    else $products[$key]->stock = "In stock";

                    $photo = Foto::where('modello_id', $val->id)->first();
                    $products[$key]->identificativo = $photo->id;

                    $altre = Altre::where('foto_id', $photo->id)->get();

                    foreach($altre as $others){
                        switch ($others->tipo) {
                            case 'slider': {
                                if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                    else $products[$key]->slid3 = $others->id;
                                }
                            }
                                break;
                            case 'normal': {
                                if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                                else $products[$key]->norm3 = $others->id;
                            }
                                break;
                            case 'thumbnail': {
                                if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                    else $products[$key]->thumb3 = $others->id;
                                }
                            }
                                break;
                        }
                    }
                }
            } else {
                $tempgen = $data['genere'];
                $tempcat = $data['categoria'];
                $genere = Genere::where('tipo', $tempgen)->first();
                $idgen = $genere->id;
                $categoria = Categoria::where('name', $tempcat)->first();
                $idcat = $categoria->id;
                $tuttoabbigliamento = Categoria::where('reference', 'tutto')->first();

                $search = Generehasmodello::where('genere_id', $idgen)->get();

                $products = collect(new Modello);

                //Prendo tutti i modelli di cui ho bisogno
                foreach ($search as $src) {
                    $id = $src->modello_id;
                    $modello = Modello::find($id);
                    if ($idcat == $tuttoabbigliamento->id) $products->push($modello);
                    else if ($modello->categoria_id == $idcat) {
                        $products->push($modello);
                    }
                }

                foreach ($products as $key => $val) {
                    $src = Generehasmodello::where('genere_id', $idgen)->where('modello_id', $val->id)->first();
                    if ($src->sconto > 0) {
                        $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                        $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                        $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                        $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                    } else {
                        $products[$key]->prezzo_normale = "";
                        $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                        $products[$key]->sconto = "";
                    }

                    if ($genere->tipo == 'Uomo' || $genere->tipo == 'Donna') {
                        $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                    } else {
                        $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                    }
                    if (count($quantita) == 0) {
                        $products[$key]->stock = "Non in stock";
                        $products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                    } else $products[$key]->stock = "In stock";

                    $brand_name = Marca::find($val->marca_id);
                    $products[$key]->marca = $brand_name->nome;

                    $photo = Foto::where('modello_id', $val->id)->first();
                    $products[$key]->identificativo = $photo->id;

                    $altre = Altre::where('foto_id', $photo->id)->get();

                    foreach ($altre as $others) {
                        switch ($others->tipo) {
                            case 'slider':
                                {
                                    if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                                    else {
                                        if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                        else $products[$key]->slid3 = $others->id;
                                    }
                                }
                                break;
                            case 'normal':
                                {
                                    if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                                    else $products[$key]->norm3 = $others->id;
                                }
                                break;
                            case 'thumbnail':
                                {
                                    if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                                    else {
                                        if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                        else $products[$key]->thumb3 = $others->id;
                                    }
                                }
                                break;
                        }
                    }
                }
            }
        }

        //Ho tutto quello che mi serve
        //Passo i dati a Jquery

        if ($valore == '1') {
            //default

            $resp = "";
            foreach($products as $product) {
                if (Auth::check()) {
                    $wishlist_tag = "<a class=\"aggiungiwishlist\" data-id='{ \"idphoto\":\"$product->identificativo\", \"genere\":\"$tempgen\" }' href=\"javascript:void(0);\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
                } else {
                    $wishlist_tag = "<a class=\"aggiungiwishlist\" data-tooltip=\"tooltip\" href=\"\" data-toggle=\"modal\" data-target=\"#login-modal\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
                }
                $resp .= "<li>
<figure>
<!--\"img/women/girl-1.png\"-->
<a class=\"aa-product-img\" href=\"../product-details/$tempgen&&$product->identificativo\"><img src=\"../store-image/fetch-image/$product->identificativo\" alt=\"polo shirt img\"></a>
<a class=\"aa-add-card-btn\" href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$tempgen\", \"categoria\":\"$tempcat\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
  data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-shopping-cart\"></span>Aggiungi al carrello</a>
<figcaption>
<h4 class=\"aa-product-title\"><a href=\"../product-details/$tempgen&&$product->identificativo\">$product->nome</a></h4>
<span class=\"aa-product-price\">$$product->prezzo</span>$product->prezzo_normale
<p class=\"aa-product-descrip\">$product->marca</p>
</figcaption>
</figure>
<div class=\"aa-product-hvr-content\">
$wishlist_tag
<a href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$tempgen\", \"categoria\":\"$tempcat\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
data-placement=\"top\" title=\"Dai un'occhiata\" data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-search\"></span></a>
</div>
<!-- product badge -->
$product->sconto
</li>";
            }
            echo $resp;
            die;
        }

        if ($valore == '2') {
            //Nome
            //Ordino

            $n = count($products);
            for ($i=1; $i < $n; $i++) {
                for ($j = $i; $j > 0 && $products[$j]->nome < $products[$j-1]->nome; $j--) {
                    if ($products[$j]->nome < $products[$j-1]->nome) {
                        $temp = $products[$j]->id;
                        $products[$j]->id = $products[$j-1]->id;
                        $products[$j-1]->id = $temp;


                        $temp = $products[$j]->nome;
                        $products[$j]->nome = $products[$j-1]->nome;
                        $products[$j-1]->nome = $temp;

                        $temp = $products[$j]->identificativo;
                        $products[$j]->identificativo = $products[$j-1]->identificativo;
                        $products[$j-1]->identificativo = $temp;

                        $temp = $products[$j]->prezzo;
                        $products[$j]->prezzo = $products[$j-1]->prezzo;
                        $products[$j-1]->prezzo = $temp;

                        $temp = $products[$j]->slid1;
                        $products[$j]->slid1 = $products[$j-1]->slid1;
                        $products[$j-1]->slid1 = $temp;

                        $temp = $products[$j]->slid2;
                        $products[$j]->slid2 = $products[$j-1]->slid2;
                        $products[$j-1]->slid2 = $temp;

                        $temp = $products[$j]->slid3;
                        $products[$j]->slid3 = $products[$j-1]->slid3;
                        $products[$j-1]->slid3 = $temp;

                        $temp = $products[$j]->thumb1;
                        $products[$j]->thumb1 = $products[$j-1]->thumb1;
                        $products[$j-1]->thumb1 = $temp;

                        $temp = $products[$j]->thumb2;
                        $products[$j]->thumb2 = $products[$j-1]->thumb2;
                        $products[$j-1]->thumb2 = $temp;

                        $temp = $products[$j]->thumb3;
                        $products[$j]->thumb3 = $products[$j-1]->thumb3;
                        $products[$j-1]->thumb3 = $temp;

                        $temp = $products[$j]->norm2;
                        $products[$j]->norm2 = $products[$j-1]->norm2;
                        $products[$j-1]->norm2 = $temp;

                        $temp = $products[$j]->norm3;
                        $products[$j]->norm3 = $products[$j-1]->norm3;
                        $products[$j-1]->norm3 = $temp;

                        $temp = $products[$j]->descrizione;
                        $products[$j]->descrizione = $products[$j-1]->descrizione;
                        $products[$j-1]->descrizione = $temp;

                        $temp = $products[$j]->marca;
                        $products[$j]->marca = $products[$j-1]->marca;
                        $products[$j-1]->marca = $temp;

                        $temp = $products[$j]->prezzo_normale;
                        $products[$j]->prezzo_normale = $products[$j-1]->prezzo_normale;
                        $products[$j-1]->prezzo_normale = $temp;

                        $temp = $products[$j]->sconto;
                        $products[$j]->sconto = $products[$j-1]->sconto;
                        $products[$j-1]->sconto = $temp;

                        $temp = $products[$j]->stock;
                        $products[$j]->stock = $products[$j-1]->stock;
                        $products[$j-1]->stock = $temp;
                    }
                }
            }

            //Passo i dati a Jquery
            $resp = "";
            foreach($products as $product) {
                if (Auth::check()) {
                    $wishlist_tag = "<a class=\"aggiungiwishlist\" data-id='{ \"idphoto\":\"$product->identificativo\", \"genere\":\"$tempgen\" }' href=\"javascript:void(0);\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
                } else {
                    $wishlist_tag = "<a class=\"aggiungiwishlist\" data-tooltip=\"tooltip\" href=\"\" data-toggle=\"modal\" data-target=\"#login-modal\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
                }
                $resp .= "<li>
<figure>
<!--\"img/women/girl-1.png\"-->
<a class=\"aa-product-img\" href=\"../product-details/$tempgen&&$product->identificativo\"><img src=\"../store-image/fetch-image/$product->identificativo\" alt=\"polo shirt img\"></a>
<a class=\"aa-add-card-btn\" href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$tempgen\", \"categoria\":\"$tempcat\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
  data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-shopping-cart\"></span>Aggiungi al carrello</a>
<figcaption>
<h4 class=\"aa-product-title\"><a href=\"../product-details/$tempgen&&$product->identificativo\">$product->nome</a></h4>
<span class=\"aa-product-price\">$$product->prezzo</span>$product->prezzo_normale
<p class=\"aa-product-descrip\">$product->marca</p>
</figcaption>
</figure>
<div class=\"aa-product-hvr-content\">
$wishlist_tag
<a href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$tempgen\", \"categoria\":\"$tempcat\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
data-placement=\"top\" title=\"Dai un'occhiata\" data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-search\"></span></a>
</div>
<!-- product badge -->
$product->sconto
</li>";
            }
            echo $resp;
            die;
        }
        if ($valore == '3') {
            //Prezzo
            //Ordino

            $n = count($products);
            for ($i=1; $i < $n; $i++) {
                for ($j = $i; $j > 0 && $products[$j]->prezzo < $products[$j-1]->prezzo; $j--) {
                    if ($products[$j]->prezzo < $products[$j-1]->prezzo) {
                        $temp = $products[$j]->id;
                        $products[$j]->id = $products[$j-1]->id;
                        $products[$j-1]->id = $temp;

                        $temp = $products[$j]->nome;
                        $products[$j]->nome = $products[$j-1]->nome;
                        $products[$j-1]->nome = $temp;

                        $temp = $products[$j]->identificativo;
                        $products[$j]->identificativo = $products[$j-1]->identificativo;
                        $products[$j-1]->identificativo = $temp;

                        $temp = $products[$j]->prezzo;
                        $products[$j]->prezzo = $products[$j-1]->prezzo;
                        $products[$j-1]->prezzo = $temp;

                        $temp = $products[$j]->slid1;
                        $products[$j]->slid1 = $products[$j-1]->slid1;
                        $products[$j-1]->slid1 = $temp;

                        $temp = $products[$j]->slid2;
                        $products[$j]->slid2 = $products[$j-1]->slid2;
                        $products[$j-1]->slid2 = $temp;

                        $temp = $products[$j]->slid3;
                        $products[$j]->slid3 = $products[$j-1]->slid3;
                        $products[$j-1]->slid3 = $temp;

                        $temp = $products[$j]->thumb1;
                        $products[$j]->thumb1 = $products[$j-1]->thumb1;
                        $products[$j-1]->thumb1 = $temp;

                        $temp = $products[$j]->thumb2;
                        $products[$j]->thumb2 = $products[$j-1]->thumb2;
                        $products[$j-1]->thumb2 = $temp;

                        $temp = $products[$j]->thumb3;
                        $products[$j]->thumb3 = $products[$j-1]->thumb3;
                        $products[$j-1]->thumb3 = $temp;

                        $temp = $products[$j]->norm2;
                        $products[$j]->norm2 = $products[$j-1]->norm2;
                        $products[$j-1]->norm2 = $temp;

                        $temp = $products[$j]->norm3;
                        $products[$j]->norm3 = $products[$j-1]->norm3;
                        $products[$j-1]->norm3 = $temp;

                        $temp = $products[$j]->descrizione;
                        $products[$j]->descrizione = $products[$j-1]->descrizione;
                        $products[$j-1]->descrizione = $temp;

                        $temp = $products[$j]->marca;
                        $products[$j]->marca = $products[$j-1]->marca;
                        $products[$j-1]->marca = $temp;

                        $temp = $products[$j]->prezzo_normale;
                        $products[$j]->prezzo_normale = $products[$j-1]->prezzo_normale;
                        $products[$j-1]->prezzo_normale = $temp;

                        $temp = $products[$j]->sconto;
                        $products[$j]->sconto = $products[$j-1]->sconto;
                        $products[$j-1]->sconto = $temp;

                        $temp = $products[$j]->stock;
                        $products[$j]->stock = $products[$j-1]->stock;
                        $products[$j-1]->stock = $temp;
                    }
                }
            }

            //Passo i dati a Jquery
            $resp = "";
            foreach($products as $product) {
                if (Auth::check()) {
                    $wishlist_tag = "<a class=\"aggiungiwishlist\" data-id='{ \"idphoto\":\"$product->identificativo\", \"genere\":\"$tempgen\" }' href=\"javascript:void(0);\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
                } else {
                    $wishlist_tag = "<a class=\"aggiungiwishlist\" data-tooltip=\"tooltip\" href=\"\" data-toggle=\"modal\" data-target=\"#login-modal\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
                }
                $resp .= "<li>
<figure>
<!--\"img/women/girl-1.png\"-->
<a class=\"aa-product-img\" href=\"../product-details/$tempgen&&$product->identificativo\"><img src=\"../store-image/fetch-image/$product->identificativo\" alt=\"polo shirt img\"></a>
<a class=\"aa-add-card-btn\" href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$tempgen\", \"categoria\":\"$tempcat\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
  data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-shopping-cart\"></span>Aggiungi al carrello</a>
<figcaption>
<h4 class=\"aa-product-title\"><a href=\"../product-details/$tempgen&&$product->identificativo\">$product->nome</a></h4>
<span class=\"aa-product-price\">$$product->prezzo</span>$product->prezzo_normale
<p class=\"aa-product-descrip\">$product->marca</p>
</figcaption>
</figure>
<div class=\"aa-product-hvr-content\">
$wishlist_tag
<a href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$tempgen\", \"categoria\":\"$tempcat\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
data-placement=\"top\" title=\"Dai un'occhiata\" data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-search\"></span></a>
</div>
<!-- product badge -->
$product->sconto
</li>";
            }
            echo $resp;
            die;
        }
        if ($valore == '4') {
            //Data
            //Ordino

            $n = count($products);
            for ($i=1; $i < $n; $i++) {
                for ($j = $i; $j > 0 && $products[$j]->datauscita > $products[$j-1]->datauscita; $j--) {
                    if ($products[$j]->datauscita > $products[$j-1]->datauscita) {
                        $temp = $products[$j]->id;
                        $products[$j]->id = $products[$j-1]->id;
                        $products[$j-1]->id = $temp;

                        $temp = $products[$j]->nome;
                        $products[$j]->nome = $products[$j-1]->nome;
                        $products[$j-1]->nome = $temp;

                        $temp = $products[$j]->identificativo;
                        $products[$j]->identificativo = $products[$j-1]->identificativo;
                        $products[$j-1]->identificativo = $temp;

                        $temp = $products[$j]->prezzo;
                        $products[$j]->prezzo = $products[$j-1]->prezzo;
                        $products[$j-1]->prezzo = $temp;

                        $temp = $products[$j]->slid1;
                        $products[$j]->slid1 = $products[$j-1]->slid1;
                        $products[$j-1]->slid1 = $temp;

                        $temp = $products[$j]->slid2;
                        $products[$j]->slid2 = $products[$j-1]->slid2;
                        $products[$j-1]->slid2 = $temp;

                        $temp = $products[$j]->slid3;
                        $products[$j]->slid3 = $products[$j-1]->slid3;
                        $products[$j-1]->slid3 = $temp;

                        $temp = $products[$j]->thumb1;
                        $products[$j]->thumb1 = $products[$j-1]->thumb1;
                        $products[$j-1]->thumb1 = $temp;

                        $temp = $products[$j]->thumb2;
                        $products[$j]->thumb2 = $products[$j-1]->thumb2;
                        $products[$j-1]->thumb2 = $temp;

                        $temp = $products[$j]->thumb3;
                        $products[$j]->thumb3 = $products[$j-1]->thumb3;
                        $products[$j-1]->thumb3 = $temp;

                        $temp = $products[$j]->norm2;
                        $products[$j]->norm2 = $products[$j-1]->norm2;
                        $products[$j-1]->norm2 = $temp;

                        $temp = $products[$j]->norm3;
                        $products[$j]->norm3 = $products[$j-1]->norm3;
                        $products[$j-1]->norm3 = $temp;

                        $temp = $products[$j]->descrizione;
                        $products[$j]->descrizione = $products[$j-1]->descrizione;
                        $products[$j-1]->descrizione = $temp;

                        $temp = $products[$j]->marca;
                        $products[$j]->marca = $products[$j-1]->marca;
                        $products[$j-1]->marca = $temp;

                        $temp = $products[$j]->prezzo_normale;
                        $products[$j]->prezzo_normale = $products[$j-1]->prezzo_normale;
                        $products[$j-1]->prezzo_normale = $temp;

                        $temp = $products[$j]->sconto;
                        $products[$j]->sconto = $products[$j-1]->sconto;
                        $products[$j-1]->sconto = $temp;

                        $temp = $products[$j]->stock;
                        $products[$j]->stock = $products[$j-1]->stock;
                        $products[$j-1]->stock = $temp;
                    }
                }
            }

            //Passo i dati a Jquery
            $resp = "";
            foreach($products as $product) {
                if (Auth::check()) {
                    $wishlist_tag = "<a class=\"aggiungiwishlist\" data-id='{ \"idphoto\":\"$product->identificativo\", \"genere\":\"$tempgen\" }' href=\"javascript:void(0);\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
                } else {
                    $wishlist_tag = "<a class=\"aggiungiwishlist\" data-tooltip=\"tooltip\" href=\"\" data-toggle=\"modal\" data-target=\"#login-modal\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
                }
                $resp .= "<li>
<figure>
<!--\"img/women/girl-1.png\"-->
<a class=\"aa-product-img\" href=\"../product-details/$tempgen&&$product->identificativo\"><img src=\"../store-image/fetch-image/$product->identificativo\" alt=\"polo shirt img\"></a>
<a class=\"aa-add-card-btn\" href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$tempgen\", \"categoria\":\"$tempcat\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
  data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-shopping-cart\"></span>Aggiungi al carrello</a>
<figcaption>
<h4 class=\"aa-product-title\"><a href=\"../product-details/$tempgen&&$product->identificativo\">$product->nome</a></h4>
<span class=\"aa-product-price\">$$product->prezzo</span>$product->prezzo_normale
<p class=\"aa-product-descrip\">$product->marca</p>
</figcaption>
</figure>
<div class=\"aa-product-hvr-content\">
$wishlist_tag
<a href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$tempgen\", \"categoria\":\"$tempcat\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
data-placement=\"top\" title=\"Dai un'occhiata\" data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-search\"></span></a>
</div>
<!-- product badge -->
$product->sconto
</li>";
            }
            echo $resp;
            die;
        }
    }

    //Filtra per prezzo
    public function filterproducts(Request $request) {
        $data = $request->all();
        //echo "<pre>"; print_r($data); die;
        $prezzoMinimo = $data['prezzoMinimo'];
        $prezzoMassimo = $data['prezzoMassimo'];

        if (!empty($data['marca'])) {
            $marca = Marca::where('reference', $data['marca'])->first();
            $search = Modello::where('marca_id', $marca->id)->get();

            $tempgen = $data['genere'];
            $gen = Genere::where('tipo', $data['genere'])->first();

            $products = collect(new Modello);

            //Prendo tutti i modelli di cui ho bisogno
            foreach($search as $src) {
                $check = Generehasmodello::where('genere_id', $gen->id)->where('modello_id', $src->id)->first();
                if (!empty($check)) {
                    if ($check->sconto > 0) {
                        $temp = $check->prezzo - (($check->prezzo / 100) * $check->sconto);
                        if ($temp >= $prezzoMinimo && $temp <= $prezzoMassimo) {
                            $products->push($src);
                        }
                    }
                    else {
                        if ($check->prezzo >= $prezzoMinimo && $check->prezzo <= $prezzoMassimo) {
                            $products->push($src);
                        }
                    }
                }
            }

            $tempcat = '... Tutti gli Articoli';

            foreach($products as $key => $val){
                $src = Generehasmodello::where('genere_id', $gen->id)->where('modello_id', $val->id)->first();
                if ($src->sconto > 0) {
                    $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                    $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                    $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                }
                else {
                    $products[$key]->prezzo_normale = "";
                    $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                    $products[$key]->sconto = "";
                }

                if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                } else {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                }
                if (count($quantita) == 0) {
                    $products[$key]->stock = "Non in stock";
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                }
                else $products[$key]->stock = "In stock";

                $brand_name = Marca::find($val->marca_id);
                $products[$key]->marca = $brand_name->nome;

                $photo = Foto::where('modello_id', $val->id)->first();
                $products[$key]->identificativo = $photo->id;

                $altre = Altre::where('foto_id', $photo->id)->get();

                foreach($altre as $others){
                    switch ($others->tipo) {
                        case 'slider': {
                            if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                else $products[$key]->slid3 = $others->id;
                            }
                        }
                            break;
                        case 'normal': {
                            if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                            else $products[$key]->norm3 = $others->id;
                        }
                            break;
                        case 'thumbnail': {
                            if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                else $products[$key]->thumb3 = $others->id;
                            }
                        }
                            break;
                    }
                }
            }
        } else {
            if (!empty($data['collezione'])) {
                $collezione = Collezione::where('reference', $data['collezione'])->first();
                $search = Modello::where('collezione_id', $collezione->id)->get();

                $tempgen = $data['genere'];
                $gen = Genere::where('tipo', $data['genere'])->first();

                $products = collect(new Modello);

                //Prendo tutti i modelli di cui ho bisogno
                foreach($search as $src) {
                    $check = Generehasmodello::where('genere_id', $gen->id)->where('modello_id', $src->id)->first();
                    if ($check->sconto > 0) {
                        $temp = $check->prezzo - (($check->prezzo / 100) * $check->sconto);
                        if ($temp >= $prezzoMinimo && $temp <= $prezzoMassimo) {
                            $products->push($src);
                        }
                    }
                    else {
                        if ($check->prezzo >= $prezzoMinimo && $check->prezzo <= $prezzoMassimo) {
                            $products->push($src);
                        }
                    }
                }

                $tempcat = '... Tutti gli Articoli';

                foreach($products as $key => $val){
                    $src = Generehasmodello::where('genere_id', $gen->id)->where('modello_id', $val->id)->first();
                    if ($src->sconto > 0) {
                        $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                        $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                        $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                        $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                    }
                    else {
                        $products[$key]->prezzo_normale = "";
                        $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                        $products[$key]->sconto = "";
                    }

                    if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                        $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                    } else {
                        $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                    }
                    if (count($quantita) == 0) {
                        $products[$key]->stock = "Non in stock";
                        $products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                    }
                    else $products[$key]->stock = "In stock";

                    $brand_name = Marca::find($val->marca_id);
                    $products[$key]->marca = $brand_name->nome;

                    $photo = Foto::where('modello_id', $val->id)->first();
                    $products[$key]->identificativo = $photo->id;

                    $altre = Altre::where('foto_id', $photo->id)->get();

                    foreach($altre as $others){
                        switch ($others->tipo) {
                            case 'slider': {
                                if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                    else $products[$key]->slid3 = $others->id;
                                }
                            }
                                break;
                            case 'normal': {
                                if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                                else $products[$key]->norm3 = $others->id;
                            }
                                break;
                            case 'thumbnail': {
                                if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                    else $products[$key]->thumb3 = $others->id;
                                }
                            }
                                break;
                        }
                    }
                }
            } else {
                $tempgen = $data['genere'];
                $tempcat = $data['categoria'];
                $genere = Genere::where('tipo', $tempgen)->first();
                $idgen = $genere->id;
                $categoria = Categoria::where('name', $tempcat)->first();
                $idcat = $categoria->id;
                $tuttoabbigliamento = Categoria::where('reference', 'tutto')->first();

                $search = Generehasmodello::where('genere_id', $idgen)->get();

                $products = collect(new Modello);

                //Prendo tutti i modelli di cui ho bisogno
                foreach($search as $src) {
                    $id = $src->modello_id;
                    $modello = Modello::find($id);
                    if ($idcat == $tuttoabbigliamento->id) {
                        if ($src->sconto > 0) {
                            $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                            if ($temp >= $prezzoMinimo && $temp <= $prezzoMassimo) {
                                $products->push($modello);
                            }
                        }
                        else {
                            if ($src->prezzo >= $prezzoMinimo && $src->prezzo <= $prezzoMassimo) {
                                $products->push($modello);
                            }
                        }
                    } else if ($modello->categoria_id == $idcat) {
                        if ($src->sconto > 0) {
                            $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                            if ($temp >= $prezzoMinimo && $temp <= $prezzoMassimo) {
                                $products->push($modello);
                            }
                        }
                        else {
                            if ($src->prezzo >= $prezzoMinimo && $src->prezzo <= $prezzoMassimo) {
                                $products->push($modello);
                            }
                        }
                    }
                }

                foreach($products as $key => $val){
                    $src = Generehasmodello::where('genere_id', $idgen)->where('modello_id', $val->id)->first();
                    if ($src->sconto > 0) {
                        $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                        $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                        $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                        $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                    }
                    else {
                        $products[$key]->prezzo_normale = "";
                        $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                        $products[$key]->sconto = "";
                    }

                    if ($genere->tipo == 'Uomo' || $genere->tipo == 'Donna') {
                        $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                    } else {
                        $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                    }
                    if (count($quantita) == 0) {
                        $products[$key]->stock = "Non in stock";
                        $products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                    }
                    else $products[$key]->stock = "In stock";

                    $brand_name = Marca::find($val->marca_id);
                    $products[$key]->marca = $brand_name->nome;

                    $photo = Foto::where('modello_id', $val->id)->first();
                    $products[$key]->identificativo = $photo->id;

                    $altre = Altre::where('foto_id', $photo->id)->get();

                    foreach($altre as $others){
                        switch ($others->tipo) {
                            case 'slider': {
                                if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                    else $products[$key]->slid3 = $others->id;
                                }
                            }
                                break;
                            case 'normal': {
                                if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                                else $products[$key]->norm3 = $others->id;
                            }
                                break;
                            case 'thumbnail': {
                                if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                    else $products[$key]->thumb3 = $others->id;
                                }
                            }
                                break;
                        }
                    }
                }
            }
        }
        //Ho tutto quello che mi serve
        //Passo i dati a Jquery

        $resp = "";
            foreach ($products as $product) {
                if (Auth::check()) {
                    $wishlist_tag = "<a class=\"aggiungiwishlist\" data-id='{ \"idphoto\":\"$product->identificativo\", \"genere\":\"$tempgen\" }' href=\"javascript:void(0);\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
                } else {
                    $wishlist_tag = "<a class=\"aggiungiwishlist\" data-tooltip=\"tooltip\" href=\"\" data-toggle=\"modal\" data-target=\"#login-modal\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
                }
                $resp .= "<li>
<figure>
<!--\"img/women/girl-1.png\"-->
<a class=\"aa-product-img\" href=\"../product-details/$tempgen&&$product->identificativo\"><img src=\"../store-image/fetch-image/$product->identificativo\" alt=\"polo shirt img\"></a>
<a class=\"aa-add-card-btn\" href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$tempgen\", \"categoria\":\"$tempcat\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
  data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-shopping-cart\"></span>Aggiungi al carrello</a>
<figcaption>
<h4 class=\"aa-product-title\"><a href=\"../product-details/$tempgen&&$product->identificativo\">$product->nome</a></h4>
<span class=\"aa-product-price\">$$product->prezzo</span>$product->prezzo_normale
<p class=\"aa-product-descrip\">$product->marca</p>
</figcaption>
</figure>
<div class=\"aa-product-hvr-content\">
$wishlist_tag
<a href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$tempgen\", \"categoria\":\"$tempcat\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
data-placement=\"top\" title=\"Dai un'occhiata\" data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-search\"></span></a>
</div>
<!-- product badge -->
$product->sconto
</li>";
            }

            echo $resp;
            die;
    }

    public function product (request $request, $genere = null, $categoria = null ) {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $email = $data['emailsubscriber'];

            $temp = Categoria::where('name', $categoria)->first();
            $refcategoria = $temp->reference;

            Mail::to($email)->send(new MailDevelop);

            return redirect('/product/'.$genere.'&&'.$refcategoria)->withSuccessMessage('Grazie per la tua iscrizione! Ti abbiamo inviato un’email di conferma.');
        }

        if (session('success_message')) {
            Alert::success('Successo!', session('success_message'));
        }

        $url = $request->url();

        if (Str::contains($url, 'brand')) {
            $marca = Marca::where('reference', $categoria)->first();
            if (empty($marca)) return redirect('/error');
            $temp = Modello::where('marca_id', $marca->id)->get();

            if (Str::contains($url, 'Uomo')) $gen = Genere::find(1);
            else $gen = Genere::find(2);

            $products = collect(new Modello);

            //Prendo tutti i modelli di cui ho bisogno
            foreach ($temp as $temporanea) {
                $generehasmodello = Generehasmodello::where('modello_id', $temporanea->id)->where('genere_id', $gen->id)->first();
                if (!empty($generehasmodello)) $products->push($temporanea);
            }

            $categoria = '... Tutti gli Articoli';

            $i = 0;
            foreach($products as $key => $val){
                $src = Generehasmodello::where('genere_id', $gen->id)->where('modello_id', $val->id)->first();
                if ($src->sconto > 0) {
                    $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                    $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                    $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                }
                else {
                    $products[$key]->prezzo_normale = "";
                    $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                    $products[$key]->sconto = "";
                }

                if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                } else {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                }
                if (count($quantita) == 0) {
                    $products[$key]->stock = "Non in stock";
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                }
                else $products[$key]->stock = "In stock";

                $brand_name = Marca::find($val->marca_id);
                $products[$key]->marca = $brand_name->nome;

                $photo = Foto::where('modello_id', $val->id)->first();
                $products[$key]->identificativo = $photo->id;

                $altre = Altre::where('foto_id', $photo->id)->get();

                foreach($altre as $others){
                    switch ($others->tipo) {
                        case 'slider': {
                            if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                else $products[$key]->slid3 = $others->id;
                            }
                        }
                            break;
                        case 'normal': {
                            if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                            else $products[$key]->norm3 = $others->id;
                        }
                            break;
                        case 'thumbnail': {
                            if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                else $products[$key]->thumb3 = $others->id;
                            }
                        }
                            break;
                    }
                }
                $allrecensioni = Recensione::where('modello_id', $val->id)->get();
                $sommareview = 0;
                foreach($allrecensioni as $recensione){
                    $sommareview += $recensione->voto;
                }
                if ($sommareview != 0) {
                    $mediavoto[$i] = $sommareview / (count($allrecensioni));
                    $referencevoto[$i] = $i;
                } else {
                    $mediavoto[$i] = -1;
                    $referencevoto[$i] = $i;
                }
                $i = $i+1;
            }
            //$identificativo sono tutti gli id delle foto

            //Prodotti più votati
            if (isset($mediavoto)) {
                $execute = 0;
                $n = count($mediavoto);
                for ($i = 1; $i < $n; $i++) {
                    for ($j = $i; $j > 0 && $mediavoto[$j] > $mediavoto[$j - 1]; $j--) {
                        if ($mediavoto[$j] > $mediavoto[$j - 1]) {
                            $temp = $mediavoto[$j];
                            $mediavoto[$j] = $mediavoto[$j - 1];
                            $mediavoto[$j - 1] = $temp;

                            $temp = $referencevoto[$j];
                            $referencevoto[$j] = $referencevoto[$j - 1];
                            $referencevoto[$j - 1] = $temp;
                        }
                    }
                }
                if (count($mediavoto) < 3) {
                    for ($i = 0; $i < count($mediavoto); $i++) {
                        if ($mediavoto[$i] != -1) {
                            $execute = 1;
                            $indice = $referencevoto[$i];
                            $votato[$i] = (object)array('nome' => $products[$indice]->nome, 'prezzo' => $products[$indice]->prezzo, 'foto' => $products[$indice]->identificativo);
                        }
                    }
                } else {
                    for ($i = 0; $i < 3; $i++) {
                        if ($mediavoto[$i] != -1) {
                            $execute = 1;
                            $indice = $referencevoto[$i];
                            $votato[$i] = (object)array('nome' => $products[$indice]->nome, 'prezzo' => $products[$indice]->prezzo, 'foto' => $products[$indice]->identificativo);
                        }
                    }
                }
                if ($execute == 0) $votato = (object)null;
            } else $votato = (object)null;

            $genere = $gen->tipo;
        }

        if (Str::contains($url, 'collezione')) {
            $collezione = Collezione::where('reference', $genere)->first();
            if (empty($collezione)) return redirect('/error');
            $products = Modello::where('collezione_id', $collezione->id)->get();

            if (Str::contains($url, 'Uomo')) $gen = Genere::find(1);
            else $gen = Genere::find(2);

            $categoria = '... Tutti gli Articoli';

            $i = 0;
            foreach($products as $key => $val){
                $src = Generehasmodello::where('genere_id', $gen->id)->where('modello_id', $val->id)->first();
                if ($src->sconto > 0) {
                    $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                    $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                    $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                }
                else {
                    $products[$key]->prezzo_normale = "";
                    $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                    $products[$key]->sconto = "";
                }

                if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                } else {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                }
                if (count($quantita) == 0) {
                    $products[$key]->stock = "Non in stock";
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                }
                else $products[$key]->stock = "In stock";

                $brand_name = Marca::find($val->marca_id);
                $products[$key]->marca = $brand_name->nome;

                $photo = Foto::where('modello_id', $val->id)->first();
                $products[$key]->identificativo = $photo->id;

                $altre = Altre::where('foto_id', $photo->id)->get();

                foreach($altre as $others){
                    switch ($others->tipo) {
                        case 'slider': {
                            if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                else $products[$key]->slid3 = $others->id;
                            }
                        }
                            break;
                        case 'normal': {
                            if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                            else $products[$key]->norm3 = $others->id;
                        }
                            break;
                        case 'thumbnail': {
                            if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                else $products[$key]->thumb3 = $others->id;
                            }
                        }
                            break;
                    }
                }
                $allrecensioni = Recensione::where('modello_id', $val->id)->get();
                $sommareview = 0;
                foreach($allrecensioni as $recensione){
                    $sommareview += $recensione->voto;
                }
                if ($sommareview != 0) {
                    $mediavoto[$i] = $sommareview / (count($allrecensioni));
                    $referencevoto[$i] = $i;
                } else {
                    $mediavoto[$i] = -1;
                    $referencevoto[$i] = $i;
                }
                $i = $i+1;
            }
            //$identificativo sono tutti gli id delle foto

            //Prodotti più votati
            if (isset($mediavoto)) {
                $execute = 0;
                $n = count($mediavoto);
                for ($i = 1; $i < $n; $i++) {
                    for ($j = $i; $j > 0 && $mediavoto[$j] > $mediavoto[$j - 1]; $j--) {
                        if ($mediavoto[$j] > $mediavoto[$j - 1]) {
                            $temp = $mediavoto[$j];
                            $mediavoto[$j] = $mediavoto[$j - 1];
                            $mediavoto[$j - 1] = $temp;

                            $temp = $referencevoto[$j];
                            $referencevoto[$j] = $referencevoto[$j - 1];
                            $referencevoto[$j - 1] = $temp;
                        }
                    }
                }
                if (count($mediavoto) < 3) {
                    for ($i = 0; $i < count($mediavoto); $i++) {
                        if ($mediavoto[$i] != -1) {
                            $execute = 1;
                            $indice = $referencevoto[$i];
                            $votato[$i] = (object)array('nome' => $products[$indice]->nome, 'prezzo' => $products[$indice]->prezzo, 'foto' => $products[$indice]->identificativo);
                        }
                    }
                } else {
                    for ($i = 0; $i < 3; $i++) {
                        if ($mediavoto[$i] != -1) {
                            $execute = 1;
                            $indice = $referencevoto[$i];
                            $votato[$i] = (object)array('nome' => $products[$indice]->nome, 'prezzo' => $products[$indice]->prezzo, 'foto' => $products[$indice]->identificativo);
                        }
                    }
                }
                if ($execute == 0) $votato = (object)null;
            } else $votato = (object)null;

            $genere = $gen->tipo;
        }

        if (Str::contains($url, 'product')) {
            $gen = Genere::where('tipo', $genere)->first();
            if (empty($gen)) return redirect('/error');
            $idgen = $gen->id;
            $category = Categoria::where('reference', $categoria)->first();
            if (empty($category)) return redirect('/error');
            $categoria = $category->id;
            $tuttoabbigliamento = Categoria::where('reference', 'tutto')->first();

            $search = Generehasmodello::where('genere_id', $idgen)->get();

            $products = collect(new Modello);

            //Prendo tutti i modelli di cui ho bisogno
            foreach($search as $src) {
                $id = $src->modello_id;
                $modello = Modello::find($id);
                if ($categoria == $tuttoabbigliamento->id) $products->push($modello);
                else if ($modello->categoria_id == $categoria) {
                    $products->push($modello);
                }
            }

            $i = 0;
            foreach($products as $key => $val){
                $src = Generehasmodello::where('genere_id', $idgen)->where('modello_id', $val->id)->first();
                if ($src->sconto > 0) {
                    $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                    $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                    $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                }
                else {
                    $products[$key]->prezzo_normale = "";
                    $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                    $products[$key]->sconto = "";
                }

                if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                } else {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                }
                if (count($quantita) == 0) {
                    $products[$key]->stock = "Non in stock";
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                }
                else $products[$key]->stock = "In stock";

                $brand_name = Marca::find($val->marca_id);
                $products[$key]->marca = $brand_name->nome;

                $photo = Foto::where('modello_id', $val->id)->first();
                $products[$key]->identificativo = $photo->id;

                $altre = Altre::where('foto_id', $photo->id)->get();

                foreach($altre as $others){
                    switch ($others->tipo) {
                        case 'slider': {
                            if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                else $products[$key]->slid3 = $others->id;
                            }
                        }
                            break;
                        case 'normal': {
                            if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                            else $products[$key]->norm3 = $others->id;
                        }
                            break;
                        case 'thumbnail': {
                            if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                else $products[$key]->thumb3 = $others->id;
                            }
                        }
                            break;
                    }
                }
                $allrecensioni = Recensione::where('modello_id', $val->id)->get();
                $sommareview = 0;
                foreach($allrecensioni as $recensione){
                    $sommareview += $recensione->voto;
                }
                if ($sommareview != 0) {
                    $mediavoto[$i] = $sommareview / (count($allrecensioni));
                    $referencevoto[$i] = $i;
                } else {
                    $mediavoto[$i] = -1;
                    $referencevoto[$i] = $i;
                }
                $i = $i+1;
            }
            //$identificativo sono tutti gli id delle foto


            //Prodotti più votati
            if (isset($mediavoto)) {
                $execute = 0;
                $n = count($mediavoto);
                for ($i = 1; $i < $n; $i++) {
                    for ($j = $i; $j > 0 && $mediavoto[$j] > $mediavoto[$j - 1]; $j--) {
                        if ($mediavoto[$j] > $mediavoto[$j - 1]) {
                            $temp = $mediavoto[$j];
                            $mediavoto[$j] = $mediavoto[$j - 1];
                            $mediavoto[$j - 1] = $temp;

                            $temp = $referencevoto[$j];
                            $referencevoto[$j] = $referencevoto[$j - 1];
                            $referencevoto[$j - 1] = $temp;
                        }
                    }
                }
                if (count($mediavoto) < 3) {
                    for ($i = 0; $i < count($mediavoto); $i++) {
                        if ($mediavoto[$i] != -1) {
                            $execute = 1;
                            $indice = $referencevoto[$i];
                            $votato[$i] = (object)array('nome' => $products[$indice]->nome, 'prezzo' => $products[$indice]->prezzo, 'foto' => $products[$indice]->identificativo);
                        }
                    }
                } else {
                    for ($i = 0; $i < 3; $i++) {
                        if ($mediavoto[$i] != -1) {
                            $execute = 1;
                            $indice = $referencevoto[$i];
                            $votato[$i] = (object)array('nome' => $products[$indice]->nome, 'prezzo' => $products[$indice]->prezzo, 'foto' => $products[$indice]->identificativo);
                        }
                    }
                }
                if ($execute == 0) $votato = (object)null;
            } else $votato = (object)null;

            $search = Categoria::find($categoria);
            $categoria = $search->name;
        }

        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $bodyclass = "productPage";
        $title = "Abbigliamento $genere Online | Xenomod";

        if (empty($marca)) {
            $marca = null;
        } else {
            $temp = $marca;
            $marca = $temp->reference;
        }
        if (empty($collezione)) {
            $collezione = null;
        } else {
            $temp = $collezione;
            $collezione = $temp->reference;
        }

        return view('Frontend.product')
            ->with(compact('uomo')) //menù
            ->with(compact('donna')) //menù
            ->with(compact('bambino')) //menù
            ->with(compact('bambina')) //menù
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('totale'))
            ->with(compact('numero_prodotti'))
            ->with(compact('carrello'))
            ->with(compact('genere'))
            ->with(compact('products'))
            ->with(compact('categoria'))
            ->with(compact('votato'))
            ->with(compact('marca'))
            ->with(compact('collezione'));

    }

    public function productdetail(Request $request, $genere, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            if ($request->has("emailsubscriber")) {
                    $email = $data['emailsubscriber'];

                    Mail::to($email)->send(new MailDevelop);

                    return redirect('/product-details/'.$genere.'&&'.$id)->withSuccessMessage('Grazie per la tua iscrizione! Ti abbiamo inviato un’email di conferma.');
            }

            if (Auth::check()) {
                $iduser = Auth::id();
                $loguser = User::find($iduser);
                if ($loguser->email != $data['email']) return redirect()->back()->withWarningMessage('Inserire l\'email corretta!');
            } else return redirect()->back()->withWarningMessage('Per inserire una Recensione bisogna effettuare il login!');

            if (empty($data['rating'])) return redirect()->back()->withWarningMessage('Form incompleto, Voto mancante!');

            $reviewfoto = Foto::find($id);

            $reviewyet = Recensione::where('modello_id', $reviewfoto->modello_id)->where('users_id', $iduser)->first();
            if (!empty($reviewyet)) return redirect()->back()->withWarningMessage('Uno stesso utente non può Recensire un singolo prodotto più di una volta!');

            $recensione = new Recensione;
            $recensione->data = date("Y-m-d");
            $recensione->users_id = $iduser;
            $recensione->modello_id = $reviewfoto->modello_id;
            if (empty($data['message'])) $recensione->descrizione = "";
            else $recensione->descrizione = $data['message'];
            $recensione->voto = $data['rating'];
            $recensione->save();

            //Aggiorno il campo mediavoto
            $modello = Modello::find($reviewfoto->modello_id);
            $update_recensioni = Recensione::where('modello_id', $reviewfoto->modello_id)->get();
            $somma = 0;
            foreach($update_recensioni as $recensioni) {
                $somma += $recensioni->voto;
            }
            $mediavoto = $somma / count($update_recensioni);
            $modello->update(['mediavoto' => $mediavoto]);

            return redirect("/product-details/$genere&&$id")->withSuccessMessage('Recensione inserita Correttamente!');
        }

        if (session('success_message')) {
            Alert::success('Successo!', session('success_message'));
        }
        if (session('warning_message')) {
            Alert::warning('Errore!', session('warning_message'));
        }

        $photo = Foto::find($id);
        if (empty($photo)) return redirect('/error');

        $altre = Altre::where('foto_id', $id)->get();

        foreach ($altre as $others) {
            switch ($others->tipo) {
                case 'slider':
                    {
                        if ($others->posizione == '1') $slid1 = $others->id;
                        else {
                            if ($others->posizione == '2') $slid2 = $others->id;
                            else $slid3 = $others->id;
                        }
                    }
                    break;
                case 'normal':
                    {
                        if ($others->posizione == '2') $norm2 = $others->id;
                        else $norm3 = $others->id;
                    }
                    break;
                case 'thumbnail':
                    {
                        if ($others->posizione == '1') $thumb1 = $others->id;
                        else {
                            if ($others->posizione == '2') $thumb2 = $others->id;
                            else $thumb3 = $others->id;
                        }
                    }
                    break;
            }
        }

        $product = Modello::find($photo->modello_id);

        $marca = Marca::find($product->marca_id);

        $categoria = Categoria::find($product->categoria_id);
        $id_categoria = $categoria->id;
        $search = Genere::where('tipo', $genere)->first();
        if (empty($search)) return redirect('/error');
        $idgen = $search->id;
        $search = Generehasmodello::where('modello_id', $product->id)->get();
        foreach ($search as $src) {
            if ($src->genere_id == $idgen) {
                if ($src->sconto > 0) {
                    $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                    $prezzo = number_format((float)$temp, 2, '.', '');
                } else $prezzo = number_format((float)$src->prezzo, 2, '.', '');
            }
        }

        $cod_uomo = Generehascategoria::where('genere_id', 1)->get();
        $i = 0;
        foreach ($cod_uomo as $cod) {
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i + 1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2)->get();
        $i = 0;
        foreach ($cod_donna as $cod) {
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i + 1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3)->get();
        $i = 0;
        foreach ($cod_bambino as $cod) {
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i + 1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4)->get();
        $i = 0;
        foreach ($cod_bambina as $cod) {
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i + 1;
        }

        //Select item Size
        $size_select = "";
        $colore_select = "";
        $prima_taglia = 0;
        if ($genere == 'Uomo' || $genere == 'Donna') {
            $alltaglie = Taglia::where('adulto', 1)->get();
            $i = 0;
            $allrecord = Quantita::select('colore_id')
                ->where('modello_id', $product->id)
                ->where('taglia_id', '<', 5)
                ->distinct()
                ->get();
            if (count($allrecord) != 0) {
                foreach ($alltaglie as $taglia) {
                    $exist = Quantita::where('modello_id', $product->id)->where('taglia_id', $taglia->id)->get();
                    if (count($exist) == 0) $size_select .= "<option value=\"$taglia->numero\" disabled>$taglia->numero</option>";
                    else {
                        $size_select .= "<option value=\"$taglia->numero\">$taglia->numero</option>";
                        if ($prima_taglia == 0) {
                            foreach ($allrecord as $record) {
                                $colore = Colore::find($record->colore_id);
                                $exist = Quantita::where('modello_id', $product->id)
                                    ->where('taglia_id', $taglia->id)
                                    ->where('colore_id', $colore->id)
                                    ->first();
                                if (empty($exist)) $colore_select .= "<option value=\"$colore->nome\" disabled>$colore->nome</option>";
                                else $colore_select .= "<option value=\"$colore->nome\">$colore->nome</option>";
                            }
                        }
                        $prima_taglia += 1;
                    }
                    $i = $i + 1;
                }
            }
        }
        if ($genere == 'Bambino' || $genere == 'Bambina') {
            $alltaglie = Taglia::where('adulto', 0)->get();
            $i = 0;
            $allrecord = Quantita::select('colore_id')
                ->where('modello_id', $product->id)
                ->where('taglia_id', '>', 4)
                ->distinct()
                ->get();
            if (count($allrecord) != 0) {
                foreach ($alltaglie as $taglia) {
                    $exist = Quantita::where('modello_id', $product->id)->where('taglia_id', $taglia->id)->get();
                    if (count($exist) == 0) $size_select .= "<option value=\"$taglia->numero\">$taglia->numero</option>";
                    else {
                        $size_select .= "<option value=\"$taglia->numero\">$taglia->numero</option>";
                        if ($prima_taglia == 0) {
                            foreach ($allrecord as $record) {
                                $colore = Colore::find($record->colore_id);
                                $exist = Quantita::where('modello_id', $product->id)
                                    ->where('taglia_id', $taglia->id)
                                    ->where('colore_id', $colore->id)
                                    ->first();
                                if (empty($exist)) $colore_select .= "<option value=\"$colore->nome\" disabled>$colore->nome</option>";
                                else $colore_select .= "<option value=\"$colore->nome\">$colore->nome</option>";
                            }
                        }
                        $prima_taglia += 1;
                    }
                    $i = $i + 1;
                }
            }
        }
        if ($size_select == "") $size_select = "<option value=\"null\" selected>Nessuna Taglia Disponibile</option>";
        if ($colore_select == "") $colore_select = "<option value=\"null\" selected>Nessun Colore Disponibile</option>";

        /*
        $colore_select = "";
        if ($genere == 'Uomo' || $genere == 'Donna') {
            $allrecord = Quantita::where('modello_id', $product->id)->where('taglia_id', '<', 5)->get();
            foreach ($allrecord as $record) {
                $colore = Colore::find($record->colore_id);
                $color_name = strtolower($colore->nome);
                if (strstr($colore_select, "<option class=\"aa-color-$color_name\" value=\"$colore->nome\">$colore->nome</option>") == false)  $colore_select .= "<option class=\"aa-color-$color_name\" value=\"$colore->nome\">$colore->nome</option>";
            }
        }
        if ($genere == 'Bambino' || $genere == 'Bambina') {
            $allrecord = Quantita::where('modello_id', $product->id)->where('taglia_id', '>', 4)->get();
            foreach ($allrecord as $record) {
                $colore = Colore::find($record->colore_id);
                $color_name = strtolower($colore->nome);
                if (strstr($colore_select, "<option class=\"aa-color-$color_name\" value=\"$colore->nome\">$colore->nome</option>") == false)  $colore_select .= "<option class=\"aa-color-$color_name\" value=\"$colore->nome\">$colore->nome</option>";
            }
        }
        if ($colore_select == "") $colore_select = "<option value=\"null\" selected>Nessun Colore Disponibile</option>";
        */

        if ($genere == 'Uomo' || $genere == 'Donna') {
            $quantita = Quantita::where('modello_id', $product->id)->where('taglia_id', '<', 5)->get();
        } else {
            $quantita = Quantita::where('modello_id', $product->id)->where('taglia_id', '>', 4)->get();
        }
        if (count($quantita) == 0) $stock = "Non in stock";
        else $stock = "In stock";

        //Reviews
        $allrecensioni = Recensione::where('modello_id', $product->id)->get();
        foreach ($allrecensioni as $key => $val){
            $temp = User::where('id', $val->users_id)->first();
            $allrecensioni[$key]->nomeutente = $temp->name;
            $allrecensioni[$key]->cognomeutente = $temp->cognome;
            switch ($val->voto) {
                case 1:
                    {
                        $allrecensioni[$key]->rate = "<span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star-o\"></span>
                              <span class=\"fa fa-star-o\"></span>
                              <span class=\"fa fa-star-o\"></span>
                              <span class=\"fa fa-star-o\"></span>";
                    }
                    break;
                case 2:
                    {
                        $allrecensioni[$key]->rate = "<span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star-o\"></span>
                              <span class=\"fa fa-star-o\"></span>
                              <span class=\"fa fa-star-o\"></span>";
                    }
                    break;
                case 3:
                    {
                        $allrecensioni[$key]->rate = "<span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star-o\"></span>
                              <span class=\"fa fa-star-o\"></span>";
                    }
                    break;
                case 4:
                    {
                        $allrecensioni[$key]->rate = "<span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star-o\"></span>";
                    }
                    break;
                case 5:
                    {
                        $allrecensioni[$key]->rate = "<span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star\"></span>
                              <span class=\"fa fa-star\"></span>";
                    }
                    break;
            }
        }
        $numerorecensioni = count($allrecensioni);

        //Related Product
        $product_related = Modello::where('categoria_id', $id_categoria)->where('id', '!=', $product->id)->get();

        $id_genere = Genere::where('tipo', $genere)->first();
        foreach ($product_related as $key => $val) {
            $search = Generehasmodello::where('genere_id', $id_genere->id)->where('modello_id', $val->id)->first();
            if ( !empty($search)) {
                if ($search->sconto > 0) {
                    $temp = $search->prezzo - (($search->prezzo / 100) * $search->sconto);
                    $product_related[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                    $product_related[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                    $product_related[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$search->prezzo</del></span>";
                } else {
                    $product_related[$key]->prezzo_normale = "";
                    $product_related[$key]->prezzo = number_format((float)$search->prezzo, 2, '.', '');
                    $product_related[$key]->sconto = "";
                }
                $photo = Foto::where('modello_id', $val->id)->first();
                $product_related[$key]->photoid = $photo->id;
                $altre = Altre::where('foto_id', $photo->id)->get();

                foreach ($altre as $others) {
                    switch ($others->tipo) {
                        case 'slider':
                            {
                                if ($others->posizione == '1') $product_related[$key]->slid1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $product_related[$key]->slid2 = $others->id;
                                    else $product_related[$key]->slid3 = $others->id;
                                }
                            }
                            break;
                        case 'normal':
                            {
                                if ($others->posizione == '2') $product_related[$key]->norm2 = $others->id;
                                else $product_related[$key]->norm3 = $others->id;
                            }
                            break;
                        case 'thumbnail':
                            {
                                if ($others->posizione == '1') $product_related[$key]->thumb1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $product_related[$key]->thumb2 = $others->id;
                                    else $product_related[$key]->thumb3 = $others->id;
                                }
                            }
                            break;
                    }
                }

                $brand_name = Marca::find($val->marca_id);
                $product_related[$key]->marca = $brand_name->nome;

                if ($genere == 'Uomo' || $genere == 'Donna') {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                } else {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                }
                if (count($quantita) == 0) {
                    $product_related[$key]->stock = "Non in stock";
                    $product_related[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                }
                else $product_related[$key]->stock = "In stock";
            }
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $bodyclass = "";
        $title = "Abbigliamento $genere Online | Xenomod";

        return view('Frontend.product-detail')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('carrello'))
            ->with(compact('numero_prodotti'))
            ->with(compact('totale'))
            ->with(compact('genere'))
            ->with(compact('categoria'))
            ->with(compact('stock'))
            ->with(compact('product'))
            ->with('colore', $colore_select)
            ->with('size', $size_select)
            ->with('normal2', $norm2)
            ->with('normal3', $norm3)
            ->with('slider1', $slid1)
            ->with('slider2', $slid2)
            ->with('slider3', $slid3)
            ->with('thumbnail1', $thumb1)
            ->with('thumbnail2', $thumb2)
            ->with('thumbnail3', $thumb3)
            ->with(compact('marca'))
            ->with('prezzo', $prezzo)
            ->with('id', $id)
            ->with(compact('allrecensioni'))
            ->with(compact('numerorecensioni'))
            ->with(compact('product_related'));
    }

    public function cart(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            if ($request->has("emailsubscriber")) {
                $email = $data['emailsubscriber'];

                Mail::to($email)->send(new MailDevelop);

                return redirect('/cart')->withSuccessMessage('Grazie per la tua iscrizione! Ti abbiamo inviato un’email di conferma.');
            }

            if (empty($data['coupon'])) {
                //Utente loggato
                if (Auth::check()) {
                    $iduser = Auth::id();
                    //Cancello il coupon
                    $session_coupon = Session::get('coupon');
                    if (!empty($session_coupon)) {
                        foreach ($session_coupon as $cou) {
                            if ($cou['id'] == $iduser) session()->pull('coupon', $cou);
                        }
                    }

                    $quantita = $data['quantity'];
                    $idmodello = $data['modelloid'];
                    $taglia = $data['tagliaid'];
                    $colore = $data['coloreid'];
                    $i = 0;
                    $quantita_originale[0] = 0;
                    foreach ($quantita as $item) {
                        $setquantita = (int) $item;
                        $carrello = Carrello::where('modello_id', $idmodello[$i])
                            ->where('users_id', $iduser)
                            ->where('taglia_id', $taglia[$i])
                            ->where('colore_id', $colore[$i])
                            ->first();
                        $check_quantita = Quantita::where('modello_id', $idmodello[$i])
                            ->where('taglia_id', $taglia[$i])
                            ->where('colore_id', $colore[$i])
                            ->first();
                        $quantita_originale[$i] = $carrello->quantita;
                        if ($check_quantita->quantita < $setquantita) {
                            //Ricreo il carrello originale
                            $i = $i - 1;
                            while ($i >= 0) {
                                $old_carrello = Carrello::where('modello_id', $idmodello[$i])
                                    ->where('users_id', $iduser)
                                    ->where('taglia_id', $taglia[$i])
                                    ->where('colore_id', $colore[$i])
                                    ->first();
                                $old_carrello->update(['quantita' => $quantita_originale[$i]]);
                                $i = $i - 1;
                            }

                            $modello = Modello::find($carrello->modello_id);
                            return redirect('/cart')->withWarningMessage('La quantita che hai selezionato supera i pezzi attualmente a disposizione per '.$modello->nome.'.');
                        }
                        $carrello->update(['quantita' => $setquantita]);
                        $i = $i+1;
                    }
                    return redirect('/cart')->withSuccessMessage('Operazione completata con Successo!');
                } else {
                    //Utente non loggato
                    //Forget coupon
                    return redirect('/cart');
                }
            } else {
                $iduser = Auth::id();
                //Cancello il coupon
                $session_coupon = Session::get('coupon');
                if (!empty($session_coupon)) {
                    foreach ($session_coupon as $cou) {
                        if ($cou['id'] == $iduser) session()->pull('coupon', $cou);
                    }
                }

                $coupon = Coupon::where('codice', $data['coupon'])->first();
                if (empty($coupon)) return redirect()->back()->withWarningMessage('Codice coupon non valido!');
                if ($coupon->stato == 0) return redirect()->back()->withWarningMessage('Codice coupon non valido!');
                $actualdate = date("Y-m-d");
                if ($coupon->scadenza < $actualdate) return redirect()->back()->withWarningMessage('Codice coupon scaduto!');

                //Calcolo il totale del carrello
                $carrello = Carrello::where('users_id', $iduser)->get();

                $totale = 0;
                foreach ($carrello as $key => $val) {
                    $taglia = Taglia::find($val->taglia_id);
                    if ($taglia->adulto == 1) {
                        $generehasmodello = Generehasmodello::where('modello_id', $val->modello_id)->where('genere_id', '<', 3)->first();
                    } else {
                        $generehasmodello = Generehasmodello::where('modello_id', $val->modello_id)->where('genere_id', '>', 2)->first();
                    }
                    if ($generehasmodello->sconto > 0) {
                        $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                        $prezzo = number_format((float)$temp, 2, '.', '');
                    }
                    else $prezzo = $generehasmodello->prezzo;
                    $totale += $prezzo * $val->quantita;
                }


                if ($coupon->tipoimporto == 'Percentage') {
                    $importo = $totale - ($totale * ($coupon->importo / 100));
                } else {
                    $importo = $coupon->importo;
                }

                $sessione = [
                    'id' => $iduser,
                    'importo' => $importo,
                    'codiceCoupon' => $coupon->codice
                ];

                Session::push('coupon', $sessione);

                return redirect('/cart')->withSuccessMessage('Operazione completata con Successo!');

            }
        }
        if (session('success_message')) {
            Alert::success('Successo!', session('success_message'));
        }
        if (session('warning_message')) {
            Alert::warning('Errore!', session('warning_message'));
        }

        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $parziale_totale = 0;
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $carrello[$key]->prezzo_totale = $carrello[$key]->prezzo * $val->quantita;
                $parziale_totale += $val->prezzo_totale;
            }
            $coupon = Session::get('coupon');
            if (!empty($coupon)) {
                foreach ($coupon as $cop) {
                    if ($cop['id'] == $iduser) $totale = $parziale_totale - $cop['importo'];
                }
            } else $totale = $parziale_totale;
            if ($totale == 0) $totale = $parziale_totale;
        } else {
            //Utente non loggato
            $carrello = (object) null;
            $parziale_totale = 0;
            $totale = 0;
            $numero_prodotti = 0;
            //Forget coupon

            //if (session('importoCoupon')) {
            //    $sconto_coupon = Session::get('importoCoupon');
            //    $totale = $parziale_totale - $sconto_coupon;
            //} else $totale = $parziale_totale;
        }

        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        $bodyclass = "";
        $title = "Carrello | Xenomod";


        return view('Frontend.cart')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('carrello'))
            ->with(compact('numero_prodotti'))
            ->with(compact('parziale_totale'))
            ->with(compact('totale'));
    }

    public function deleteCart($modello) {
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            //Cancello il coupon
            $session_coupon = Session::get('coupon');
            if (!empty($session_coupon)) {
                foreach ($session_coupon as $cou) {
                    if ($cou['id'] == $iduser) session()->pull('coupon', $cou);
                }
            }
            $carrello = Carrello::where('modello_id', $modello)->where('users_id', $iduser)->first();
            $carrello->delete();
            return redirect()->back()->withSuccessMessage('Operazione completata con Successo!');
        }
        //Utente non loggato
        return redirect()->back()->withSuccessMessage('Operazione completata con Successo!');
    }

    public function deleteWishlist($modello) {
        if (Auth::check()) {
            $iduser = Auth::id();
            $wishlist = Preferito::where('modello_id', $modello)->where('users_id', $iduser)->first();
            $wishlist->delete();
            return redirect()->back()->withSuccessMessage('Operazione completata con Successo!');
        }
    }

    public function requestpassword() {
        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $bodyclass = "";
        $title = "Password Dimenticata | Xenomod";

        return view('Frontend.password')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('totale'))
            ->with(compact('numero_prodotti'))
            ->with(compact('carrello'));
    }

    public function resetpassword($token, $email) {
        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $bodyclass = "";
        $title = "Nuova Password | Xenomod";

        return view('Frontend.reset-password')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('carrello'))
            ->with(compact('totale'))
            ->with(compact('numero_prodotti'))
            ->with('token', $token)
            ->with('email', $email);
    }

    public function checkout (Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            if (empty($data['coupon'])) {
                if (Auth::check()) {
                    $iduser = Auth::id();
                    $carrello = Carrello::where('users_id', $iduser)->get();
                    if ($carrello->isEmpty()) {
                        return redirect('/checkout')->withWarningMessage('Il tuo Carrello è vuoto.');
                    }
                    //Controllo se ci sono pezzi disponibili per ogni modello nel carrello
                    foreach ($carrello as $cart) {
                        $exist = Quantita::where('modello_id', $cart->modello_id)
                            ->where('taglia_id', $cart->taglia_id)
                            ->where('colore_id', $cart->colore_id)->first();
                        if ($exist->quantita < $cart->quantita) {
                            $modello = Modello::find($cart->modello_id);
                            return redirect('/checkout')
                                ->withWarningMessage('Attualmente non ci sono pezzi disponibili per '.$modello->nome.', elimina questo prodotto se vuoi continuare con l\'acquisto.');
                        }
                    }

                    //Creo l'ordine
                    $ordine = new Ordine;

                    $ordine->nomefatturazione = $data['nomefatturazione'];
                    $ordine->cognomefatturazione = $data['cognomefatturazione'];
                    $ordine->aziendafatturazione = $data['aziendafatturazione'];
                    $ordine->emailfatturazione = $data['emailfatturazione'];
                    $ordine->telefonofatturazione = $data['telefonofatturazione'];
                    $ordine->indirizzofatturazione = $data['indirizzofatturazione'];
                    $ordine->nazionefatturazione = $data['nazionefatturazione'];
                    $ordine->abitazionefatturazione = $data['abitazionefatturazione'];
                    $ordine->cittafatturazione = $data['cittafatturazione'];
                    $ordine->nomespedizione = $data['nomespedizione'];
                    $ordine->cognomespedizione = $data['cognomespedizione'];
                    $ordine->aziendaspedizione = $data['aziendaspedizione'];
                    $ordine->emailspedizione = $data['emailspedizione'];
                    $ordine->telefonospedizione = $data['telefonospedizione'];
                    $ordine->indirizzospedizione = $data['indirizzospedizione'];
                    $ordine->nazionespedizione = $data['nazionespedizione'];
                    $ordine->abitazionespedizione = $data['abitazionespedizione'];
                    $ordine->cittaspedizione = $data['cittaspedizione'];
                    $ordine->notespedizione = $data['notespedizione'];
                    if ($data['optionsRadios'] == 2) $ordine->pagamento = 'Paypal';
                    else $ordine->pagamento = 'Alla consegna';

                    $ordine->totale = $data['totale'];
                    $ordine->users_id = $cart->users_id;

                    $actualdate = date("Y-m-d");
                    $shippingdate = date_create($actualdate);
                    $ordine->dataordine = $actualdate;
                    $ordine->dataaccettazione = $actualdate;
                    date_add($shippingdate, date_interval_create_from_date_string("3 days"));
                    $ordine->dataspedizione = $shippingdate;
                    $arrivedate = date_create($actualdate);
                    date_add($arrivedate, date_interval_create_from_date_string("5 days"));
                    $ordine->dataarrivo = $arrivedate;

                    $ordine->save();

                    foreach ($carrello as $cart) {
                        $modello = Modello::where('id', $cart->modello_id)->first();
                        if ($cart->taglia_id < 5) {
                            $generehasmodello = Generehasmodello::where('genere_id', '<', 3)
                                ->where('modello_id', $cart->modello_id)->first();
                        } else {
                            $generehasmodello = Generehasmodello::where('genere_id', '>', 2)
                                ->where('modello_id', $cart->modello_id)->first();
                        }
                        if ($generehasmodello->sconto > 0) {
                            $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                            $prezzo = number_format((float)$temp, 2, '.', '');
                        }
                        else $prezzo = number_format((float)$generehasmodello->prezzo, 2, '.', '');

                        $prodotto_ordinato = new Prodottoordinato;

                        $prodotto_ordinato->ordine_id = $ordine->id;
                        $prodotto_ordinato->nome = $modello->nome;
                        $prodotto_ordinato->modello_id = $modello->id;
                        $prodotto_ordinato->taglia_id = $cart->taglia_id;
                        $prodotto_ordinato->colore_id = $cart->colore_id;
                        $prodotto_ordinato->quantita = $cart->quantita;
                        $prodotto_ordinato->prezzo = $prezzo * $cart->quantita;

                        $prodotto_ordinato->save();

                        //Decremento quantita
                        $quantita = Quantita::where('modello_id', $cart->modello_id)
                            ->where('taglia_id', $cart->taglia_id)
                            ->where('colore_id', $cart->colore_id)->first();
                        $resto = $quantita->quantita - $cart->quantita;
                        if ($resto == 0) $quantita->delete();
                        else $quantita->update(['quantita' => $resto]);
                    }

                    //Cancello il coupon
                    $session_coupon = Session::get('coupon');
                    if (!empty($session_coupon)) {
                        foreach ($session_coupon as $cou) {
                            if ($cou['id'] == $iduser) session()->pull('coupon', $cou);
                        }
                    }

                    Carrello::where('users_id', $iduser)->delete();
                } else {
                    return redirect('/checkout')->withWarningMessage('Per completare il checkout devi effettuare il login!');
                }
            } else {
                $iduser = Auth::id();
                //Cancello il coupon
                $session_coupon = Session::get('coupon');
                if (!empty($session_coupon)) {
                    foreach ($session_coupon as $cou) {
                        if ($cou['id'] == $iduser) session()->pull('coupon', $cou);
                    }
                }

                $coupon = Coupon::where('codice', $data['coupon'])->first();
                if (empty($coupon)) return redirect()->back()->withWarningMessage('Codice coupon non valido!');
                if ($coupon->stato == 0) return redirect()->back()->withWarningMessage('Codice coupon non valido!');
                $actualdate = date("Y-m-d");
                if ($coupon->scadenza < $actualdate) return redirect()->back()->withWarningMessage('Codice coupon scaduto!');

                //Calcolo il totale del carrello
                $carrello = Carrello::where('users_id', $iduser)->get();

                $totale = 0;
                foreach ($carrello as $key => $val) {
                    $taglia = Taglia::find($val->taglia_id);
                    if ($taglia->adulto == 1) {
                        $generehasmodello = Generehasmodello::where('modello_id', $val->modello_id)->where('genere_id', '<', 3)->first();
                    } else {
                        $generehasmodello = Generehasmodello::where('modello_id', $val->modello_id)->where('genere_id', '>', 2)->first();
                    }
                    if ($generehasmodello->sconto > 0) {
                        $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                        $prezzo = number_format((float)$temp, 2, '.', '');
                    }
                    else $prezzo = $generehasmodello->prezzo;
                    $totale += $prezzo * $val->quantita;
                }


                if ($coupon->tipoimporto == 'Percentage') {
                    $importo = $totale - ($totale * ($coupon->importo / 100));
                } else {
                    $importo = $coupon->importo;
                }

                $sessione = [
                    'id' => $iduser,
                    'importo' => $importo,
                    'codiceCoupon' => $coupon->codice
                ];

                Session::push('coupon', $sessione);

                return redirect('/checkout')->withSuccessMessage('Operazione completata con Successo!');
            }

            $user = User::find($iduser);
            $email = $user->email;

            Mail::to($email)->send(new OrdineCreato);

            return redirect("/order/$ordine->id")->withSuccessMessage('Grazie per il tuo nuovo acquisto! A breve riceverai un’email di conferma.');
        }


        if (session('success_message')) {
            Alert::success('Successo!', session('success_message'));
        }
        if (session('warning_message')) {
            Alert::warning('Errore!', session('warning_message'));
        }


        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            $parziale_totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $parziale_totale += $carrello[$key]->prezzo * $val->quantita;
                $profilo = Profilo::where('users_id', $iduser)->first();
            }
            $coupon = Session::get('coupon');
            if (!empty($coupon)) {
                foreach ($coupon as $cop) {
                    if ($cop['id'] == $iduser) $totale = $parziale_totale - $cop['importo'];
                }
            } else $totale = $parziale_totale;
            if ($totale == 0) $totale = $parziale_totale;
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
            $parziale_totale = 0;
        }

        $temp = $parziale_totale * 0.22;
        $tasse = number_format((float)$temp, 2, '.', '');
        $totale1 = $totale + $tasse;

        if (empty($profilo)) {
            $profilo = null;
        }

        $bodyclass = "";
        $title = "Checkout | Xenomod";

        return view('Frontend.checkout')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('profilo'))
            ->with(compact('parziale_totale'))
            ->with(compact('totale'))
            ->with(compact('totale1'))
            ->with(compact('numero_prodotti'))
            ->with(compact('tasse'))
            ->with(compact('carrello'));
    }

    public function contact(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            if ($request->has("oggetto")) {
                $email = $data['email'];

                //Mail::to($email)->send(new MailDevelop);

                return redirect('/contact')->withSuccessMessage('Non appena possibile risponderemo all\'email fornitaci.Grazie, a presto.');
            }

            $email = $data['emailsubscriber'];

            Mail::to($email)->send(new MailDevelop);

            return redirect('/contact')->withSuccessMessage('Grazie per la tua iscrizione! Ti abbiamo inviato un’email di conferma.');
        }

        if (session('success_message')) {
            Alert::success('Successo!', session('success_message'));
        }

        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $bodyclass = "";
        $title = "Contattaci | Xenomod";


        return view('Frontend.contact')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('totale'))
            ->with(compact('numero_prodotti'))
            ->with(compact('carrello'));
    }

    public function account() {
        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $bodyclass = "";
        $title = "Registrati | Xenomod";

        return view('Frontend.account')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('totale'))
            ->with(compact('numero_prodotti'))
            ->with(compact('carrello'));
    }

    public function profile (Request $request) {
        if (Auth::check()){
            //Ok
        }
        else {
            return redirect('/home')->withWarningMessage('Esegui il Login per accedere!');
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (!empty($data['current_password'])) {
                $check_password = User::where(['email' => Auth::User()->email])->first();
                $current_password = $data['current_password'];
                if (Hash::check($current_password, $check_password->password)) {
                    $password = bcrypt($data['new_password']);
                    User::where(['email' => Auth::User()->email])->update(['password' => $password]);
                    return redirect('/account')->with('flash_message_success', 'Password Aggiornata con Successo!');
                } else {
                    return redirect('/account')->with('flash_message_error', 'Password Corrente Incorretta!');
                }
            } else {
                //echo "<pre>"; print_r($data); die;
                $iduser = Auth::id();
                $temp = date("Y-m-d", strtotime($data['data']));
                Profilo::where('users_id', $iduser)
                    ->update(['nomefatturazione' => $data['nome'], 'cognomefatturazione' => $data['cognome'],'indirizzofatturazione' => $data['indirizzo'],
                        'nazionefatturazione' => $data['nazionefatturazione'], 'cittafatturazione' => $data['citta'], 'datanascita' => $temp, 'telefonofatturazione' => $data['telefono']]);

                return redirect('/account')->with('flash_message_success', 'Dati Aggiornati con Successo!');
            }
        }
/*
        if (session('success_message')) {
            Alert::success('Successo!', session('success_message'));
        }
        if (session('warning_message')) {
            Alert::warning('Errore!', session('warning_message'));
        }*/

        $iduser = Auth::id();
        $profilo = Profilo::where('users_id', $iduser)->first();
        $temp = date("d-m-Y", strtotime($profilo->datanascita));
        $profilo->datanascita = $temp;

        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $bodyclass = "";
        $title = "Il Mio Account | Xenomod";

        return view('Frontend.profile')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('totale'))
            ->with(compact('numero_prodotti'))
            ->with(compact('carrello'))
            ->with(compact('profilo'));
    }

    public function chkPassword (Request $request) {
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $iduser = Auth::id();
        $check_password = User::where('id', $iduser)->first();
        if (Hash::check($current_password, $check_password->password)){
            echo "true";
            die;
        } else {
            echo "false";
            die;
        }
    }

    public function order () {
        if (Auth::check()){
            //Ok
        }
        else {
            return redirect('/home')->withWarningMessage('Esegui il Login per accedere!');
        }
        $iduser = Auth::id();
        $ordini = Ordine::where('users_id', $iduser)->orderBy('id', 'desc')->get();
        foreach ($ordini as $key => $val) {
            $temp = date("d-m-Y", strtotime($val->dataordine));
            $val->dataordine = $temp;
            $ordini[$key]->prodotti = collect (new Prodottoordinato);
            $prodotti_ordinati = Prodottoordinato::where('ordine_id', $val->id)->get();
            foreach ($prodotti_ordinati as $item) {
                $ordini[$key]->prodotti->push($item);
            }
        }

        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $bodyclass = "";
        $title = "I Miei Ordini | Xenomod";

        return view('Frontend.order')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('totale'))
            ->with(compact('numero_prodotti'))
            ->with(compact('carrello'))
            ->with(compact('ordini'));
    }

    public function orderdetail ($id = null) {
        if (Auth::check()){
            //Ok
        }
        else {
            return redirect('/home')->withWarningMessage('Esegui il Login per accedere!');
        }
        $prodotti_ordinati = Prodottoordinato::where('ordine_id', $id)->get();

        foreach ($prodotti_ordinati as $prodotto) {
            $taglia = Taglia::find($prodotto->taglia_id);
            $colore = Colore::find($prodotto->colore_id);
            $prodotto->taglia_id = $taglia->numero;
            $prodotto->colore_id = $colore->nome;
        }

        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $bodyclass = "";
        $title = "Dettaglio Ordini | Xenomod";

        return view('Frontend.order-detail')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('totale'))
            ->with(compact('numero_prodotti'))
            ->with(compact('carrello'))
            ->with(compact('id'))
            ->with(compact('prodotti_ordinati'));
    }

    public function wishlist (Request $request) {
        if (Auth::check()){
            //Ok
        }
        else {
            return redirect('/home')->withWarningMessage('Esegui il Login per accedere!');
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $email = $data['emailsubscriber'];

            Mail::to($email)->send(new MailDevelop);

            return redirect('/wishlist')->withSuccessMessage('Grazie per la tua iscrizione! Ti abbiamo inviato un’email di conferma.');
        }

        $iduser = Auth::id();
        $wish = Preferito::where('users_id', $iduser)->get();

        foreach ($wish as $key => $val) {
            $modello = Modello::find($val->modello_id);
            $wish[$key]->modello_id = $modello->id;
            $wish[$key]->modello_nome = $modello->nome;
            $foto = Foto::where('modello_id', $modello->id)->first();
            $wish[$key]->idphoto = $foto->id;
            $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', $val->genere_id)->first();
            if ($generehasmodello->sconto > 0) {
                $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                $wish[$key]->prezzo = number_format((float)$temp, 2, '.', '');
            }
            else $wish[$key]->prezzo = number_format((float)$generehasmodello->prezzo, 2, '.', '');
            $genere = Genere::find($val->genere_id);
            $wish[$key]->genere = $genere->tipo;
            if ($genere->tipo == 'Uomo' || $genere->tipo == 'Donna') {
                $quantita = Quantita::where('modello_id', $modello->id)->where('taglia_id', '<', 5)->get();
                if (!$quantita->isEmpty()) $wish[$key]->stock = "In Stock";
                else $wish[$key]->stock = "Non in Stock";
            } else {
                $quantita = Quantita::where('modello_id', $modello->id)->where('taglia_id', '>', 4)->get();
                if (!$quantita->isEmpty()) $wish[$key]->stock = "In Stock";
                else $wish[$key]->stock = "Non in Stock";
            }
        }

        if (session('success_message')) {
            Alert::success('Successo!', session('success_message'));
        }
        if (session('warning_message')) {
            Alert::warning('Errore!', session('warning_message'));
        }

        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $bodyclass = "";
        $title = "La Tua Lista Desideri | Xenomod";

        return view('Frontend.wishlist')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('wish'))
            ->with(compact('totale'))
            ->with(compact('numero_prodotti'))
            ->with(compact('carrello'));
    }

    public function error(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $email = $data['emailsubscriber'];

            Mail::to($email)->send(new MailDevelop);

            return redirect('/error')->withSuccessMessage('Grazie per la tua iscrizione! Ti abbiamo inviato un’email di conferma.');
        }

        if (session('success_message')) {
            Alert::success('Successo!', session('success_message'));
        }

        $cod_uomo = Generehascategoria::where('genere_id', 1 )->get();
        $i = 0;
        foreach($cod_uomo as $cod){
            $uomo[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_donna = Generehascategoria::where('genere_id', 2 )->get();
        $i = 0;
        foreach($cod_donna as $cod){
            $donna[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambino = Generehascategoria::where('genere_id', 3 )->get();
        $i = 0;
        foreach($cod_bambino as $cod){
            $bambino[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }
        $cod_bambina = Generehascategoria::where('genere_id', 4 )->get();
        $i = 0;
        foreach($cod_bambina as $cod){
            $bambina[$i] = Categoria::where('id', $cod->categoria_id)->first();
            $i = $i+1;
        }

        //Carrello
        //Utente loggato
        if (Auth::check()) {
            $iduser = Auth::id();
            $carrello = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($carrello);
            $totale = 0;
            foreach ($carrello as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $carrello[$key]->modello_nome = $modello->nome;
                $carrello[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $carrello[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $carrello[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $carrello[$key]->idfoto = $foto->id;
                $gender = Genere::find($generehasmodello->genere_id);
                $carrello[$key]->genere = $gender->tipo;
                $totale += $carrello[$key]->prezzo * $val->quantita;
            }
        } else {
            //Utente non loggato
            $numero_prodotti = 0;
            $carrello = (object) null;
            $totale = 0;
        }

        $bodyclass = "";
        $title = "Errore | Xenomod";

        return view('Frontend.404')
            ->with(compact('uomo'))
            ->with(compact('donna'))
            ->with(compact('bambino'))
            ->with(compact('bambina'))
            ->with(compact('bodyclass'))
            ->with(compact('title'))
            ->with(compact('totale'))
            ->with(compact('numero_prodotti'))
            ->with(compact('carrello'));
    }

    //Color select
    public function colorSelect(Request $request) {
        $data = $request->all();
        $photo = Foto::find($data['idphoto']);
        $product = Modello::find($photo->modello_id);
        $colore_select = "";
        $prima_taglia = 0;
        if ($data['genere'] == 'Uomo' || $data['genere'] == 'Donna') {
            $alltaglie = Taglia::where('adulto', 1)->get();
            $allrecord = Quantita::select('colore_id')
                ->where('modello_id', $product->id)
                ->where('taglia_id', '<', 5)
                ->distinct()
                ->get();
            if (count($allrecord) != 0) {
                foreach ($alltaglie as $taglia) {
                    $exist = Quantita::where('modello_id', $product->id)->where('taglia_id', $taglia->id)->get();
                    if (count($exist) != 0 && $prima_taglia == 0) {
                        foreach ($allrecord as $record) {
                            $colore = Colore::find($record->colore_id);
                            $exist = Quantita::where('modello_id', $product->id)
                                ->where('taglia_id', $taglia->id)
                                ->where('colore_id', $colore->id)
                                ->first();
                            if (empty($exist)) $colore_select .= "<option value=\"$colore->nome\" disabled>$colore->nome</option>";
                            else $colore_select .= "<option value=\"$colore->nome\">$colore->nome</option>";
                        }
                        $prima_taglia += 1;
                    }
                }
            }
        }
        if ($data['genere'] == 'Bambino' || $data['genere'] == 'Bambina') {
            $alltaglie = Taglia::where('adulto', 0)->get();
            $allrecord = Quantita::select('colore_id')
                ->where('modello_id', $product->id)
                ->where('taglia_id', '>', 4)
                ->distinct()
                ->get();
            if (count($allrecord) != 0) {
                foreach ($alltaglie as $taglia) {
                    $exist = Quantita::where('modello_id', $product->id)->where('taglia_id', $taglia->id)->get();
                    if (count($exist) != 0 && $prima_taglia == 0) {
                        foreach ($allrecord as $record) {
                            $colore = Colore::find($record->colore_id);
                            $exist = Quantita::where('modello_id', $product->id)
                                ->where('taglia_id', $taglia->id)
                                ->where('colore_id', $colore->id)
                                ->first();
                            if (empty($exist)) $colore_select .= "<option value=\"$colore->nome\" disabled>$colore->nome</option>";
                            else $colore_select .= "<option value=\"$colore->nome\">$colore->nome</option>";
                        }
                        $prima_taglia += 1;
                    }
                }
            }
        }
        if ($colore_select == "") $colore_select = "<option value=\"null\" selected>Nessun Colore Disponibile</option>";

        echo $colore_select;
    }

    //Size select
    public function sizeSelect(Request $request) {
        $data = $request->all();
        $photo = Foto::find($data['idphoto']);
        $product = Modello::find($photo->modello_id);
        $size_select = "";
        if ($data['genere'] == 'Uomo' || $data['genere'] == 'Donna') {
            $disponibilita = Quantita::where('modello_id', $product->id)->where('taglia_id', '<', 5)->get();
            if (count($disponibilita) == 0) {
                $size_select = "<option value=\"null\" selected>Nessuna Taglia Disponibile</option>";
                echo $size_select;
                die;
            }
            $alltaglie = Taglia::where('adulto', 1)->get();
            foreach ($alltaglie as $taglia) {
                $exist = Quantita::where('modello_id', $product->id)->where('taglia_id', $taglia->id)->get();
                if (count($exist) == 0) $size_select .= "<option value=\"$taglia->numero\" disabled>$taglia->numero</option>";
                else {
                    $size_select .= "<option value=\"$taglia->numero\">$taglia->numero</option>";
                }
            }
        }

        if ($data['genere'] == 'Bambino' || $data['genere'] == 'Bambina') {
            $disponibilita = Quantita::where('modello_id', $product->id)->where('taglia_id', '>', 4)->get();
            if (count($disponibilita) == 0) {
                $size_select = "<option value=\"null\" selected>Nessuna Taglia Disponibile</option>";
                echo $size_select;
                die;
            }
            $alltaglie = Taglia::where('adulto', 0)->get();
            foreach ($alltaglie as $taglia) {
                $exist = Quantita::where('modello_id', $product->id)->where('taglia_id', $taglia->id)->get();
                if (count($exist) == 0) $size_select .= "<option value=\"$taglia->numero\">$taglia->numero</option>";
                else {
                    $size_select .= "<option value=\"$taglia->numero\">$taglia->numero</option>";
                }
            }
        }

        echo $size_select;
    }

    //Elenco categorie
    public function elencoCategorie(Request $request) {
        $data = $request->all();
        $elenco_categorie = "";
        $categoria = Categoria::where('name', $data['categoria'])->first();
        $genere = Genere::where('tipo', $data['genere'])->first();
        $generehascategoria = Generehascategoria::where('genere_id', $genere->id)
            ->where('categoria_id', '!=', $categoria->id)
            ->take(5)
            ->get();
        foreach($generehascategoria as $gen){
            $search = Categoria::find($gen->categoria_id);
            $elenco_categorie .= "<li><a href=\"../product/$genere->tipo&&$search->reference\">$search->name</a></li>";
        }
        echo $elenco_categorie;
    }

    //Link wishlist, account e ordini
    public function wishlistCall() {
        session()->forget('ordercall');
        session()->forget('accountcall');
        Session::put('wishlistcall', 'wishlist');
    }
    public function accountCall() {
        session()->forget('ordercall');
        session()->forget('wishlistcall');
        Session::put('accountcall', 'account');
    }
    public function orderCall() {
        session()->forget('accountcall');
        session()->forget('wishlistcall');
        Session::put('ordercall', 'order');
    }
    public function wishlistUncall() {
        session()->forget('wishlistcall');
        session()->forget('accountcall');
        session()->forget('ordercall');
    }

    //Filter color
    public function filterColor(Request $request) {
        $data = $request->all();
        $colore = Colore::where('nome', $data['colore'])->first();

        if (!empty($data['marca'])) {
            $marca = Marca::where('reference', $data['marca'])->first();
            $search = Modello::where('marca_id', $marca->id)->get();

            $gen = Genere::where('tipo', $data['genere'])->first();

            $products = collect(new Modello);

            //Prendo tutti i modelli di cui ho bisogno
            foreach($search as $src) {
                $generehasmodello = Generehasmodello::where('modello_id', $src->id)->where('genere_id', $gen->id)->first();
                if (!empty($generehasmodello)) {
                    if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                        $esiste = Quantita::where('modello_id', $src->id)
                            ->where('colore_id', $colore->id)
                            ->where('taglia_id', '<', 5)
                            ->first();
                    } else {
                        $esiste = Quantita::where('modello_id', $src->id)
                            ->where('colore_id', $colore->id)
                            ->where('taglia_id', '>', 4)
                            ->first();
                    }
                    if (!empty($esiste)) $products->push($src);
                }
            }

            $category = Categoria::where('reference', 'tutto')->first();

            foreach($products as $key => $val){
                $src = Generehasmodello::where('genere_id', $gen->id)->where('modello_id', $val->id)->first();
                if ($src->sconto > 0) {
                    $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                    $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                    $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                }
                else {
                    $products[$key]->prezzo_normale = "";
                    $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                    $products[$key]->sconto = "";
                }

                if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                } else {
                    $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                }
                if (count($quantita) == 0) {
                    $products[$key]->stock = "Non in stock";
                    $products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                }
                else $products[$key]->stock = "In stock";

                $brand_name = Marca::find($val->marca_id);
                $products[$key]->marca = $brand_name->nome;

                $photo = Foto::where('modello_id', $val->id)->first();
                $products[$key]->identificativo = $photo->id;

                $altre = Altre::where('foto_id', $photo->id)->get();

                foreach($altre as $others){
                    switch ($others->tipo) {
                        case 'slider': {
                            if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                else $products[$key]->slid3 = $others->id;
                            }
                        }
                            break;
                        case 'normal': {
                            if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                            else $products[$key]->norm3 = $others->id;
                        }
                            break;
                        case 'thumbnail': {
                            if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                            else {
                                if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                else $products[$key]->thumb3 = $others->id;
                            }
                        }
                            break;
                    }
                }
            }
        } else {
            if (!empty($data['collezione'])) {
                $collezione = Collezione::where('reference', $data['collezione'])->first();
                $search = Modello::where('collezione_id', $collezione->id)->get();

                $gen = Genere::where('tipo', $data['genere'])->first();

                $products = collect(new Modello);

                //Prendo tutti i modelli di cui ho bisogno
                foreach($search as $src) {
                    $generehasmodello = Generehasmodello::where('modello_id', $src->id)->where('genere_id', $gen->id)->first();
                    if (!empty($generehasmodello)) {
                        if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                            $esiste = Quantita::where('modello_id', $src->id)
                                ->where('colore_id', $colore->id)
                                ->where('taglia_id', '<', 5)
                                ->first();
                        } else {
                            $esiste = Quantita::where('modello_id', $src->id)
                                ->where('colore_id', $colore->id)
                                ->where('taglia_id', '>', 4)
                                ->first();
                        }
                        if (!empty($esiste)) $products->push($src);
                    }
                }

                $category = Categoria::where('reference', 'tutto')->first();

                foreach($products as $key => $val){
                    $src = Generehasmodello::where('genere_id', $gen->id)->where('modello_id', $val->id)->first();
                    if ($src->sconto > 0) {
                        $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                        $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                        $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                        $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                    }
                    else {
                        $products[$key]->prezzo_normale = "";
                        $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                        $products[$key]->sconto = "";
                    }

                    if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                        $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '<', 5)->get();
                    } else {
                        $quantita = Quantita::where('modello_id', $val->id)->where('taglia_id', '>', 4)->get();
                    }
                    if (count($quantita) == 0) {
                        $products[$key]->stock = "Non in stock";
                        $products[$key]->sconto = "<span class=\"aa-badge aa-sold-out\" href=\"#\">Sold Out!</span>";
                    }
                    else $products[$key]->stock = "In stock";

                    $brand_name = Marca::find($val->marca_id);
                    $products[$key]->marca = $brand_name->nome;

                    $photo = Foto::where('modello_id', $val->id)->first();
                    $products[$key]->identificativo = $photo->id;

                    $altre = Altre::where('foto_id', $photo->id)->get();

                    foreach($altre as $others){
                        switch ($others->tipo) {
                            case 'slider': {
                                if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                    else $products[$key]->slid3 = $others->id;
                                }
                            }
                                break;
                            case 'normal': {
                                if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                                else $products[$key]->norm3 = $others->id;
                            }
                                break;
                            case 'thumbnail': {
                                if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                    else $products[$key]->thumb3 = $others->id;
                                }
                            }
                                break;
                        }
                    }
                }
            } else {
                $gen = Genere::where('tipo', $data['genere'])->first();
                $idgen = $gen->id;
                $category = Categoria::where('name', $data['categoria'])->first();
                $categoria = $category->id;
                $tuttoabbigliamento = Categoria::where('reference', 'tutto')->first();

                $search = Generehasmodello::where('genere_id', $idgen)->get();

                $products = collect(new Modello);

                //Prendo tutti i modelli di cui ho bisogno
                foreach($search as $src) {
                    $id = $src->modello_id;
                    $modello = Modello::find($id);
                    if ($categoria == $tuttoabbigliamento->id) {
                        if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                            $esiste = Quantita::where('modello_id', $modello->id)
                                ->where('colore_id', $colore->id)
                                ->where('taglia_id', '<', 5)
                                ->first();
                        } else {
                            $esiste = Quantita::where('modello_id', $modello->id)
                                ->where('colore_id', $colore->id)
                                ->where('taglia_id', '>', 4)
                                ->first();
                        }
                        if (!empty($esiste)) $products->push($modello);
                    } else if ($modello->categoria_id == $categoria) {
                        if ($gen->tipo == 'Uomo' || $gen->tipo == 'Donna') {
                            $esiste = Quantita::where('modello_id', $modello->id)
                                ->where('colore_id', $colore->id)
                                ->where('taglia_id', '<', 5)
                                ->first();
                        } else {
                            $esiste = Quantita::where('modello_id', $modello->id)
                                ->where('colore_id', $colore->id)
                                ->where('taglia_id', '>', 4)
                                ->first();
                        }
                        if (!empty($esiste)) $products->push($modello);
                    }
                }

                foreach($products as $key => $val){
                    $src = Generehasmodello::where('genere_id', $idgen)->where('modello_id', $val->id)->first();
                    if ($src->sconto > 0) {
                        $temp = $src->prezzo - (($src->prezzo / 100) * $src->sconto);
                        $products[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                        $products[$key]->sconto = "<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>";
                        $products[$key]->prezzo_normale = "<span class=\"aa-product-price\"><del>\$$src->prezzo</del></span>";
                    }
                    else {
                        $products[$key]->prezzo_normale = "";
                        $products[$key]->prezzo = number_format((float)$src->prezzo, 2, '.', '');
                        $products[$key]->sconto = "";
                    }

                    //Non controllo se esiste almeno una riga in quantita perche se il prodotto è stato selezionato
                    //allora esiste almeno un pezzo

                    $products[$key]->stock = "In stock";

                    $brand_name = Marca::find($val->marca_id);
                    $products[$key]->marca = $brand_name->nome;

                    $photo = Foto::where('modello_id', $val->id)->first();
                    $products[$key]->identificativo = $photo->id;

                    $altre = Altre::where('foto_id', $photo->id)->get();

                    foreach($altre as $others){
                        switch ($others->tipo) {
                            case 'slider': {
                                if ($others->posizione == '1') $products[$key]->slid1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $products[$key]->slid2 = $others->id;
                                    else $products[$key]->slid3 = $others->id;
                                }
                            }
                                break;
                            case 'normal': {
                                if ($others->posizione == '2') $products[$key]->norm2 = $others->id;
                                else $products[$key]->norm3 = $others->id;
                            }
                                break;
                            case 'thumbnail': {
                                if ($others->posizione == '1') $products[$key]->thumb1 = $others->id;
                                else {
                                    if ($others->posizione == '2') $products[$key]->thumb2 = $others->id;
                                    else $products[$key]->thumb3 = $others->id;
                                }
                            }
                                break;
                        }
                    }
                }
            }
        }
        //Ho tutto quello che mi serve
        //Passo i dati a Jquery

        $resp = "";
        foreach ($products as $product) {
            if (Auth::check()) {
                $wishlist_tag = "<a class=\"aggiungiwishlist\" data-id='{ \"idphoto\":\"$product->identificativo\", \"genere\":\"$gen->tipo\" }' href=\"javascript:void(0);\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
            } else {
                $wishlist_tag = "<a class=\"aggiungiwishlist\" data-tooltip=\"tooltip\" href=\"\" data-toggle=\"modal\" data-target=\"#login-modal\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>";
            }
            $resp .= "<li>
<figure>
<!--\"img/women/girl-1.png\"-->
<a class=\"aa-product-img\" href=\"../product-details/$gen->tipo&&$product->identificativo\"><img src=\"../store-image/fetch-image/$product->identificativo\" alt=\"polo shirt img\"></a>
<a class=\"aa-add-card-btn\" href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$gen->tipo\", \"categoria\":\"$category->name\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
  data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-shopping-cart\"></span>Aggiungi al carrello</a>
<figcaption>
<h4 class=\"aa-product-title\"><a href=\"../product-details/$gen->tipo&&$product->identificativo\">$product->nome</a></h4>
<span class=\"aa-product-price\">$$product->prezzo</span>$product->prezzo_normale
<p class=\"aa-product-descrip\">$product->marca</p>
</figcaption>
</figure>
<div class=\"aa-product-hvr-content\">
$wishlist_tag
<a href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"idphoto\":\"$product->identificativo\", \"idmodello\":\"$product->id\", \"id\":\"../store-image/fetch-image/$product->identificativo\", \"slider1\":\"../store-image/fetch-altre/$product->slid1\",
\"slider2\":\"../store-image/fetch-altre/$product->slid2\", \"slider3\":\"../store-image/fetch-altre/$product->slid3\",
\"thumbnail1\":\"../store-image/fetch-altre/$product->thumb1\", \"thumbnail2\":\"../store-image/fetch-altre/$product->thumb2\",
\"thumbnail3\":\"../store-image/fetch-altre/$product->thumb3\", \"normal2\":\"../store-image/fetch-altre/$product->norm2\",
\"normal3\":\"../store-image/fetch-altre/$product->norm3\", \"prezzo\":\"$product->prezzo\", \"stock\":\"$product->stock\",
 \"genere\":\"$gen->tipo\", \"categoria\":\"$category->name\", \"nome\":\"$product->nome\", \"descrizione\":\"$product->marca\" }'
data-placement=\"top\" title=\"Dai un'occhiata\" data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-search\"></span></a>
</div>
<!-- product badge -->
$product->sconto
</li>";
        }
        echo $resp;
    }

    public function loadInfo() {
        if (Auth::check()) {
            $iduser = Auth::id();
            $profilo = Profilo::where('users_id', $iduser)->first();
        } else $profilo = null;
        echo json_encode($profilo);
    }

    public function addWishlist(Request $request) {
        $data = $request->all();

        $iduser = Auth::id();
        $preferito = new Preferito;

        $foto = Foto::find($data['id']);
        $esiste = Preferito::where('users_id', $iduser)->where('modello_id', $foto->modello_id)->first();
        if (!empty($esiste)) {
            echo 'Esiste';
            die;
        }

        $preferito->users_id = $iduser;
        $preferito->modello_id = $foto->modello_id;
        $genere = Genere::where('tipo', $data['genere'])->first();
        $preferito->genere_id = $genere->id;

        $preferito->save();
        echo 'Si';
    }

    public function tagliaSelected(Request $request) {
        $data = $request->all();

        $product = Modello::find($data['id']);
        $taglia = Taglia::where('numero', $data['valore'])->first();

        $colore_select = "";
        if ($taglia->id < 5) $allrecord = Quantita::select('colore_id')
            ->where('modello_id', $product->id)
            ->where('taglia_id', '<', 5)
            ->distinct()
            ->get();
        else $allrecord = Quantita::select('colore_id')
            ->where('modello_id', $product->id)
            ->where('taglia_id', '>', 4)
            ->distinct()
            ->get();
        foreach ($allrecord as $record) {
            $colore = Colore::find($record->colore_id);
            $exist = Quantita::where('modello_id', $product->id)
                ->where('taglia_id', $taglia->id)
                ->where('colore_id', $colore->id)
                ->first();
            if (empty($exist)) $colore_select .= "<option value=\"$colore->nome\" disabled>$colore->nome</option>";
            else $colore_select .= "<option value=\"$colore->nome\">$colore->nome</option>";
        }
        echo $colore_select;
    }

    public function getQuantita (Request $request) {
        $data = $request->all();

        $product = Modello::find($data['id']);
        if (isset($data['taglia'])) {
            $taglia = Taglia::where('numero', $data['taglia'])->first();
            $quantita = "";
            //Prendo il colore con il codice id più piccolo
            $colore = Quantita::orderBy('colore_id', 'asc')
                ->where('modello_id', $product->id)
                ->where('taglia_id', $taglia->id)
                ->first();
            $quantity = Quantita::where('modello_id', $product->id)
                ->where('colore_id', $colore->colore_id)
                ->where('taglia_id', $taglia->id)
                ->first();
            if ($quantity->quantita == 0) {
                $quantita = '<option value="">Non Disponibile</option>';
            } else if ($quantity->quantita == 1) {
                $quantita = '<option value="1" selected="1">1</option>';
            } else if ($quantity->quantita == 2) {
                $quantita = '<option value="1" selected="1">1</option>
            <option value="2">2</option>';
            } else if ($quantity->quantita == 3) {
                $quantita = '<option value="1" selected="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>';
            } else if ($quantity->quantita == 4) {
                $quantita = '<option value="1" selected="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>';
            } else if ($quantity->quantita == 5) {
                $quantita = '<option value="1" selected="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>';
            } else {
                $quantita = '<option value="1" selected="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>';
            }
            echo $quantita;
        }
        else {
            $colore = Colore::where('nome', $data['colore'])->first();
            $taglia = Taglia::where('numero', $data['numero_taglia'])->first();
            $quantita = "";
            $quantity = Quantita::where('modello_id', $product->id)
                ->where('colore_id', $colore->id)
                ->where('taglia_id', $taglia->id)
                ->first();
            if ($quantity->quantita == 0) {
                $quantita = '<option value="">Non Disponibile</option>';
            } else if ($quantity->quantita == 1) {
                $quantita = '<option value="1" selected="1">1</option>';
            } else if ($quantity->quantita == 2) {
                $quantita = '<option value="1" selected="1">1</option>
            <option value="2">2</option>';
            } else if ($quantity->quantita == 3) {
                $quantita = '<option value="1" selected="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>';
            } else if ($quantity->quantita == 4) {
                $quantita = '<option value="1" selected="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>';
            } else if ($quantity->quantita == 5) {
                $quantita = '<option value="1" selected="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>';
            } else {
                $quantita = '<option value="1" selected="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>';
            }
            echo $quantita;
        }
    }

    public function addCart (Request $request) {
        $data = $request->all();
        $foto = Foto::find($data['id']);
        $taglia = Taglia::where('numero', $data['taglia'])->first();
        $colore = Colore::where('nome', $data['colore'])->first();
        $prodotto = Modello::find($foto->modello_id);

        if (Auth::check()) {
            //Utente loggato
            $iduser = Auth::id();
            //Cancello il coupon
            $session_coupon = Session::get('coupon');
            if (!empty($session_coupon)) {
                foreach ($session_coupon as $cou) {
                    if ($cou['id'] == $iduser) session()->pull('coupon', $cou);
                }
            }
            $exist = Carrello::where('users_id', $iduser)
                ->where('modello_id', $prodotto->id)
                ->where('taglia_id', $taglia->id)
                ->where('colore_id', $colore->id)->first();
            if (!empty($exist)) {
                $quantita = $data['quantita'] + $exist->quantita;
                $exist->update(['quantita' => $quantita]);
            } else {
                $carrello = new Carrello;
                $carrello->users_id = $iduser;
                $carrello->modello_id = $prodotto->id;
                $carrello->taglia_id = $taglia->id;
                $carrello->colore_id = $colore->id;
                $carrello->quantita = $data['quantita'];
                $carrello->save();
            }
            $cart = Carrello::where('users_id', $iduser)->get();
            $numero_prodotti = count($cart);
            $parziale_totale = 0;
            $totale = 0;
            foreach ($cart as $key => $val) {
                $modello = Modello::find($val->modello_id);
                $cart[$key]->modello_nome = $modello->nome;
                $cart[$key]->modello_id = $modello->id;
                $taglia = Taglia::find($val->taglia_id);
                if ($taglia->adulto == 1) {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '<', 3)->first();
                } else {
                    $generehasmodello = Generehasmodello::where('modello_id', $modello->id)->where('genere_id', '>', 2)->first();
                }
                if ($generehasmodello->sconto > 0) {
                    $temp = $generehasmodello->prezzo - (($generehasmodello->prezzo / 100) * $generehasmodello->sconto);
                    $cart[$key]->prezzo = number_format((float)$temp, 2, '.', '');
                }
                else $cart[$key]->prezzo = $generehasmodello->prezzo;
                $foto = Foto::where('modello_id', $modello->id)->first();
                $cart[$key]->idfoto = $foto->id;
                $genere = Genere::find($generehasmodello->genere_id);
                $cart[$key]->genere = $genere->tipo;
                $cart[$key]->prezzo_totale = $cart[$key]->prezzo * $val->quantita;
                $parziale_totale += $val->prezzo_totale;
            }
            $coupon = Session::get('coupon');
            if (!empty($coupon)) {
                foreach ($coupon as $cop) {
                    if ($cop['id'] == $iduser) $totale = $parziale_totale - $cop['importo'];
                }
            } else $totale = $parziale_totale;
            if ($totale == 0) $totale = $parziale_totale;
        } else {
            //Utente non loggato
        }

        if ($data['page'] == 1)
            $link1 = '../cart';
        else $link1 = '../public/cart';


        $resp = "<a class=\"aa-cart-link\" href=\"../cart\">
                <span class=\"fa fa-shopping-basket\"></span>
                <span class=\"aa-cart-title\">CARRELLO</span>
                <span class=\"aa-cart-notify\">$numero_prodotti</span>
                </a>
                <div class=\"aa-cartbox-summary\">
                <ul>";

        foreach ($cart as $item) {
            if ($data['page'] == 1) {
                $link2 = "../product-details/$item->genere&&$item->idfoto";
                $link3 = "../store-image/fetch-image/$item->idfoto";
                $link4 = "../product-details/$item->genere&&$item->idfoto";
                $link5 = "../checkout";
            }
            else {
                $link2 = "../public/product-details/$item->genere&&$item->idfoto";
                $link3 = "../public/store-image/fetch-image/$item->idfoto";
                $link4 = "../public/product-details/$item->genere&&$item->idfoto";
                $link5 = "../public/checkout";
            }

            $resp .= "<li>
                <a class=\"aa-cartbox-img\" href=\"$link2\"><img src=\"$link3\" alt=\"img\"></a>
                <div class=\"aa-cartbox-info\">
                <h4><a href=\"$link4\">$item->modello_nome</a></h4>
                <p>$item->quantita x $$item->prezzo</p>
                </div>
                <a rel=\"$item->modello_id\" rel1=\"delete-cart\" href=\"javascript:\" class=\"aa-remove-product deleteRecord\"><span class=\"fa fa-times\"></span></a>
                </li>";
        }

        $resp .= "<li>
            <span class=\"aa-cartbox-total-title\">Totale</span>
            <span class=\"aa-cartbox-total-price\">$$totale</span>
            </li>
            </ul>
            <a class=\"aa-cartbox-checkout aa-primary-btn\" href=\"$link5\">Checkout</a>
            </div>";

        echo $resp;
    }

}

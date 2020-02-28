<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Foto;
use App\Modello;
use App\Generehasmodello;
use App\Genere;
use App\User;
use App\Categoria;
use App\Altre;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function home(Request $request) {
        if ($request->isMethod('post')){
            return action('login');
        }
        return view('Frontend.home');
    }

    public function orderproducts(Request $request) {
        $data = $request->all();
        $valore = $data['valore'];
        $genere = $data['genere'];
        $temp = $data['id'];
        $idphoto = json_decode($temp);


        if ($valore == '1') {
            //default
            $i = 0;
            foreach ($idphoto as $id){
                $foto = Foto::find($id);
                $modello_id[$i] = $foto->modello_id;
                $modello = Modello::find($foto->modello_id);
                $modello_name[$i] = $modello->nome;
                $search = Genere::where('tipo', $genere)->first();
                $genere_id = $search->id;
                $generehasmodello = Generehasmodello::where('modello_id', $foto->modello_id)->where('genere_id', $genere_id)->first();
                $prezzo[$i] = $generehasmodello->prezzo;

                $altre = Altre::where('foto_id', $id)->get();

                foreach($altre as $altre){
                    switch ($altre->tipo) {
                        case 'slider': {
                            if ($altre->posizione == '1') $slid1[$i] = $altre->id;
                            else {
                                if ($altre->posizione == '2') $slid2[$i] = $altre->id;
                                else $slid3[$i] = $altre->id;
                            }
                        }
                            break;
                        case 'normal': {
                            if ($altre->posizione == '2') $norm2[$i] = $altre->id;
                            else $norm3[$i] = $altre->id;
                        }
                            break;
                        case 'thumbnail': {
                            if ($altre->posizione == '1') $thumb1[$i] = $altre->id;
                            else {
                                if ($altre->posizione == '2') $thumb2[$i] = $altre->id;
                                else $thumb3[$i] = $altre->id;
                            }
                        }
                            break;
                    }
                }

                $i = $i+1;
            }
            //Ho tutto quello che mi serve
            //Passo i dati a Jquery

            $i = 0;
            $resp = "";
            foreach($idphoto as $id) {
                $resp .= "<li>
<figure>
<!--\"img/women/girl-1.png\"-->
<a class=\"aa-product-img\" href=\"../product-detail/$genere&&$id\"><img src=\"../store-image/fetch-image/$id\" alt=\"polo shirt img\"></a>
<a class=\"aa-add-card-btn\" href=\"#\"><span class=\"fa fa-shopping-cart\"></span>Aggiungi al carrello</a>
<figcaption>
<h4 class=\"aa-product-title\"><a href=\"#\">$modello_name[$i]</a></h4>
<span class=\"aa-product-price\">$$prezzo[$i]</span><span class=\"aa-product-price\"><del>$65.50</del></span>
<p class=\"aa-product-descrip\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
</figcaption>
</figure>
<div class=\"aa-product-hvr-content\">
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>
<a href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"id\":\"../store-image/fetch-image/$id\", \"slider1\":\"../store-image/fetch-altre/$slid1[$i]\",
\"slider2\":\"../store-image/fetch-altre/$slid2[$i]\", \"slider3\":\"../store-image/fetch-altre/$slid3[$i]\",
\"thumbnail1\":\"../store-image/fetch-altre/$thumb1[$i]\", \"thumbnail2\":\"../store-image/fetch-altre/$thumb2[$i]\",
\"thumbnail3\":\"../store-image/fetch-altre/$thumb3[$i]\", \"normal2\":\"../store-image/fetch-altre/$norm2[$i]\",
\"normal3\":\"../store-image/fetch-altre/$norm3[$i]\", \"prezzo\":\"$prezzo[$i]\"}'
data-placement=\"top\" title=\"Dai un'occhiata\" data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-search\"></span></a>
</div>
<!-- product badge -->
<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>
</li>";
                $i=$i+1;
            }
            echo $resp;
            die;
        }

        if ($valore == '2') {
            //nome
            $i = 0;
            foreach ($idphoto as $id){
                $foto = Foto::find($id);
                $modello_id[$i] = $foto->modello_id;
                $modello = Modello::find($foto->modello_id);
                $modello_name[$i] = $modello->nome;
                $search = Genere::where('tipo', $genere)->first();
                $genere_id = $search->id;
                $generehasmodello = Generehasmodello::where('modello_id', $foto->modello_id)->where('genere_id', $genere_id)->first();
                $prezzo[$i] = $generehasmodello->prezzo;

                $altre = Altre::where('foto_id', $id)->get();

                foreach($altre as $altre){
                    switch ($altre->tipo) {
                        case 'slider': {
                            if ($altre->posizione == '1') $slid1[$i] = $altre->id;
                            else {
                                if ($altre->posizione == '2') $slid2[$i] = $altre->id;
                                else $slid3[$i] = $altre->id;
                            }
                        }
                            break;
                        case 'normal': {
                            if ($altre->posizione == '2') $norm2[$i] = $altre->id;
                            else $norm3[$i] = $altre->id;
                        }
                            break;
                        case 'thumbnail': {
                            if ($altre->posizione == '1') $thumb1[$i] = $altre->id;
                            else {
                                if ($altre->posizione == '2') $thumb2[$i] = $altre->id;
                                else $thumb3[$i] = $altre->id;
                            }
                        }
                            break;
                    }
                }

                $i = $i+1;
            }
            //Ho tutto quello che mi serve
            //Ordino

            $n = count($idphoto);
            for ($i=1; $i < $n; $i++) {
                for ($j = $i; $j > 0 && $modello_name[$j] < $modello_name[$j - 1]; $j--) {
                    if ($modello_name[$j] < $modello_name[$j - 1]) {
                        $temp = $modello_name[$j];
                        $modello_name[$j] = $modello_name[$j - 1];
                        $modello_name[$j - 1] = $temp;

                        $temp = $idphoto[$j];
                        $idphoto[$j] = $idphoto[$j - 1];
                        $idphoto[$j - 1] = $temp;

                        $temp = $prezzo[$j];
                        $prezzo[$j] = $prezzo[$j - 1];
                        $prezzo[$j - 1] = $temp;

                        $temp = $slid1[$j];
                        $slid1[$j] = $slid1[$j - 1];
                        $slid1[$j - 1] = $temp;

                        $temp = $slid2[$j];
                        $slid2[$j] = $slid2[$j - 1];
                        $slid2[$j - 1] = $temp;

                        $temp = $slid3[$j];
                        $slid3[$j] = $slid3[$j - 1];
                        $slid3[$j - 1] = $temp;

                        $temp = $thumb1[$j];
                        $thumb1[$j] = $thumb1[$j - 1];
                        $thumb1[$j - 1] = $temp;

                        $temp = $thumb2[$j];
                        $thumb2[$j] = $thumb2[$j - 1];
                        $thumb2[$j - 1] = $temp;

                        $temp = $thumb3[$j];
                        $thumb3[$j] = $thumb3[$j - 1];
                        $thumb3[$j - 1] = $temp;

                        $temp = $norm2[$j];
                        $norm2[$j] = $norm2[$j - 1];
                        $norm2[$j - 1] = $temp;

                        $temp = $norm3[$j];
                        $norm3[$j] = $norm3[$j - 1];
                        $norm3[$j - 1] = $temp;
                    }
                }
            }

            //Passo i dati a Jquery
            $i = 0;
            $resp = "";
            foreach($idphoto as $id) {
                $resp .= "<li>
<figure>
<!--\"img/women/girl-1.png\"-->
<a class=\"aa-product-img\" href=\"../product-detail/$genere&&$id\"><img src=\"../store-image/fetch-image/$id\" alt=\"polo shirt img\"></a>
<a class=\"aa-add-card-btn\" href=\"#\"><span class=\"fa fa-shopping-cart\"></span>Aggiungi al carrello</a>
<figcaption>
<h4 class=\"aa-product-title\"><a href=\"#\">$modello_name[$i]</a></h4>
<span class=\"aa-product-price\">$$prezzo[$i]</span><span class=\"aa-product-price\"><del>$65.50</del></span>
<p class=\"aa-product-descrip\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
</figcaption>
</figure>
<div class=\"aa-product-hvr-content\">
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>
<a href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"id\":\"../store-image/fetch-image/$id\", \"slider1\":\"../store-image/fetch-altre/$slid1[$i]\",
\"slider2\":\"../store-image/fetch-altre/$slid2[$i]\", \"slider3\":\"../store-image/fetch-altre/$slid3[$i]\",
\"thumbnail1\":\"../store-image/fetch-altre/$thumb1[$i]\", \"thumbnail2\":\"../store-image/fetch-altre/$thumb2[$i]\",
\"thumbnail3\":\"../store-image/fetch-altre/$thumb3[$i]\", \"normal2\":\"../store-image/fetch-altre/$norm2[$i]\",
\"normal3\":\"../store-image/fetch-altre/$norm3[$i]\", \"prezzo\":\"$prezzo[$i]\"}'
data-placement=\"top\" title=\"Dai un'occhiata\" data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-search\"></span></a>
</div>
<!-- product badge -->
<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>
</li>";
                $i=$i+1;
            }
            echo $resp;
            die;
        }
        if ($valore == '3') {
            //prezzo
            $i = 0;
            foreach ($idphoto as $id){
                $foto = Foto::find($id);
                $modello_id[$i] = $foto->modello_id;
                $modello = Modello::find($foto->modello_id);
                $modello_name[$i] = $modello->nome;
                $search = Genere::where('tipo', $genere)->first();
                $genere_id = $search->id;
                $generehasmodello = Generehasmodello::where('modello_id', $foto->modello_id)->where('genere_id', $genere_id)->first();
                $prezzo[$i] = $generehasmodello->prezzo;

                $altre = Altre::where('foto_id', $id)->get();

                foreach($altre as $altre){
                    switch ($altre->tipo) {
                        case 'slider': {
                            if ($altre->posizione == '1') $slid1[$i] = $altre->id;
                            else {
                                if ($altre->posizione == '2') $slid2[$i] = $altre->id;
                                else $slid3[$i] = $altre->id;
                            }
                        }
                            break;
                        case 'normal': {
                            if ($altre->posizione == '2') $norm2[$i] = $altre->id;
                            else $norm3[$i] = $altre->id;
                        }
                            break;
                        case 'thumbnail': {
                            if ($altre->posizione == '1') $thumb1[$i] = $altre->id;
                            else {
                                if ($altre->posizione == '2') $thumb2[$i] = $altre->id;
                                else $thumb3[$i] = $altre->id;
                            }
                        }
                            break;
                    }
                }

                $i = $i+1;
            }
            //Ho tutto quello che mi serve
            //Ordino

            $n = count($idphoto);
            for ($i=1; $i < $n; $i++) {
                for ($j = $i; $j > 0 && $prezzo[$j] < $prezzo[$j - 1]; $j--) {
                    if ($prezzo[$j] < $prezzo[$j - 1]) {
                        $temp = $modello_name[$j];
                        $modello_name[$j] = $modello_name[$j - 1];
                        $modello_name[$j - 1] = $temp;

                        $temp = $idphoto[$j];
                        $idphoto[$j] = $idphoto[$j - 1];
                        $idphoto[$j - 1] = $temp;

                        $temp = $prezzo[$j];
                        $prezzo[$j] = $prezzo[$j - 1];
                        $prezzo[$j - 1] = $temp;

                        $temp = $slid1[$j];
                        $slid1[$j] = $slid1[$j - 1];
                        $slid1[$j - 1] = $temp;

                        $temp = $slid2[$j];
                        $slid2[$j] = $slid2[$j - 1];
                        $slid2[$j - 1] = $temp;

                        $temp = $slid3[$j];
                        $slid3[$j] = $slid3[$j - 1];
                        $slid3[$j - 1] = $temp;

                        $temp = $thumb1[$j];
                        $thumb1[$j] = $thumb1[$j - 1];
                        $thumb1[$j - 1] = $temp;

                        $temp = $thumb2[$j];
                        $thumb2[$j] = $thumb2[$j - 1];
                        $thumb2[$j - 1] = $temp;

                        $temp = $thumb3[$j];
                        $thumb3[$j] = $thumb3[$j - 1];
                        $thumb3[$j - 1] = $temp;

                        $temp = $norm2[$j];
                        $norm2[$j] = $norm2[$j - 1];
                        $norm2[$j - 1] = $temp;

                        $temp = $norm3[$j];
                        $norm3[$j] = $norm3[$j - 1];
                        $norm3[$j - 1] = $temp;
                    }
                }
            }

            //Passo i dati a Jquery
            $i = 0;
            $resp = "";
            foreach($idphoto as $id) {
                $resp .= "<li>
<figure>
<!--\"img/women/girl-1.png\"-->
<a class=\"aa-product-img\" href=\"../product-detail/$genere&&$id\"><img src=\"../store-image/fetch-image/$id\" alt=\"polo shirt img\"></a>
<a class=\"aa-add-card-btn\" href=\"#\"><span class=\"fa fa-shopping-cart\"></span>Aggiungi al carrello</a>
<figcaption>
<h4 class=\"aa-product-title\"><a href=\"#\">$modello_name[$i]</a></h4>
<span class=\"aa-product-price\">$$prezzo[$i]</span><span class=\"aa-product-price\"><del>$65.50</del></span>
<p class=\"aa-product-descrip\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
</figcaption>
</figure>
<div class=\"aa-product-hvr-content\">
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>
<a href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"id\":\"../store-image/fetch-image/$id\", \"slider1\":\"../store-image/fetch-altre/$slid1[$i]\",
\"slider2\":\"../store-image/fetch-altre/$slid2[$i]\", \"slider3\":\"../store-image/fetch-altre/$slid3[$i]\",
\"thumbnail1\":\"../store-image/fetch-altre/$thumb1[$i]\", \"thumbnail2\":\"../store-image/fetch-altre/$thumb2[$i]\",
\"thumbnail3\":\"../store-image/fetch-altre/$thumb3[$i]\", \"normal2\":\"../store-image/fetch-altre/$norm2[$i]\",
\"normal3\":\"../store-image/fetch-altre/$norm3[$i]\", \"prezzo\":\"$prezzo[$i]\"}'
data-placement=\"top\" title=\"Dai un'occhiata\" data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-search\"></span></a>
</div>
<!-- product badge -->
<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>
</li>";
                $i=$i+1;
            }
            echo $resp;
            die;
        }
        if ($valore == '4') {
            //data
            $i = 0;
            foreach ($idphoto as $id){
                $foto = Foto::find($id);
                $modello_id[$i] = $foto->modello_id;
                $modello = Modello::find($foto->modello_id);
                $modello_date[$i] = $modello->datauscita;
                $modello_name[$i] = $modello->nome;
                $search = Genere::where('tipo', $genere)->first();
                $genere_id = $search->id;
                $generehasmodello = Generehasmodello::where('modello_id', $foto->modello_id)->where('genere_id', $genere_id)->first();
                $prezzo[$i] = $generehasmodello->prezzo;

                $altre = Altre::where('foto_id', $id)->get();

                foreach($altre as $altre){
                    switch ($altre->tipo) {
                        case 'slider': {
                            if ($altre->posizione == '1') $slid1[$i] = $altre->id;
                            else {
                                if ($altre->posizione == '2') $slid2[$i] = $altre->id;
                                else $slid3[$i] = $altre->id;
                            }
                        }
                            break;
                        case 'normal': {
                            if ($altre->posizione == '2') $norm2[$i] = $altre->id;
                            else $norm3[$i] = $altre->id;
                        }
                            break;
                        case 'thumbnail': {
                            if ($altre->posizione == '1') $thumb1[$i] = $altre->id;
                            else {
                                if ($altre->posizione == '2') $thumb2[$i] = $altre->id;
                                else $thumb3[$i] = $altre->id;
                            }
                        }
                            break;
                    }
                }

                $i = $i+1;
            }
            //Ho tutto quello che mi serve
            //Ordino

            $n = count($idphoto);
            for ($i=1; $i < $n; $i++) {
                for ($j = $i; $j > 0 && $modello_date[$j] < $modello_date[$j - 1]; $j--) {
                    if ($modello_date[$j] < $modello_date[$j - 1]) {
                        $temp = $modello_name[$j];
                        $modello_name[$j] = $modello_name[$j - 1];
                        $modello_name[$j - 1] = $temp;

                        $temp = $idphoto[$j];
                        $idphoto[$j] = $idphoto[$j - 1];
                        $idphoto[$j - 1] = $temp;

                        $temp = $prezzo[$j];
                        $prezzo[$j] = $prezzo[$j - 1];
                        $prezzo[$j - 1] = $temp;

                        $temp = $slid1[$j];
                        $slid1[$j] = $slid1[$j - 1];
                        $slid1[$j - 1] = $temp;

                        $temp = $slid2[$j];
                        $slid2[$j] = $slid2[$j - 1];
                        $slid2[$j - 1] = $temp;

                        $temp = $slid3[$j];
                        $slid3[$j] = $slid3[$j - 1];
                        $slid3[$j - 1] = $temp;

                        $temp = $thumb1[$j];
                        $thumb1[$j] = $thumb1[$j - 1];
                        $thumb1[$j - 1] = $temp;

                        $temp = $thumb2[$j];
                        $thumb2[$j] = $thumb2[$j - 1];
                        $thumb2[$j - 1] = $temp;

                        $temp = $thumb3[$j];
                        $thumb3[$j] = $thumb3[$j - 1];
                        $thumb3[$j - 1] = $temp;

                        $temp = $norm2[$j];
                        $norm2[$j] = $norm2[$j - 1];
                        $norm2[$j - 1] = $temp;

                        $temp = $norm3[$j];
                        $norm3[$j] = $norm3[$j - 1];
                        $norm3[$j - 1] = $temp;
                    }
                }
            }

            //Passo i dati a Jquery
            $i = 0;
            $resp = "";
            foreach($idphoto as $id) {
                $resp .= "<li>
<figure>
<!--\"img/women/girl-1.png\"-->
<a class=\"aa-product-img\" href=\"../product-detail/$genere&&$id\"><img src=\"../store-image/fetch-image/$id\" alt=\"polo shirt img\"></a>
<a class=\"aa-add-card-btn\" href=\"#\"><span class=\"fa fa-shopping-cart\"></span>Aggiungi al carrello</a>
<figcaption>
<h4 class=\"aa-product-title\"><a href=\"#\">$modello_name[$i]</a></h4>
<span class=\"aa-product-price\">$$prezzo[$i]</span><span class=\"aa-product-price\"><del>$65.50</del></span>
<p class=\"aa-product-descrip\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
</figcaption>
</figure>
<div class=\"aa-product-hvr-content\">
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aggiungi alla lista dei desideri\"><span class=\"fa fa-heart-o\"></span></a>
<a href=\"#\" id=\"aprimodale\" data-toggle2=\"tooltip\"
data-id='{\"id\":\"../store-image/fetch-image/$id\", \"slider1\":\"../store-image/fetch-altre/$slid1[$i]\",
\"slider2\":\"../store-image/fetch-altre/$slid2[$i]\", \"slider3\":\"../store-image/fetch-altre/$slid3[$i]\",
\"thumbnail1\":\"../store-image/fetch-altre/$thumb1[$i]\", \"thumbnail2\":\"../store-image/fetch-altre/$thumb2[$i]\",
\"thumbnail3\":\"../store-image/fetch-altre/$thumb3[$i]\", \"normal2\":\"../store-image/fetch-altre/$norm2[$i]\",
\"normal3\":\"../store-image/fetch-altre/$norm3[$i]\", \"prezzo\":\"$prezzo[$i]\"}'
data-placement=\"top\" title=\"Dai un'occhiata\" data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-search\"></span></a>
</div>
<!-- product badge -->
<span class=\"aa-badge aa-sale\" href=\"#\">SALE!</span>
</li>";
                $i=$i+1;
            }
            echo $resp;
            die;
        }
    }

    public function product($genere, $categoria) {

        $gen = Genere::where('tipo', $genere)->first();
        $idgen = $gen->id;
        $category = Categoria::where('name', $categoria)->first();
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
                $descrizione[$i] = $modello->descrizione;
                $name[$i] = $modello->nome;
                $i = $i+1;
            }
        }
        //$descrizione sono tutte le descrizioni di tutti i modelli
        //$name sono i nomi di tutti i modelli
        //$prezzo sono i prezzi di tutti i modelli
        $i = 0;

        foreach($result as $res) {
            $id = $res->id;
            $photo = Foto::where('modello_id', $id)->first();
            $identificativo[$i] = $photo->id;

            $altre = Altre::where('foto_id', $identificativo[$i])->get();

            foreach($altre as $altre){
                switch ($altre->tipo) {
                    case 'slider': {
                        if ($altre->posizione == '1') $slid1[$i] = $altre->id;
                        else {
                            if ($altre->posizione == '2') $slid2[$i] = $altre->id;
                            else $slid3[$i] = $altre->id;
                        }
                    }
                        break;
                    case 'normal': {
                        if ($altre->posizione == '2') $norm2[$i] = $altre->id;
                        else $norm3[$i] = $altre->id;
                    }
                        break;
                    case 'thumbnail': {
                        if ($altre->posizione == '1') $thumb1[$i] = $altre->id;
                        else {
                            if ($altre->posizione == '2') $thumb2[$i] = $altre->id;
                            else $thumb3[$i] = $altre->id;
                        }
                    }
                        break;
                }
            }

            $i = $i+1;
        }
        //$identificativo sono tutti gli id delle foto

        return view('Frontend.product')
            ->with('genere', $genere)
            ->with('prezzo', $prezzo)
            ->with('modello', $name)
            ->with('photo', $identificativo) //mi serve per l ordinamento
            ->with('id', $identificativo)
            ->with('descrizione', $descrizione)
            ->with('normal2', $norm2)
            ->with('normal3', $norm3)
            ->with('slider1', $slid1)
            ->with('slider2', $slid2)
            ->with('slider3', $slid3)
            ->with('thumbnail1', $thumb1)
            ->with('thumbnail2', $thumb2)
            ->with('thumbnail3', $thumb3);

    }

    public function productdetail($genere, $id) {
        $photo = Foto::find($id);
        $altre = Altre::where('foto_id', $id)->get();

        foreach($altre as $altre){
            switch ($altre->tipo) {
                case 'slider': {
                    if ($altre->posizione == '1') $slid1 = $altre->id;
                    else {
                        if ($altre->posizione == '2') $slid2 = $altre->id;
                        else $slid3 = $altre->id;
                    }
                }
                    break;
                case 'normal': {
                        if ($altre->posizione == '2') $norm2 = $altre->id;
                        else $norm3 = $altre->id;
                    }
                    break;
                case 'thumbnail': {
                    if ($altre->posizione == '1') $thumb1 = $altre->id;
                    else {
                        if ($altre->posizione == '2') $thumb2 = $altre->id;
                        else $thumb3 = $altre->id;
                    }
                }
                    break;
            }
        }

        $idmod = $photo->modello_id;
        $fordescription = Modello::find($idmod);
        $descr1 = $fordescription->descrizione;
        $descr2 = $fordescription->descrizione1;
        $search = Genere::where('tipo', $genere)->first();
        $idgen = $search->id;
        $search = Generehasmodello::where('modello_id', $idmod)->get();
        foreach($search as $src) {
            if ($src->genere_id == $idgen) {
                $prezzo = $src->prezzo;
            }
        }
        return view('Frontend.product-detail')
            ->with('descrizione1', $descr1)
            ->with('descrizione2', $descr2)
            ->with('normal2', $norm2)
            ->with('normal3', $norm3)
            ->with('slider1', $slid1)
            ->with('slider2', $slid2)
            ->with('slider3', $slid3)
            ->with('thumbnail1', $thumb1)
            ->with('thumbnail2', $thumb2)
            ->with('thumbnail3', $thumb3)
            ->with('prezzo', $prezzo)
            ->with('id', $id);
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

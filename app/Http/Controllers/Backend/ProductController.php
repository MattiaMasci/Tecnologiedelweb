<?php

namespace App\Http\Controllers\Backend;

use App\Altre;
use App\Carrello;
use App\Categoria;
use App\Collezione;
use App\Colore;
use App\Foto;
use App\Genere;
use App\Generehascategoria;
use App\Generehasmodello;
use App\Http\Controllers\Controller;
use App\Marca;
use App\Modello;
use App\Preferito;
use App\Quantita;
use App\Recensione;
use App\Stile;
use App\Taglia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Session;
use Illuminate\Support\Facades\Input;
use Image;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function addProduct(Request $request){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $request->validate([
                'MainImage' => 'required|image',
                'SecondImage' => 'required|image',
                'ThirdImage' => 'required|image'
            ]);

            if (strlen($data['product_name']) > 65) return redirect()->back()->with('flash_message_error', 'Product name too long');

            $product = new Modello;
            if(empty($data['category_id'])){
                return redirect()->back()->with('flash_message_error', 'Category is missing!');
            }
            $product->categoria_id = $data['category_id'];
            if(empty($data['collection_id'])){
                return redirect()->back()->with('flash_message_error', 'Collection is missing!');
            }
            $product->collezione_id = $data['collection_id'];
            if(empty($data['brand_id'])){
                return redirect()->back()->with('flash_message_error', 'Brand is missing!');
            }
            $product->marca_id = $data['brand_id'];
            if(empty($data['style_id'])){
                return redirect()->back()->with('flash_message_error', 'Style is missing!');
            }
            if(empty($data['gender'])){
                return redirect()->back()->with('flash_message_error', 'Gender is missing!');
            }
            //Collezione Uomo
            if ($data['collection_id'] == 2 && $data['gender'] == 2) {
                return redirect()->back()->with('flash_message_error', 'If you select Man Collection can\'t select Female gender too.');
            }
            //Collezione Donna
            if ($data['collection_id'] == 3 && $data['gender'] == 1) {
                return redirect()->back()->with('flash_message_error', 'If you select Woman Collection can\'t select Male gender too.');
            }

            $product->stile_id = $data['style_id'];
            $product->descrizione = $data['description'];
            $product->nome = $data['product_name'];
            $newDate = date("Y-m-d");
            $product->datauscita = $newDate;

            if (empty($data['AdultsPrice']) && empty($data['ChildrenPrice'])) {
                return redirect()->back()->with('flash_message_error', 'At least one of the two Price fields must be filled');
            }
            $request->validate([
                'AdultsPrice' => 'nullable|numeric',
                'ChildrenPrice' => 'nullable|numeric'
            ]);

            $product->save();

            $mod = $product;

            $image_file = $request->MainImage;
            $image = Image::make($image_file)->resize(208, 300);
            Response::make($image->encode('jpeg'));
            $form_data = array(
                'modello_id' => $mod->id,
                'data' => $image
            );
            $photo = Foto::create($form_data);

            for($i=0;$i<2;$i++) {
                $image_file = $request->MainImage;
                if($i==0) {
                    $image = Image::make($image_file)->resize(709, 1024);
                    Response::make($image->encode('jpeg'));
                    $form_data = array(
                        'foto_id'  => $photo->id,
                        'data' => $image,
                        'tipo'  => 'slider',
                        'posizione' => 1
                    );
                }
                else {
                    $image = Image::make($image_file)->resize(38, 55);
                    Response::make($image->encode('jpeg'));
                    $form_data = array(
                        'foto_id'  => $photo->id,
                        'data' => $image,
                        'tipo'  => 'thumbnail',
                        'posizione' => 1
                    );
                }
                Altre::create($form_data);
            }

            for($i=0;$i<3;$i++) {
                $image_file = $request->SecondImage;
                if($i==0) {
                    $image = Image::make($image_file)->resize(208, 300);
                    Response::make($image->encode('jpeg'));
                    $form_data = array(
                        'foto_id'  => $photo->id,
                        'data' => $image,
                        'tipo'  => 'normal',
                        'posizione' => 2
                    );
                }
                else if($i==1) {
                    $image = Image::make($image_file)->resize(709, 1024);
                    Response::make($image->encode('jpeg'));
                    $form_data = array(
                        'foto_id'  => $photo->id,
                        'data' => $image,
                        'tipo'  => 'slider',
                        'posizione' => 2
                    );
                }
                else {
                    $image = Image::make($image_file)->resize(38, 55);
                    Response::make($image->encode('jpeg'));
                    $form_data = array(
                        'foto_id'  => $photo->id,
                        'data' => $image,
                        'tipo'  => 'thumbnail',
                        'posizione' => 2
                    );
                }
                Altre::create($form_data);
            }

            for($i=0;$i<3;$i++) {
                $image_file = $request->ThirdImage;
                if($i==0) {
                    $image = Image::make($image_file)->resize(208, 300);
                    Response::make($image->encode('jpeg'));
                    $form_data = array(
                        'foto_id'  => $photo->id,
                        'data' => $image,
                        'tipo'  => 'normal',
                        'posizione' => 3
                    );
                }
                else if($i==1) {
                    $image = Image::make($image_file)->resize(709, 1024);
                    Response::make($image->encode('jpeg'));
                    $form_data = array(
                        'foto_id'  => $photo->id,
                        'data' => $image,
                        'tipo'  => 'slider',
                        'posizione' => 3
                    );
                }
                else {
                    $image = Image::make($image_file)->resize(38, 55);
                    Response::make($image->encode('jpeg'));
                    $form_data = array(
                        'foto_id'  => $photo->id,
                        'data' => $image,
                        'tipo'  => 'thumbnail',
                        'posizione' => 3
                    );
                }
                Altre::create($form_data);
            }

            $flash_message_error = "";

            $trovato_unisex_uomo = 0;
            $trovato_unisex_donna = 0;
            $trovato_adulto = 1;
            if (!is_null($data['AdultsPrice'])) {
                $trovato_adulto = 0;
                $generehascategoria = Generehascategoria::where('categoria_id', $data['category_id'])->get();
                foreach($generehascategoria as $item){
                    $genere = Genere::find($item->genere_id);
                    if ( (($genere->tipo == 'Uomo') && ($data['gender'] == '3')) || (($genere->tipo == 'Uomo') && ($data['gender'] == '1')) ) {
                        $generehasmodello = new Generehasmodello;
                        $generehasmodello->genere_id = $genere->id;
                        $generehasmodello->modello_id = $product->id;
                        $generehasmodello->prezzo =  $data['AdultsPrice'];
                        $generehasmodello->sconto = 0;
                        $generehasmodello->save();
                        $trovato_adulto = 1;
                        $trovato_unisex_uomo = 1;

                    }
                    if ( (($genere->tipo == 'Donna') && ($data['gender'] == '3')) || (($genere->tipo == 'Donna') && ($data['gender'] == '2')) ) {
                        $generehasmodello = new Generehasmodello;
                        $generehasmodello->genere_id = $genere->id;
                        $generehasmodello->modello_id = $product->id;
                        $generehasmodello->prezzo =  $data['AdultsPrice'];
                        $generehasmodello->sconto = 0;
                        $generehasmodello->save();
                        $trovato_adulto = 1;
                        $trovato_unisex_donna = 1;
                    }
                }
            }
            if( ($data['gender'] == '3') && ($trovato_unisex_uomo == 1) && ($trovato_unisex_donna == 0) ) $flash_message_error .= "This Category isn't connected with Female Gender, so the Price for Woman has not been entered!";
            if( ($data['gender'] == '3') && ($trovato_unisex_uomo == 0) && ($trovato_unisex_donna == 1) ) $flash_message_error .= "This Category isn't connected with Male Gender, so the Price for Man has not been entered!";

            if($trovato_adulto == 0){
                $flash_message_error = "This Category isn't connected with Adults Genders, so the Adults Price has not been entered!";
            }

            if ( ($trovato_adulto == 0) && (is_null($data['ChildrenPrice'])) ) {
                $delete_photo = Foto::where('modello_id', $product->id)->first();
                Altre::where('foto_id', $delete_photo->id)->delete();
                Foto::where('modello_id', $product->id)->delete();
                Modello::find($product->id)->delete();
                return redirect()->back()->with('flash_message_error', 'You entered the price for a gender that is not related to the chosen category!');
            }

            $trovato_unisex_bambino = 0;
            $trovato_unisex_bambina = 0;
            $trovato_bambino = 1;
            if (!is_null($data['ChildrenPrice'])) {
                $trovato_bambino = 0;
                $generehascategoria = Generehascategoria::where('categoria_id', $data['category_id'])->get();
                foreach($generehascategoria as $item){
                    $genere = Genere::find($item->genere_id);
                    if( (($genere->tipo == 'Bambino') && ($data['gender'] == '3')) || (($genere->tipo == 'Bambino') && ($data['gender'] == '1')) ) {
                        $generehasmodello = new Generehasmodello;
                        $generehasmodello->genere_id = $genere->id;
                        $generehasmodello->modello_id = $product->id;
                        $generehasmodello->prezzo =  $data['ChildrenPrice'];
                        $generehasmodello->sconto = 0;
                        $generehasmodello->save();
                        $trovato_bambino = 1;
                        $trovato_unisex_bambino = 1;
                    }
                    if( (($genere->tipo == 'Bambina') && ($data['gender'] == '3')) || (($genere->tipo == 'Bambina') && ($data['gender'] == '2')) ) {
                        $generehasmodello = new Generehasmodello;
                        $generehasmodello->genere_id = $genere->id;
                        $generehasmodello->modello_id = $product->id;
                        $generehasmodello->prezzo =  $data['ChildrenPrice'];
                        $generehasmodello->sconto = 0;
                        $generehasmodello->save();
                        $trovato_bambino = 1;
                        $trovato_unisex_bambina = 1;
                    }
                }
            }
            if( ($data['gender'] == '3') && ($trovato_unisex_bambino == 1) && ($trovato_unisex_bambina == 0) ) $flash_message_error .= "This Category isn't connected with Female Gender, so the Price for Girl has not been entered!";
            if( ($data['gender'] == '3') && ($trovato_unisex_bambino == 0) && ($trovato_unisex_bambina == 1) ) $flash_message_error .= "This Category isn't connected with Male Gender, so the Price for Boy has not been entered!";

            if($trovato_bambino == 0){
                if($flash_message_error == "") $flash_message_error = "This Category isn't connected with Children Genders, so the Children Price has not been entered!";
                else $flash_message_error .= "<br>This Category isn't connected with Children Genders, so the Children Price has not been entered!";
            }

            if ( ($trovato_bambino == 0) && (is_null($data['AdultsPrice'])) ) {
                $delete_photo = Foto::where('modello_id', $product->id)->first();
                Altre::where('foto_id', $delete_photo->id)->delete();
                Foto::where('modello_id', $product->id)->delete();
                Modello::find($product->id)->delete();
                return redirect()->back()->with('flash_message_error', 'You entered the price for a gender that is not related to the chosen category!');
            }

            if ($flash_message_error == "") return redirect('/admin/view-products')
                ->with('flash_message_success', 'Product Added Successfully!');
            else return redirect('/admin/view-products')
                ->with('flash_message_success', 'Product Added Successfully!')
                ->with(compact('flash_message_error'));

        }

        $categories = Categoria::all();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($categories as $cat){
            $categories_dropdown .= "<option value='".$cat->id."'>$cat->name</option>";
        }
        $collections = Collezione::all();
        $collections_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($collections as $coll){
            $collections_dropdown .= "<option value='".$coll->id."'>$coll->nome</option>";
        }
        $brands = Marca::all();
        $brands_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($brands as $br){
            $brands_dropdown .= "<option value='".$br->id."'>$br->nome</option>";
        }
        $styles = Stile::all();
        $styles_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($styles as $sty){
            $styles_dropdown .= "<option value='".$sty->id."'>$sty->nome</option>";
        }

        $bodyclass = '';

        return view('Backend.Product.add_product')
            ->with(compact('bodyclass'))
            ->with(compact('collections_dropdown'))
            ->with(compact('brands_dropdown'))
            ->with(compact('styles_dropdown'))
            ->with(compact('categories_dropdown'));
    }

    public function viewProducts(){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        $products = Modello::all();
        foreach($products as $key => $val){
            $category_name = Categoria::where(['id' => $val->categoria_id])->first();
            $products[$key]->categoria_nome = $category_name->name;
            $collection_name = Collezione::find($val->collezione_id);
            $products[$key]->collezione_nome = $collection_name->nome;
            $style_name = Stile::where(['id' => $val->stile_id])->first();
            $products[$key]->stile_nome = $style_name->nome;
            $brand_name = Marca::where(['id' => $val->marca_id])->first();
            $products[$key]->marca_nome = $brand_name->nome;
            $search = Foto::where('modello_id', $val->id)->first();
            if(is_null($search)) $products[$key]->photo ="";
            else $products[$key]->photo = $search->id;

            $newDate = date("m-d-Y", strtotime($val->datauscita));
            $val->datauscita = $newDate;
        }
        $bodyclass = '';
        return view('Backend.Product.view_products')->with(compact('bodyclass'))->with(compact('products'));
    }

    public function editProduct(Request $request, $id = null){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $request->validate([
                'AdultsPrice' => 'nullable|numeric',
                'ChildrenPrice' => 'nullable|numeric'
            ]);

            if (strlen($data['product_name']) > 65) return redirect()->back()->with('flash_message_error', 'Product name too long');

            if (!empty($request->MainImage)) {
                $request->validate([
                    'MainImage' => 'image'
                ]);
            }
            if (!empty($request->SecondImage)) {
                $request->validate([
                    'SecondImage' => 'image'
                ]);
            }
            if (!empty($request->ThirdImage)) {
                $request->validate([
                    'ThirdImage' => 'image'
                ]);
            }

            $request->validate([
                'AdultsDiscount' => 'nullable|integer|max:90',
                'ChildrenDiscount' => 'nullable|integer|max:90'
            ]);

            $flash_message_error = "";

            $trovato_adulto = 1;
            if (!is_null($data['AdultsPrice'])) {
                $uomo = Generehasmodello::where('modello_id', $id)->where('genere_id', 1)->first();
                $donna = Generehasmodello::where('modello_id', $id)->where('genere_id', 2)->first();
                $trovato_adulto = 0;
                $generehascategoria = Generehascategoria::where('categoria_id', $data['category_id'])->get();
                foreach($generehascategoria as $item){
                    $genere = Genere::find($item->genere_id);
                    if( ($genere->tipo == 'Uomo') && (!empty($uomo)) ) {
                        $uomo->delete();
                        $generehasmodello = new Generehasmodello;
                        $generehasmodello->genere_id = $genere->id;
                        $generehasmodello->modello_id = $id;
                        $generehasmodello->prezzo =  $data['AdultsPrice'];
                        $generehasmodello->sconto = $data['discount1'];
                        $generehasmodello->save();
                        $trovato_adulto = 1;
                    }
                    if( ($genere->tipo == 'Donna') && (!empty($donna)) ) {
                        $donna->delete();
                        $generehasmodello = new Generehasmodello;
                        $generehasmodello->genere_id = $genere->id;
                        $generehasmodello->modello_id = $id;
                        $generehasmodello->prezzo =  $data['AdultsPrice'];
                        $generehasmodello->sconto = $data['discount1'];;
                        $generehasmodello->save();
                        $trovato_adulto = 1;
                    }
                }
            }
            if($trovato_adulto == 0){
                $flash_message_error = "This Category isn't connected with Adults Genders, so the Adults Price has not been entered!";
            }

            $trovato_bambino = 1;
            if (!is_null($data['ChildrenPrice'])) {
                $bambino = Generehasmodello::where('modello_id', $id)->where('genere_id', 3)->first();
                $bambina = Generehasmodello::where('modello_id', $id)->where('genere_id', 4)->first();
                $trovato_bambino = 0;
                $generehascategoria = Generehascategoria::where('categoria_id', $data['category_id'])->get();
                foreach($generehascategoria as $item){
                    $genere = Genere::find($item->genere_id);
                    if( ($genere->tipo == 'Bambino') && (!empty($bambino)) ) {
                        $bambino->delete();
                        $generehasmodello = new Generehasmodello;
                        $generehasmodello->genere_id = $genere->id;
                        $generehasmodello->modello_id = $id;
                        $generehasmodello->prezzo =  $data['ChildrenPrice'];
                        $generehasmodello->sconto = $data['discount2'];
                        $generehasmodello->save();
                        $trovato_bambino = 1;
                    }
                    if( ($genere->tipo == 'Bambina') && (!empty($bambina)) ) {
                        $bambina->delete();
                        $generehasmodello = new Generehasmodello;
                        $generehasmodello->genere_id = $genere->id;
                        $generehasmodello->modello_id = $id;
                        $generehasmodello->prezzo =  $data['ChildrenPrice'];
                        $generehasmodello->sconto = $data['discount2'];
                        $generehasmodello->save();
                        $trovato_bambino = 1;
                    }
                }
            }
            if($trovato_bambino == 0){
                if($flash_message_error == "") $flash_message_error = "This Category isn't connected with Children Genders, so the Children Price has not been entered!";
                else $flash_message_error .= "<br>This Category isn't connected with Children Genders, so the Children Price has not been entered!";
            }

            $trovato_adulto = 1;
            if (!is_null($data['AdultsDiscount'])) {
                $trovato_adulto = 0;
                $uomo = Generehasmodello::where('modello_id', $id)->where('genere_id', 1)->first();
                $donna = Generehasmodello::where('modello_id', $id)->where('genere_id', 2)->first();
                if (!is_null($uomo)){
                    Generehasmodello::where(['id' => $uomo->id])->update(['sconto' => $data['AdultsDiscount']]);
                    $trovato_adulto = 1;
                }
                if (!is_null($donna)){
                    Generehasmodello::where(['id' => $donna->id])->update(['sconto' => $data['AdultsDiscount']]);
                    $trovato_adulto = 1;
                }
            }
            if($trovato_adulto == 0){
                if($flash_message_error == "") $flash_message_error = "Adults Genders haven't a Price registered, so the Adults Discount has not been entered!";
                else $flash_message_error .= "<br>Adults Genders haven't a Price registered, so the Adults Discount has not been entered!";
            }

            $trovato_bambino = 1;
            if (!is_null($data['ChildrenDiscount'])) {
                $trovato_bambino = 0;
                $bambino = Generehasmodello::where('modello_id', $id)->where('genere_id', 3)->first();
                $bambina = Generehasmodello::where('modello_id', $id)->where('genere_id', 4)->first();
                if (!is_null($bambino)){
                    Generehasmodello::where(['id' => $bambino->id])->update(['sconto' => $data['ChildrenDiscount']]);
                    $trovato_bambino = 1;
                }
                if (!is_null($bambina)) {
                    Generehasmodello::where(['id' => $bambina->id])->update(['sconto' => $data['ChildrenDiscount']]);
                    $trovato_bambino = 1;
                }
            }
            if($trovato_bambino == 0){
                if($flash_message_error == "") $flash_message_error = "Children Genders haven't a Price registered, so the Children Discount has not been entered!";
                else $flash_message_error .= "<br>Children Genders haven't a Price registered, so the Children Discount has not been entered!";
            }

            Modello::where(['id' => $id])->update(['nome' => $data['product_name'], 'descrizione' => $data['description'],'categoria_id' => $data['category_id'],
                'collezione_id' => $data['collection_id'], 'stile_id' => $data['style_id'],
                'marca_id' => $data['brand_id']]);

            if (!empty($request->MainImage)){
                $image_file = $request->MainImage;
                $image = Image::make($image_file)->resize(208, 300);
                Response::make($image->encode('jpeg'));
                $form_data = array(
                    'modello_id' => $id,
                    'data' => $image
                );
                $photo = Foto::where('modello_id', $id)->first();
                if (empty($photo)) {
                    Foto::create($form_data);
                    $photo = Foto::where('modello_id', $id)->first();
                }
                else Foto::where('modello_id', $id)->update($form_data);

                for($i=0;$i<2;$i++) {
                    $image_file = $request->MainImage;
                    if($i==0) {
                        $image = Image::make($image_file)->resize(709, 1024);
                        Response::make($image->encode('jpeg'));
                        $form_data = array(
                            'foto_id'  => $photo->id,
                            'data' => $image,
                            'tipo'  => 'slider',
                            'posizione' => 1
                        );
                        Altre::where('foto_id', $photo->id)
                            ->where('tipo', 'slider')
                            ->where('posizione', 1)
                            ->update($form_data);
                    }
                    else {
                        $image = Image::make($image_file)->resize(38, 55);
                        Response::make($image->encode('jpeg'));
                        $form_data = array(
                            'foto_id'  => $photo->id,
                            'data' => $image,
                            'tipo'  => 'thumbnail',
                            'posizione' => 1
                        );
                        Altre::where('foto_id', $photo->id)
                            ->where('tipo', 'thumbnail')
                            ->where('posizione', 1)
                            ->update($form_data);
                    }
                }
            }

            if (!empty($request->SecondImage)){
                $photo = Foto::where('modello_id', $id)->first();
                for($i=0;$i<3;$i++) {
                    $image_file = $request->SecondImage;
                    if($i==0) {
                        $image = Image::make($image_file)->resize(208, 300);
                        Response::make($image->encode('jpeg'));
                        $form_data = array(
                            'foto_id'  => $photo->id,
                            'data' => $image,
                            'tipo'  => 'normal',
                            'posizione' => 2
                        );
                        Altre::where('foto_id', $photo->id)
                            ->where('tipo', 'normal')
                            ->where('posizione', 2)
                            ->update($form_data);
                    }
                    else if($i==1) {
                        $image = Image::make($image_file)->resize(709, 1024);
                        Response::make($image->encode('jpeg'));
                        $form_data = array(
                            'foto_id'  => $photo->id,
                            'data' => $image,
                            'tipo'  => 'slider',
                            'posizione' => 2
                        );
                        Altre::where('foto_id', $photo->id)
                            ->where('tipo', 'slider')
                            ->where('posizione', 2)
                            ->update($form_data);
                    }
                    else {
                        $image = Image::make($image_file)->resize(38, 55);
                        Response::make($image->encode('jpeg'));
                        $form_data = array(
                            'foto_id'  => $photo->id,
                            'data' => $image,
                            'tipo'  => 'thumbnail',
                            'posizione' => 2
                        );
                        Altre::where('foto_id', $photo->id)
                            ->where('tipo', 'thumbnail')
                            ->where('posizione', 2)
                            ->update($form_data);
                    }
                }
            }

            if (!empty($request->ThirdImage)){
                $photo = Foto::where('modello_id', $id)->first();
                for($i=0;$i<3;$i++) {
                    $image_file = $request->ThirdImage;
                    if($i==0) {
                        $image = Image::make($image_file)->resize(208, 300);
                        Response::make($image->encode('jpeg'));
                        $form_data = array(
                            'foto_id'  => $photo->id,
                            'data' => $image,
                            'tipo'  => 'normal',
                            'posizione' => 3
                        );
                        Altre::where('foto_id', $photo->id)
                            ->where('tipo', 'normal')
                            ->where('posizione', 3)
                            ->update($form_data);
                    }
                    else if($i==1) {
                        $image = Image::make($image_file)->resize(709, 1024);
                        Response::make($image->encode('jpeg'));
                        $form_data = array(
                            'foto_id'  => $photo->id,
                            'data' => $image,
                            'tipo'  => 'slider',
                            'posizione' => 3
                        );
                        Altre::where('foto_id', $photo->id)
                            ->where('tipo', 'slider')
                            ->where('posizione', 3)
                            ->update($form_data);
                    }
                    else {
                        $image = Image::make($image_file)->resize(38, 55);
                        Response::make($image->encode('jpeg'));
                        $form_data = array(
                            'foto_id'  => $photo->id,
                            'data' => $image,
                            'tipo'  => 'thumbnail',
                            'posizione' => 3
                        );
                        Altre::where('foto_id', $photo->id)
                            ->where('tipo', 'thumbnail')
                            ->where('posizione', 3)
                            ->update($form_data);
                    }
                }
            }

            if ($flash_message_error == "") return redirect('/admin/view-products')
                ->with('flash_message_success', 'Product Updated Successfully!');
            else return redirect('/admin/view-products')
                ->with('flash_message_success', 'Product Updated Successfully!')
                ->with(compact('flash_message_error'));
        }
        $productDetails = Modello::where('id', $id)->first();

        $discount_adults = "0";
        $discount_children = "0";
        $generehasmodello = Generehasmodello::where('modello_id', $productDetails->id)->get();
        foreach($generehasmodello as $item){
            $genere = Genere::find($item->genere_id);
            if ($genere->tipo == 'Uomo' || $genere->tipo == 'Donna'){
                $discount_adults = $item->sconto;
            }
            if ($genere->tipo == 'Bambino' || $genere->tipo == 'Bambina'){
                $discount_children = $item->sconto;
            }
        }


        $newDate = date("m-d-Y", strtotime($productDetails->datauscita));
        $productDetails->datauscita = $newDate;


        $categories = Categoria::all();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($categories as $cat){
            if($cat->id == $productDetails->categoria_id){
                $selected = "Selected";
            } else {
                $selected = "";
            }
            $categories_dropdown .= "<option value='".$cat->id."'".$selected.">$cat->name</option>";
        }
        $collections = Collezione::all();
        $collections_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($collections as $coll){
            if($coll->id == $productDetails->collezione_id){
                $selected = "Selected";
            } else {
                $selected = "";
            }
            $collections_dropdown .= "<option value='".$coll->id."'".$selected.">$coll->nome</option>";
        }
        $brands = Marca::all();
        $brands_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($brands as $br){
            if($br->id == $productDetails->marca_id){
                $selected = "Selected";
            } else {
                $selected = "";
            }
            $brands_dropdown .= "<option value='".$br->id."'".$selected.">$br->nome</option>";
        }
        $styles = Stile::all();
        $styles_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($styles as $sty){
            if($sty->id == $productDetails->stile_id){
                $selected = "Selected";
            } else {
                $selected = "";
            }
            $styles_dropdown .= "<option value='".$sty->id."'".$selected.">$sty->nome</option>";
        }

        $placeholder_adults = "Not Available";
        $placeholder_children = "Not Available";
        $generehasmodello = Generehasmodello::where('modello_id', $productDetails->id)->get();
        foreach($generehasmodello as $item){
            $genere = Genere::find($item->genere_id);
            if ($genere->tipo == 'Uomo' || $genere->tipo == 'Donna'){
                $placeholder_adults = $item->prezzo;
            }
            if ($genere->tipo == 'Bambino' || $genere->tipo == 'Bambina'){
                $placeholder_children = $item->prezzo;
            }
        }

        $bodyclass = '';

        return view('Backend.Product.edit_product')
            ->with(compact('bodyclass'))
            ->with(compact('discount_adults'))
            ->with(compact('discount_children'))
            ->with(compact('placeholder_adults'))
            ->with(compact('placeholder_children'))
            ->with(compact('collections_dropdown'))
            ->with(compact('brands_dropdown'))
            ->with(compact('styles_dropdown'))
            ->with(compact('categories_dropdown'))
            ->with(compact('productDetails'));
    }

    public function deleteProduct($id = null){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        //Ordine e reso rimangono intatti
        Recensione::where('modello_id', $id)->delete();
        Quantita::where('modello_id', $id)->delete();
        Carrello::where('modello_id', $id)->delete();
        Preferito::where('modello_id', $id)->delete();
        $photo = Foto::where('modello_id', $id)->first();
        if (!empty($photo)) Altre::where('foto_id', $photo->id)->delete();
        Foto::where('modello_id', $id)->delete();
        Generehasmodello::where('modello_id', $id)->delete();
        Modello::where(['id' => $id])->delete();
        return redirect()->back()->with('flash_message_success', 'Product Deleted Successfully!');
    }

    public function addPieces(Request $request, $id = null){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            if (empty($data['size'])) return redirect()->back()->with('flash_message_error', 'Size is missing!');

            if (empty($data['color'])) return redirect()->back()->with('flash_message_error', 'Color is missing!');

            if (count($data['size']) > count($data['color'])) return redirect()->back()->with('flash_message_error', 'Color is missing!');

            if (count($data['size']) < count($data['color'])) return redirect()->back()->with('flash_message_error', 'Size is missing!');

            $exist = Quantita::where('taglia_id', $data['size'])
                ->where('modello_id', $data['product_id'])
                ->where('colore_id', $data['color'])
                ->first();
            if (empty($exist)) {
                foreach($data['size'] as $key => $val ){
                    $quantita = new Quantita;
                    $quantita->modello_id = $data['product_id'];
                    $quantita->colore_id = $data['color'][$key];
                    $quantita->taglia_id = $val;
                    $quantita->quantita = $data['quantity'][$key];
                    $quantita->save();
                }
            } else {
                $quantita = $exist->quantita + $data['quantity'][0];
                $exist->update(['quantita' => $quantita]);
            }

            return redirect('admin/add-pieces/'.$data['product_id'])->with('flash_message_success', 'Pieces of Product Added Successfully!');

        }

        $productDetails = Modello::where('id', $id)->first();

        $gender = Generehascategoria::where('categoria_id', $productDetails->categoria_id)->get();
        $i = 0;
        $adulto = 0;
        $bambino = 0;
        foreach($gender as $genere){
            $search = Genere::where('id', $genere->genere_id)->first();
            if ($search->tipo == 'Uomo' || $search->tipo == 'Donna') $adulto = 1;
            if ($search->tipo == 'Bambino' || $search->tipo == 'Bambina') $bambino = 1;
            $i = $i+1;
        }

        if ($adulto == 1 && $bambino == 1) {
            $sizes = Taglia::all();
            $sizes_dropdown = "<option value='' selected disabled>Select</option>";
            foreach ($sizes as $siz) {
                $sizes_dropdown .= "<option value='" . $siz->id . "'>$siz->numero</option>";
            }
        } else if ($adulto == 1) {
            $sizes = Taglia::where('adulto', 1)->get();
            $sizes_dropdown = "<option value='' selected disabled>Select</option>";
            foreach ($sizes as $siz) {
                $sizes_dropdown .= "<option value='" . $siz->id . "'>$siz->numero</option>";
            }
            } else {
            $sizes = Taglia::where('adulto', 0)->get();
            $sizes_dropdown = "<option value='' selected disabled>Select</option>";
            foreach ($sizes as $siz) {
                $sizes_dropdown .= "<option value='" . $siz->id . "'>$siz->numero</option>";
            }
        }
        $colors = Colore::all();
        $colors_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($colors as $col){
            $colors_dropdown .= "<option value='".$col->id."'>$col->nome</option>";
        }

        //Data Tables
        $stock = Quantita::where('modello_id', $productDetails->id )->get();
        $i = 0;
        $ciclo = 0;
        foreach ($stock as $st) {
            $temp = Colore::find($st->colore_id);
            $color_name[$i] = $temp->nome;
            $temp = Taglia::find($st->taglia_id);
            $size_name[$i] = $temp->numero;
            $i = $i + 1;
            $ciclo = 1;
        }

        if ($ciclo == 0) {
            $size_name = "";
            $color_name = "";
        }

        $bodyclass = 'addPiecesPage';

        return view('Backend.Product.add_pieces')
            ->with(compact('bodyclass'))
            ->with(compact('stock'))
            ->with(compact('color_name'))
            ->with(compact('size_name'))
            ->with(compact('sizes_dropdown'))
            ->with(compact('colors_dropdown'))
            ->with(compact('productDetails'));
    }

    public function deletePieces ($id = null) {
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        Quantita::find($id)->delete();
        return redirect()->back()->with('flash_message_success', 'Product Pieces Deleted Successfully!');
    }

    //Per Dropdown
    public function sizesdropdown(Request $request){
        $data = $request->all();
        $categoria_id = $data['categoria_id'];
        $gender = Generehascategoria::where('categoria_id', $categoria_id)->get();
        $i = 0;
        $adulto = 0;
        $bambino = 0;
        foreach($gender as $genere){
            $search = Genere::where('id', $genere->genere_id)->first();
            if ($search->tipo == 'Uomo' || $search->tipo == 'Donna') $adulto = 1;
            if ($search->tipo == 'Bambino' || $search->tipo == 'Bambina') $bambino = 1;
            $i = $i+1;
        }

        if ($adulto == 1 && $bambino == 1) {
            $sizes = Taglia::all();
            $sizes_dropdown = "<option value='' selected disabled>Select</option>";
            foreach ($sizes as $siz) {
                $sizes_dropdown .= "<option value='" . $siz->id . "'>$siz->numero</option>";
            }
        } else if ($adulto == 1) {
            $sizes = Taglia::where('adulto', 1)->get();
            $sizes_dropdown = "<option value='' selected disabled>Select</option>";
            foreach ($sizes as $siz) {
                $sizes_dropdown .= "<option value='" . $siz->id . "'>$siz->numero</option>";
            }
        } else {
            $sizes = Taglia::where('adulto', 0)->get();
            $sizes_dropdown = "<option value='' selected disabled>Select</option>";
            foreach ($sizes as $siz) {
                $sizes_dropdown .= "<option value='" . $siz->id . "'>$siz->numero</option>";
            }
        }

        echo $sizes_dropdown;
    }

    //Per Dropdown
    public function colorsdropdown(){
        $colors = Colore::all();
        $colors_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($colors as $col){
            $colors_dropdown .= "<option value='".$col->id."'>$col->nome</option>";
        }
        echo $colors_dropdown;
    }

}

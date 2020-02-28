<?php

namespace App\Http\Controllers\Backend;

use App\Categoria;
use App\Collezione;
use App\Http\Controllers\Controller;
use App\Marca;
use App\Modello;
use App\Stile;
use Illuminate\Http\Request;
use Session;
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

        $categories = Categoria::all();
        $categories_dropdown = "<option selected disabled>Select</option>";
        foreach ($categories as $cat){
            $categories_dropdown .= "<option value='".$cat->id."'>$cat->name</option>";
        }
        $collection = Collezione::all();
        $collections_dropdown = "<option selected disabled>Select</option>";
        foreach ($collection as $coll){
            $collections_dropdown .= "<option value='".$coll->id."'>$coll->name</option>";
        }
        $brand = Marca::all();
        $brands_dropdown = "<option selected disabled>Select</option>";
        foreach ($brand as $br){
            $brands_dropdown .= "<option value='".$br->id."'>$br->name</option>";
        }
        $style = Stile::all();
        $styles_dropdown = "<option selected disabled>Select</option>";
        foreach ($style as $sty){
            $styles_dropdown .= "<option value='".$sty->id."'>$sty->name</option>";
        }
        return view('Backend.Product.add_product')
            ->with(compact('collections_dropdown'))
            ->with(compact('brands_dropdown'))
            ->with(compact('styles_dropdown'))
            ->with(compact('categories_dropdown'));
    }
}

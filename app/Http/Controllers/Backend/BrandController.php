<?php

namespace App\Http\Controllers\Backend;

use App\Altre;
use App\Carrello;
use App\Foto;
use App\Generehasmodello;
use App\Http\Controllers\Controller;
use App\Marca;
use App\Modello;
use App\Preferito;
use App\Quantita;
use App\Recensione;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Image;
use Illuminate\Support\Facades\Response;

class BrandController extends Controller
{
    public function addBrand (Request $request) {
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
                'MainImage' => 'required|image'
            ]);

            if ($data['enable'] == 'On') {
                if ($data['gender'] == 'Null') return redirect()->back()->with('flash_message_error', 'Select a gender to show in Home Page.');
                $marca = Marca::all();
                $attivi = 0;
                foreach ($marca as $brand){
                    if ($brand->stato == 1) $attivi += 1;
                }
                if ($attivi > 4) return redirect()->back()->with('flash_message_error', 'The maximum number of active Brands has been reached, deactivate a Brand to activate this.');
            } else  if ($data['main'] == 'On') return redirect()->back()->with('flash_message_error', 'Only enabled Brand can be shown on the main position.');

            if ($data['main'] == 'On') {
                $marca = Marca::all();
                foreach ($marca as $brand){
                    if ($brand->top == 1) return redirect()->back()->with('flash_message_error', 'There is already another Brand to which it has assigned the Home Main Image.');
                }
            }

            $reference = strtolower($data['brand_url']);
            $nome = $data['brand_name'];
            if ($data['gender'] == 'Null') $sesso = null;
            else $sesso = $data['gender'];

            $image_file = $request->MainImage;
            $image = Image::make($image_file)->resize(450, 450);
            Response::make($image->encode('jpeg'));

            if ($data['enable'] == 'On') $stato = 1;
            else $stato = 0;

            if ($data['main'] == 'On') $top = 1;
            else $top = 0;

            $form_data = array(
                'foto' => $image,
                'nome' => $nome,
                'reference' => $reference,
                'stato' => $stato,
                'top' => $top,
                'sesso' => $sesso
            );

            Marca::create($form_data);

            return redirect('/admin/view-brands')->with('flash_message_success', 'Brand Added Successfully!');
        }

        $bodyclass = '';

        return view('Backend.Brand.add-brand')->with(compact('bodyclass'));
    }

    public function viewBrands () {
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        $brands = Marca::all();
        foreach($brands as $key => $val){
            if ($val->stato == 1) $val->stato = 'Active';
            else $val->stato = 'Inactive';
            if ($val->sesso == 'Uomo') $val->sesso = 'Man';
            else if ($val->sesso == 'Donna') $val->sesso = 'Woman';
            if ($val->top == 1) $val->top = 'Assigned';
            else $val->top = 'Not Assigned';
            if (!empty($val->foto)) $val->foto = 'Assigned';
            else $val->foto = 'Not Assigned';
        }

        $bodyclass = '';

        return view('Backend.Brand.view-brands')->with(compact('bodyclass'))->with(compact('brands'));
    }

    public function editBrand (Request $request, $id = null) {
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            if ($data['enable'] == 'On') {
                if ($data['gender'] == 'Null') return redirect()->back()->with('flash_message_error', 'Select a gender to show in Home Page.');
                $marca = Marca::all();
                $attivi = 0;
                foreach ($marca as $mar){
                        if ($mar->stato == 1 && $mar->id != $data['brand_id']) $attivi += 1;
                }
                if ($attivi > 4) return redirect()->back()->with('flash_message_error', 'The maximum number of active Brands has been reached, deactivate a Brand to activate this.');
            } else  if ($data['main'] == 'On') return redirect()->back()->with('flash_message_error', 'Only enabled Brand can be shown on the main position.');

            if ($data['main'] == 'On') {
                $marca = Marca::all();
                foreach ($marca as $brand){
                    if ($brand->top == 1 && $brand->id != $data['brand_id']) return redirect()->back()->with('flash_message_error', 'There is already another Brand to which it has assigned the Home Main Image.');
                }
            }

            if (!empty($request->MainImage)) {
                $request->validate([
                    'MainImage' => 'image'
                ]);

                $nome = $data['brand_name'];
                $reference = strtolower($data['brand_url']);
                if ($data['gender'] == 'Null') $sesso = null;
                else $sesso = $data['gender'];

                if ($data['enable'] == 'On') $stato = 1;
                else $stato = 0;

                if ($data['main'] == 'On') $top = 1;
                else $top = 0;

                $image_file = $request->MainImage;
                $image = Image::make($image_file)->resize(300, 220);
                Response::make($image->encode('jpeg'));

                $form_data = array(
                    'foto' => $image,
                    'nome' => $nome,
                    'reference' => $reference,
                    'stato' => $stato,
                    'top' => $top,
                    'sesso' => $sesso
                );

                Marca::where(['id' => $id])->update($form_data);
            } else {
                $brand = Marca::find($id);

                $brand->nome = $data['brand_name'];
                $brand->reference = strtolower($data['brand_url']);
                if ($data['gender'] == 'Null') $brand->sesso = null;
                else $brand->sesso = $data['gender'];
                if ($data['enable'] == 'On') $brand->stato = 1;
                else $brand->stato = 0;
                if ($data['main'] == 'On') $brand->top = 1;
                else $brand->top = 0;

                $brand->save();
            }

            return redirect('/admin/view-brands')->with('flash_message_success', 'Brand Updated Successfully!');
        }
        $brandDetails = Marca::find($id);

        $bodyclass = '';

        return view('Backend.Brand.edit-brand')
            ->with(compact('bodyclass'))
            ->with(compact('brandDetails'));
    }

    public function deleteBrand ($id = null) {
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        $modello = Modello::where('marca_id', $id)->get();
        foreach ($modello as $item) {
            Recensione::where('modello_id', $item->id)->delete();
            Quantita::where('modello_id', $item->id)->delete();
            Carrello::where('modello_id', $item->id)->delete();
            Preferito::where('modello_id', $item->id)->delete();
            $photo = Foto::where('modello_id', $item->id)->first();
            if (!empty($photo)) Altre::where('foto_id', $photo->id)->delete();
            Foto::where('modello_id', $item->id)->delete();
            Generehasmodello::where('modello_id', $item->id)->delete();
        }
        Modello::where('marca_id', $id)->delete();

        Marca::where(['id' => $id])->delete();

        return redirect()->back()->with('flash_message_success', 'Brand Deleted Successfully!');
    }

}

<?php

namespace App\Http\Controllers\Backend;

use App\Categoria;
use App\Fotosito;
use App\Genere;
use App\Generehascategoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Image;
use Illuminate\Support\Facades\Response;

class PhotoController extends Controller
{
    public function viewFoto () {
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        $foto = Fotosito::all();
        foreach ($foto as $key => $val) {
            if (!empty($val->data)) $foto[$key]->status = 'Loaded';
            else $foto[$key]->status = 'Unloaded';
        }

        $bodyclass = '';

        return view('Backend.Photo.view-photos')
            ->with(compact('bodyclass'))
            ->with(compact('foto'));
    }

    public function editFoto (Request $request, $id = null) {
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
                'data' => 'image'
            ]);

            $fotosito = Fotosito::find($data['id_foto']);

            if ($fotosito->pagina == 'Home') {
                if (!isset($data['category_id']) || !isset($data['gender_id'])) return redirect()->back()->with('flash_message_error', 'Select the Gender and Category to link');

                $generehascategoria = Generehascategoria::where('categoria_id', $data['category_id'])
                    ->where('genere_id', $data['gender_id'])->get();
                if ($generehascategoria->isEmpty()) return redirect()->back()->with('flash_message_error', 'The Gender and the Category you have entered aren\'t linked! Change your selection');

                if (!empty($data['data'])) {
                    $image_file = $request->data;
                    $image = Image::make($image_file)->resize(1170, 170);
                    Response::make($image->encode('jpeg'));

                    $form_data = array(
                        'data' => $image,
                        'pagina' => $fotosito->pagina,
                        'categoria_id' => $data['category_id'],
                        'genere_id' => $data['gender_id'],
                    );

                    Fotosito::where(['id' => $id])->update($form_data);
                } else {
                    Fotosito::where(['id' => $id])->update(['categoria_id' => $data['category_id'], 'genere_id' => $data['gender_id']]);
                }
            } else {
                $image_file = $request->data;
                $image = Image::make($image_file)->resize(1408, 220);
                Response::make($image->encode('jpeg'));

                $form_data = array(
                    'data' => $image,
                    'pagina' => $fotosito->pagina,
                    'categoria_id' => null,
                    'genere_id' => null,
                );

                Fotosito::where(['id' => $id])->update($form_data);
            }

            return redirect('/admin/view-photos')->with('flash_message_success', 'Photo Updated Successfully!');
        }
        $fotosito = Fotosito::find($id);

        $categories = Categoria::all();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($categories as $cat){
            if($cat->id == $fotosito->categoria_id){
                $selected = "Selected";
            } else {
                $selected = "";
            }
            $categories_dropdown .= "<option value='".$cat->id."'".$selected.">$cat->name</option>";
        }
        $gender = Genere::all();
        $genders_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($gender as $gen){
            if($gen->id == $fotosito->genere_id){
                $selected = "Selected";
            } else {
                $selected = "";
            }
            $genders_dropdown .= "<option value='".$gen->id."'".$selected.">$gen->tipo</option>";
        }

        $bodyclass = '';

        return view('Backend.Photo.edit-photo')
            ->with(compact('bodyclass'))
            ->with(compact('fotosito'))
            ->with(compact('genders_dropdown'))
            ->with(compact('categories_dropdown'));
    }
}

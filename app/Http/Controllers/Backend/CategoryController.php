<?php

namespace App\Http\Controllers\Backend;

use App\Categoria;
use App\Genere;
use App\Generehascategoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            $category = new Categoria;
            $category->name = $data['category_name'];
            $category->reference = $data['category_reference'];
            $category->description = $data['description'];
            if(empty($data['gender_name'])){
                return redirect()->back()->with('flash_message_error', 'Gender is missing!');
            }
            if ($data['enable'] == 'On') {
                $enable_cat = Categoria::all();
                $attivi = 0;
                foreach ($enable_cat as $cat){
                    if ($cat->stato == 1) $attivi += 1;
                }
                if ($attivi > 3) return redirect()->back()->with('flash_message_error', 'The maximum number of active Category shown in Home Page has been reached, deactivate a Category to activate this.');
            }
            if ($data['enable'] == 'On')  $category->stato = 1;
            else  $category->stato = 0;

            $category->save();
            foreach(($data['gender_name']) as $gender){
                $generehascategoria = new Generehascategoria;
                $gen = Genere::where('tipo', $gender)->first();
                $generehascategoria->genere_id = $gen->id;
                $cat = Categoria::where('name', $data['category_name'])->first();
                $generehascategoria->categoria_id = $cat->id;
                $generehascategoria->save();
            }
            return redirect('/admin/view-categories')->with('flash_message_success', 'Category Added Successfully!');
        }
        $bodyclass = '';
        return view('Backend.Category.add-category')->with(compact('bodyclass'));
    }

    public function viewCategories(Request $request){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        $categories = Categoria::all();
        foreach($categories as $key => $val){
            if ($val->stato == 1) $val->stato = 'Yes';
            else $val->stato = 'No';
        }
        $bodyclass = '';
        return view('Backend.Category.view-categories')->with(compact('bodyclass'))->with(compact('categories'));
    }

    public function editCategory(Request $request, $id = null){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            if(empty($data['gender_name'])){
                return redirect()->back()->with('flash_message_error', 'Gender is missing!');
            }
            if ($data['enable'] == 'On') {
                $enable_cat = Categoria::all();
                $attivi = 0;
                foreach ($enable_cat as $cat){
                    if ($cat->stato == 1 && $cat->id != $data['category_id']) $attivi += 1;
                }
                if ($attivi > 3) return redirect()->back()->with('flash_message_error', 'The maximum number of active Category shown in Home Page has been reached, deactivate a Category to activate this.');
            }

            $cat_search = Categoria::where('name', $data['category_name'])->first();
            Generehascategoria::where('categoria_id', $cat_search->id)->delete();

            foreach($data['gender_name'] as $gen_update){
                $gen_search = Genere::where('tipo', $gen_update)->first();
                $generehascategoria = new Generehascategoria;
                $generehascategoria->genere_id = $gen_search->id;
                $generehascategoria->categoria_id = $cat_search->id;
                $generehascategoria->save();
            }
            if ($data['enable'] == 'On')  $stato = 1;
            else  $stato = 0;

            Categoria::where(['id' => $id])->update(['name' => $data['category_name'], 'description' => $data['description'], 'reference' => $data['category_reference'], 'stato' => $stato]);
            return redirect('/admin/view-categories')->with('flash_message_success', 'Category Updated Successfully!');
        }
        $categoryDetails = Categoria::where('id', $id)->first();

        $search = Generehascategoria::where('categoria_id', $id)->get();
        $i = 0;
        foreach($search as $search){
            $gen_id[$i] = $search->genere_id;
            $i = $i+1;
        }
        $gender_select = "";
        $show = Genere::all();
        $ok = 0;
        foreach($show as $show){
            foreach($gen_id as $id){
                if ($show->id == $id){
                    $genere = Genere::where('id', $id)->first();
                    $gender_select .= "<option value='" . $genere->tipo . "' selected>$genere->tipo</option>";
                    $ok = 1;
                }
            }
            if ($ok == 0) $gender_select .= "<option value='" . $show->tipo . "'>$show->tipo</option>";
            $ok = 0;
        }

        $bodyclass = '';

        return view('Backend.Category.edit-category')
            ->with(compact('bodyclass'))
            ->with(compact('gender_select'))
            ->with(compact('categoryDetails'));
    }

    public function deleteCategory($id = null){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        if (!empty($id)) {
            //Cancello tutti i modelli collegati?
            Generehascategoria::where('categoria_id', $id)->delete();
            Categoria::where(['id' => $id])->delete();
            return redirect()->back()->with('flash_message_success', 'Category Deleted Successfully!');
        }
    }
}

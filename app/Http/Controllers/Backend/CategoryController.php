<?php

namespace App\Http\Controllers\Backend;

use App\Categoria;
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
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->save();
            return redirect('/admin/view-categories')->with('flash_message_success', 'Category Added Successfully!');
        }
        return view('Backend.Category.add-category');
    }

    public function viewCategories(Request $request){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        $categories = Categoria::all();
        return view('Backend.Category.view-categories')->with(compact('categories'));
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
            Categoria::where(['id' => $id])->update(['name' => $data['category_name'], 'description' => $data['description'], 'url' => $data['url']]);
            return redirect('/admin/view-categories')->with('flash_message_success', 'Category Updated Successfully!');
        }
        $categoryDetails = Categoria::where('id', $id)->first();
        return view('Backend.Category.edit-category')->with(compact('categoryDetails'));
    }

    public function deleteCategory($id = null){
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }
        if (!empty($id)) {
            Categoria::where(['id' => $id])->delete();
            return redirect()->back()->with('flash_message_success', 'Category Deleted Successfully!');
        }
    }
}

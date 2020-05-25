<?php

namespace App\Http\Controllers\Backend;

use App\Collezione;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Image;
use Illuminate\Support\Facades\Response;

class CollectionController extends Controller
{
    public function addCollection (Request $request) {
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
                $collezione = Collezione::all();
                $attivi = 0;
                foreach ($collezione as $col){
                    if ($col->stato == 1) $attivi += 1;
                }
                if ($attivi > 3) return redirect()->back()->with('flash_message_error', 'The maximum number of active Collections has been reached, deactivate a Collection to activate this.');
            }

            $reference = strtolower($data['collection_url']);
            $nome = $data['collection_name'];

            $image_file = $request->MainImage;
            $image = Image::make($image_file)->resize(1280, 600);
            Response::make($image->encode('jpeg'));

            if ($data['enable'] == 'On') $stato = 1;
            else $stato = 0;

            $form_data = array(
                'foto' => $image,
                'nome' => $nome,
                'reference' => $reference,
                'stato' => $stato,
            );

            Collezione::create($form_data);

            return redirect('/admin/view-collections')->with('flash_message_success', 'Collection Added Successfully!');
        }

        $bodyclass = '';

        return view('Backend.Collection.add-collection')->with(compact('bodyclass'));
    }

    public function viewCollections () {
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        $collections = Collezione::all();
        foreach($collections as $key => $val){
            if ($val->stato == 1) $val->stato = 'Active';
            else $val->stato = 'Inactive';
            if (!empty($val->foto)) $val->foto = 'Assigned';
            else $val->foto = 'Not Assigned';
        }

        $bodyclass = '';

        return view('Backend.Collection.view-collections')->with(compact('bodyclass'))->with(compact('collections'));
    }

    public function editCollection (Request $request, $id = null) {
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
                $collezione = Collezione::all();
                $attivi = 0;
                foreach ($collezione as $col){
                    if ($col->id != $data['collection_id']) {
                        if ($col->stato == 1) $attivi += 1;
                    }
                }
                if ($attivi > 3) return redirect()->back()->with('flash_message_error', 'The maximum number of active Collections has been reached, deactivate a Collection to activate this.');
            }

            if (!empty($request->MainImage)) {
                $request->validate([
                    'MainImage' => 'image'
                ]);

                $nome = $data['collection_name'];
                $reference = strtolower($data['collection_url']);

                if ($data['enable'] == 'On') $stato = 1;
                else $stato = 0;

                $image_file = $request->MainImage;
                $image = Image::make($image_file)->resize(1280, 600);
                Response::make($image->encode('jpeg'));

                $form_data = array(
                    'foto' => $image,
                    'nome' => $nome,
                    'reference' => $reference,
                    'stato' => $stato
                );

                Collezione::where(['id' => $id])->update($form_data);
            } else {
                $collection = Collezione::find($id);

                $collection->nome = $data['collection_name'];
                $collection->reference = strtolower($data['collection_url']);
                if ($data['enable'] == 'On') $collection->stato = 1;
                else $collection->stato = 0;

                $collection->save();
            }

            return redirect('/admin/view-collections')->with('flash_message_success', 'Collection Updated Successfully!');
        }
        $collectionDetails = Collezione::find($id);

        $bodyclass = '';

        return view('Backend.Collection.edit-collection')
            ->with(compact('bodyclass'))
            ->with(compact('collectionDetails'));
    }

    public function deleteCollection ($id = null) {
        if (Session::has('adminSession')){
            //Ok
        }
        else {
            return redirect('/admin')->with('flash_message_error', 'Please login to access');
        }

        Collezione::where(['id' => $id])->delete();

        return redirect()->back()->with('flash_message_success', 'Collection Deleted Successfully!');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Altre;
use Illuminate\Support\Facades\Response;
use Image;

class StoreImageController extends Controller
{
    function index()
    {
        $data = Foto::latest()->paginate(5);
        return view('store_image', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    function insert_image(Request $request)
    {
        $request->validate([
            'modello_id'  => 'required|integer',
            'data' => 'required|image'
        ]);

        $image_file = $request->data;

        $image = Image::make($image_file);

        Response::make($image->encode('jpeg'));

        $form_data = array(
            'modello_id'  => $request->modello_id,
            'data' => $image
        );

        Foto::create($form_data);

        return redirect()->back()->with('success', 'Image store in database successfully');
    }

    function insert_altre(Request $request)
    {
        $request->validate([
            'foto_id'  => 'required|integer',
            'data' => 'required|image',
            'tipo'  => 'required|string',
            'posizione' => 'required|integer'
        ]);

        $image_file = $request->data;

        $image = Image::make($image_file);

        Response::make($image->encode('jpeg'));

        $form_data = array(
            'foto_id'  => $request->foto_id,
            'data' => $image,
            'tipo'  => $request->tipo,
            'posizione' => $request->posizione
        );

        Altre::create($form_data);

        return redirect()->back()->with('success', 'Image store in database successfully');
    }

    function fetch_image($image_id)
    {
        $image = Foto::findOrFail($image_id);

        $image_file = Image::make($image->data);

        $response = Response::make($image_file->encode('jpeg'));

        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    function fetch_altre($image_id)
    {
        $image = Altre::findOrFail($image_id);

        $image_file = Image::make($image->data);

        $response = Response::make($image_file->encode('jpeg'));

        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
}



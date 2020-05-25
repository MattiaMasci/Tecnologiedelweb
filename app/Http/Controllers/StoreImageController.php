<?php

namespace App\Http\Controllers;

use App\Collezione;
use App\Marca;
use Illuminate\Http\Request;
use App\Foto;
use App\Altre;
use Illuminate\Support\Facades\Response;
use Image;

class StoreImageController extends Controller
{
    function fetch_image($image_id)
    {
        $image = Foto::findOrFail($image_id);

        $image_file = Image::make($image->data);

        $response = Response::make($image_file->encode('jpeg'));

        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    function fetch_collection_image($image_id)
    {
        $image = Collezione::findOrFail($image_id);

        $image_file = Image::make($image->foto);

        $response = Response::make($image_file->encode('jpeg'));

        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    function fetch_brand_image($image_id)
    {
        $image = Marca::findOrFail($image_id);

        $image_file = Image::make($image->foto);

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



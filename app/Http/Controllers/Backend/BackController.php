<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function index(){
        return view('Backend.test');
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Library;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $informations=Library::all();
        return view('front-end.index',[
            'informations'=>$informations
        ]);
    }
}

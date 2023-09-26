<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::latest()->paginate();

        return view('galeri.index', [
            'title' => 'Galeri Photo'
        ], compact('product'));
    }

   
}

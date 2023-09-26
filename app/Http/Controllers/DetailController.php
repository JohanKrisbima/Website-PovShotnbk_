<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\product;

class DetailController extends Controller
{
    
    public function index(product $product){
        return view('detail.index', [
            'title' => 'Detail Product',
            'product' => $product
        ]);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    //
    public function index(){
        $product = product::latest()->paginate(6);

        return view('home.index', [
            'title' => 'Menu Utama'
        ], compact('product'));
    }
    
}

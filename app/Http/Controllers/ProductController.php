<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = product::all();
        // return response()->json(['data' => $products]); 
        return ProductResource::collection($products);
    }

    public function show($id){
        $product = product::findOrFail($id);
        //  return response()->json(['data' => $product]); 
         return new ProductResource($product);
    }
}

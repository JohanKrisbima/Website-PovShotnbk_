<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;




class DownloadController extends Controller
{
    //
    public function downloadPhoto($image_original)
    {
        $filePath = 'assets/image_original/' . $image_original;
       
            return response()->download($filePath);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\PesananResource;

class PesananController extends Controller
{

    public function tampilkanPesananUser()
    {
        $idUser = Auth::id(); // Mengambil ID user yang sedang login
        $pesanan = Pesanan::with('user')
        ->where('id_user', $idUser)
        ->get();

        return view('history.index', [
            'title' => 'History'
        ], compact('pesanan'));
    }

    Public function showAll(){
        $pesanan = Pesanan::all();
        //   return response()->json(['data' => $pesanan]); 
        return PesananResource::collection($pesanan);
    }
}

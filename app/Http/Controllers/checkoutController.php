<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Carbon\Carbon;
use App\Models\Pesanan;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    //
    public function showProduct($id){
        $product = product::find($id);
        return view('checkout.index', [
            'title' => 'CheckOut'
        ], compact('product'));
    }

    public function store(Request $request, $id){
        if(Auth::id()){

            $user =auth()->user();
            $product = product::find($id);
            $pesanan = new Pesanan;
            $tanggalPesanan = Carbon::now();

            $pesanan->id_user= $user->id;
            $pesanan->title_image= $product->title;
            $pesanan->image_watermark= $product->image_watermark;
            $pesanan->image_original= $product->image_original;
            $pesanan->total_harga= $product->price;
            $pesanan->tanggal_pesanan= $tanggalPesanan;
            $pesanan->status= $request->status;
            $pesanan->save();

            return redirect('/history')->with('checkout', 'Silahkan Melakukan Pembayaran!');
        }
        else {
            return redirect('/login');
        }
    }



    // public function upload(Request $request, $id){
    //     if(Auth::id()){
    //     $user =auth()->user();
    //     $pesanan = Pesanan::find($id);
    //     $pembayaran = new Pembayaran;
    //     $tanggalPembayaran= Carbon::now();

    //     if ($request->hasFile('photo')) {
    //         $image  = $request->file('photo');
    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move(public_path('assets/bukti_pembayaran'), $imageName);

    //         // Lakukan hal-hal lain yang diperlukan, misalnya menyimpan nama gambar ke database
    //         // ...
          
    //         $pembayaran->bukti_pembayaran= $imageName;
    //         $pembayaran->id_user= $user->id;
    //         $pembayaran->id_pesanan= $pesanan->id_pesanan;
    //         $pembayaran->atas_nama= $request->atas_nama;
    //         $pembayaran->bank= $request->bank;
    //         $pembayaran->tanggal_pembayaran= $tanggalPembayaran;
    //         $pesanan->status= $request->status;
    //         $pembayaran->save();
    //         $pesanan->save();
            
    //         return redirect('/home');
    //     }

    //     return "Gagal mengunggah gambar.";
    // }
    // }
}

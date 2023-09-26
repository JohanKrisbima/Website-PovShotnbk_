<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Http\Requests\StorePembayaranRequest;
use App\Http\Requests\UpdatePembayaranRequest;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PembayaranController extends Controller
{  
    public function bayar(Pesanan $pesanan){
        return view('pembayaran.index', [
            'title' => 'Pembayaran',
            'pesanan' => $pesanan
        ]);
    }
    public function upload(Request $request, $id){
        if(Auth::id()){
                if ($request->hasFile('photo')) {
                    $user =auth()->user();
                    $pesanan = Pesanan::find($id);
                    $pembayaran = new Pembayaran;
                    $tanggalPembayaran= Carbon::now();
                    $image  = $request->file('photo');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/bukti_pembayaran'), $imageName);
        
                    // Lakukan hal-hal lain yang diperlukan, misalnya menyimpan nama gambar ke database
                    // ...
                  
                    $pembayaran->bukti_pembayaran= $imageName;
                    $pembayaran->id_user= $user->id;
                    $pembayaran->id_pesanan= $pesanan->id;
                    $pembayaran->atas_nama= $request->atas_nama;
                    $pembayaran->bank= $request->bank;
                    $pembayaran->tanggal_pembayaran= $tanggalPembayaran;
                    $pesanan->status= $request->status;
                    $pembayaran->save();
                    $pesanan->update();
                    
                    return redirect('/history')->with('message', 'Pembayaran Berhasil');
                }
        
                return redirect('/history')->with('message', 'Pembayaran Gagal');
     }    
    }
}

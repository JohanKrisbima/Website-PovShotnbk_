@extends('layouts.tamplate')

@section('container')

<main id="main" style="margin-top: 15vh; margin-bottom: 10vh">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/history" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <form action="/upload/{{ $pesanan->id }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="Menunggu Konfirmasi" name="status">
                        <div class="card-body">
                            <h3><i class="fa fa-shopping-cart"></i>Silahkan Lakukan Pembayaran Anda</h3>
                            <br>
                            <p style="font-weight: bold">NO.Pesanan {{ $pesanan->id}}</p>
                            <p style="font-weight: bold">Pembayaran yang perlu diselesaikan : Rp. {{ number_format($pesanan->total_harga) }}</p>
                        
                            
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Nama Pemilik Rekening Bank</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="atas_nama" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Transfer Dari Bank</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="bank" required>
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01">Upload Bukti Pembayaran</label>
                                <input type="file" class="form-control" id="inputGroupFile01" name="photo" required accept=".jpg, .jpeg, .png">
                            </div>
                            <div class="button">
                                <input class="btn btn-primary" type="submit" value="Submit" onclick="return confirm('Apakah semua data yang anda inputkan sudah benar ?');">
                            </div>
                        
                            <br>    
                            
                            <strong class="text-danger">Peringatan!</strong>
                            <p class="text-danger">1. Lakukan pembayaran sejumlah yang tertera diatas ke nomer rekening 633021929 a/n Mohammad Anvarul Fauzi..</p>
                            <p class="text-danger">2. Segera upload bukti pembayaran melakukan pemesanan.</p>
                            <p class="text-danger">3. Upload bukti pembayaran berupa screenshoot atau foto slip pembayaran.</p>
                            <p class="text-danger">4. Pastikan status pesanan Anda berubah setelah melakukan konfirmasi pembayaran.</p>
                            
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</main>

@endsection
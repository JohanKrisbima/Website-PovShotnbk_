@if(session()->has('checkout'))
<script>alert('Silahkan Lakukan Pembayaran!')</script>
@endif

@if(session()->has('message'))
<script>alert('Pembayaran Berhasil')</script>
@endif

@extends('layouts.tamplate')

@section('container')

<main id="main" style="margin-top: 15vh; margin-bottom: 10vh">
    
  <div class="container">
   
      <div class="row">
          <div class="col-md-12">
              <a href="/home" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
          </div>
          <div class="col-md-12 mt-2">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/home">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">History</li>
                  </ol>
              </nav>
          </div>
          <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
                      <h3><i class="fa fa-shopping-cart"></i>History Pesanan Anda</h3>
                      <br>
                     
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                <th style="text-align: center">No.</th>
                                <th style="text-align: center">Foto</th>
                                <th style="text-align: center">Title Photo</th>
                                <th style="text-align: center">Harga</th>
                                <th style="text-align: center">Status</th> 
                                <th style="text-align: center">Tanggal Pemesanan</th> 
                                <th style="text-align: center">Aksi</th> 
                                  
                                  
                              </tr>
                          </thead>
                          <tbody>
                             
                                  <?php $no=0;?>
                                  @forelse ($pesanan as $order)
                                  <?php $no++;?>
                                  <tr>
                                    <th scope="row" style="text-align: center">{{ $no }}</th>
                                    <td style="display: flex; justify-content: center"><img src="{{ asset('assets/image_watermark/'.$order->image_watermark) }}" alt="" height="100px"></td>
                                    <td style="text-align: center">{{ $order->title_image }}</td>
                                    <td style="text-align: center">Rp. {{ number_format($order->total_harga) }}</td>
                                    <td style="text-align: center">{{ $order->status }}</td>
                                    <td style="text-align: center">{{ $order->tanggal_pesanan }}</td>
                                    
                                      @if ($order->status == 'Sedang Menunggu Pembayaran')
                                      <td ><a href="/pembayaran/{{ $order->id }}" style="display: flex; justify-content: center"><button type="button" class="btn btn-primary">Pembayaran</button></a></td>
                                      @elseif($order->status == 'Menunggu Konfirmasi')
                                     <td><div class="loading-container">
                                        <div class="loader"></div>
                                      </div></td>
                                      @elseif($order->status == 'Dibatalkan Oleh Admin')
                                      <td></td>
                                      @else
                                      <td><a href="{{ route('download.photo', ['image_original' => $order->image_original]) }}" style="display: flex; justify-content: center"><button type="button" class="btn btn-primary">Download</button></a></td>
                                      @endif                 
                                  </tr>
                                  @empty
                                  

                                  @endforelse
                                 
                      </table>
                      {{-- @endif --}}
                  </div>
              </div>
          </div>
          
      </div>
  </div>

  </main>

@endsection
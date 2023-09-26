@extends('layouts.tamplate')

@section('container')
<main id="main" style="margin-top: 15vh; margin-bottom: 10vh">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/detail/{{ $product->id }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fa-shopping-cart"></i> Check Out</h3>
                        <br>
                        {{-- @if(!empty($pesanan)) --}}
                        <ul>
                            <li style="list-style:none"> <p align="left">Nama Pelanggan : {{ Auth::user()->name }}</p></li>
                            <li style="list-style:none"><p align="left">Nomer Telepon : {{ Auth::user()->telpon }}</p></li>
                        </ul>
                        {{-- <p align="left">Tanggal Pesan : </p>
                        <p align="right">Tanggal Pesan : </p> --}}
                        {{-- {{ $pesanan->tanggal }} --}}
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Title Photo</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    
                                    {{-- <th>Aksi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <form action="/history/{{ $product->id }}" method="POST">
                                    @csrf
                                    <tr>
                                        <input type="hidden" value="Sedang Menunggu Pembayaran" name="status">
                                        <td>
                                            <img src="{{ asset('assets/image_watermark/'.$product->image_watermark) }}" width="100" alt="foto tidak ada">
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td> {!! nl2br(e($product->description)) !!}</td>
                                        <td >Rp. {{ number_format($product->price) }}</td>
                                    
                                        {{-- <td>
                                            <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                    {{-- @endforeach --}}
                                    <tr>
                                        <td colspan="5" ><strong>Harga Yang Harus Dibayarkan: Rp. {{ number_format($product->price) }}</strong></td>
                                        {{-- <td ><strong>Rp. Harga</strong></td> --}}
                                        
                                    </tr>
                                    <tr>
                                        <td colspan="5" >
                                            <input class="btn btn-primary" type="submit" value="Buy" onclick="return confirm('Anda yakin akan Check Out ?');">
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                        {{-- @endif --}}
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    </main>
@endsection
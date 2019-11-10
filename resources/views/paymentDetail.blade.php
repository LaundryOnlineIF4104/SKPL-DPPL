@extends('layout.default')

@section('title', 'Payment Detail | On-Laundry')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/paymentdetail.css')}}"> 
@endsection

@section('content')
    <section class="detailpembayaran">
        <div class="container">
            <h1 style="color: #2b3990;">Detail Pembayaran</h1>
            <div class="row">
                <div class="col col-border" style="/*border-left: 1px solid red;*/">
                    <div class="card">
                        <div class="card-body" style="border : 1px solid #2b3990">
                            <div>
                                <h4 style="color: #2b3990;">Jenis Laundry</h4>
                                <p>{{$order->jenis_laundry}}</p>
                                <h4 style="color: #2b3990;">Berat Laundry</h4>
                                <p>{{$order->berat}} kg</p>
                                <h4 style="color: #2b3990;">Total Tagihan</h4>
                                <p>Rp.{{$payments->total_harga}}</p>
                                <h4 style="color: #2b3990;">Metode Pembayaran</h4>
                                <p>{{$payments->metode_pembayaran}}</p>
                                <section></section>
                                @if($payments->metode_pembayaran != 'Cash')
                                    <div class="col col-border" style="border-left: 1px solid #2b3990;border-right: 1px solid #2b3990;border-top: 1px solid #2b3990;border-bottom: 1px solid #2b3990;border-radius: 15px;">
                                        <h4 style="color: #2b3990;">Kirim ke No. Rekening</h4>
                                        <p>BNI a/n Yulian Andyka 4080001234</p>
                                        <h4 style="color: #2b3990;">Segera Bayar Sebelum</h4>
                                        <p>{{$payments->created_at}}</p>
                                    </div>                                
                                @endif                                
                            </div>
                            <hr style="background-color: #2b3990;">
                            <a class="btn btn-link" id="back-btn" style="background-color: #2b3990;" href="{{ url('/order') }}">KEMBALI</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
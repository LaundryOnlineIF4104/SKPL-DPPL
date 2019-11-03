@extends('layout.default')

@section('title', 'Payment | On-Laundry')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/payment.css')}}"> 
@endsection

@section('content')
<section class="payment-section">
    <div class="container">
        <h1 style="color: #2b3990;">Pembayaran</h1>
        <div class="row">
            <div class="col offset-lg-0">
                <div class="card">
                    <div class="card-body float-right">
                        <div>
                            <h2 style="color: #2b3990;">Total Tagihan&nbsp;</h2>
                        <h4 style="color: #2b3990;">Rp.{{($order->price) * ($order->berat)}}</h4>
                        </div>
                        <hr style="background-color: #2b3990;">
                        <div>
                                <h2 style="color: #2b3990;">Berat Laundry</h2>
                            <h4 style="color: #2b3990;">{{$order->berat}} kg</h4>
                            </div>
                            <hr style="background-color: #2b3990;">
                        <h2 style="color: #2b3990;">Pilih Jenis Pembayaran</h2>
                        <section>
                            <form method="POST" action="/payment">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-muted card-subtitle mb-1" style="margin-top: 5px;">Bayar ditempat</h5>
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-1" name="metodepembayaran" value="Cash"><label class="custom-control-label" for="formCheck-1">Cash</label></div>
                                        <h5 class="text-muted card-subtitle mb-1" style="margin-top: 10px;">Transfer Bank</h5>
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-2" name="metodepembayaran" value="Transfer Bank"><label class="custom-control-label" for="formCheck-2">BNI</label></div>
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-3" name="metodepembayaran" value="Transfer Bank"><label class="custom-control-label" for="formCheck-3">BRI</label></div>
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-5" name="metodepembayaran" value="Transfer Bank"><label class="custom-control-label" for="formCheck-5">Mandiri</label></div>
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-4" name="metodepembayaran" value="Transfer Bank"><label class="custom-control-label" for="formCheck-4">Muamalat</label></div>
                                    </div>
                                    <div class="col col-border" style="border-left: 1px solid #2b3990;border-right: 1px solid #2b3990;border-top: 1px solid #2b3990;border-bottom: 1px solid #2b3990;border-radius: 15px;">
                                        <h4 style="color: #2b3990;">Transfer Bank</h4>
                                        <h5 class="text-muted card-subtitle" style="color: #2b3990;">No. Rekening</h5><input type="text" style="margin-top: 10px;width: 400px;">
                                        <h5 class="text-muted card-subtitle" style="margin-top: 10px;">Nama Pemilik Rekening</h5>
                                        <p></p><input type="text" style="margin-top: 10px;width: 400px;">
                                    </div>
                                </div>
                                <hr style="background-color: #2b3990;">
                                <input id="order_id" name="order_id" type="hidden" value={{$order->id}}>
                                <input id="total_harga" name="total_harga" type="hidden" value={{($order->price) * ($order->berat)}}>
                                <input id="jenislaundry" name="jenis_laundry" type="hidden" value={{($order->jenis_laundry)}}>
                                <input class="btn btn-primary btn float-right" id="btn-bayar" type="submit" name="bayar" value="BAYAR">
                            </form>
                        </section>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
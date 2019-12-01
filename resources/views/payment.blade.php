@extends('layout.default')

@section('title', 'Payment | On-Laundry')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/payment.css')}}"> 
@endsection

@section('content')
<section class="payment-section">
    <div class="container">
        <h1 style="color: #2b3990;">Pembayaran</h1>
            @if(count($errors))
                <div class="row">
                    <div class="alert alert-danger">
                        <strong>Oops!</strong> Ada kesalahan yang terjadi.
                        <br/>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
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
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-1" name="metodepembayaran" value="Cash" required><label class="custom-control-label" for="formCheck-1">Cash</label></div>
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-2" name="metodepembayaran" value="Transfer Bank" required><label class="custom-control-label" for="formCheck-2">Transfer Bank</label></div>                                        
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
@extends('layout.default')

@section('title', 'Order Progress | On-Laundry')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/progressOrder.css')}}"> 
@endsection

@section('content')        
    <section class="progressOrder">
        <div class="container">
            <h1 class="text-center" style="color: #2b3990;">Proses Pemesanan</h1>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="progress" style="background-color: white;height: 25px;">
                        <div class="progress-bar bg-info" aria-valuenow="{{($orders->proses) * 25}}" aria-valuemin="0" aria-valuemax="100" style="width: {{($orders->proses) * 25}}%;">{{($orders->proses) * 25}}%</div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <div class="progressOrder">
        <div class="container ">
            <div class="row">
                <div class="col-md-3 text-center order-1" style="border: 1px solid #2b3990;"><i class="fa fa-truck" style="font-size: 100px;"></i>
                    <h5 class="col-border">&nbsp;Laundry dijemput</h5>
                </div>
                <div class="col-md-3 text-center order-2" style="border: 1px solid #2b3990;"><i class="fa fa-balance-scale" style="font-size: 100px;"></i>
                    <h5 class="col-border">&nbsp;Laundry ditimbang</h5>
                </div>
                <div class="col-md-3 text-center order-3" style="border: 1px solid #2b3990;"><i class="fa fa-hourglass-half" style="font-size: 100px;"></i>
                    <h5 class="col-border">&nbsp;Laundry diproses</h5>
                </div>
                <div class="col-md-3 text-center order-4" style="border: 1px solid #2b3990;"><i class="fa fa-send" style="font-size: 100px;"></i>
                    <h5 class="col-border">&nbsp;Laundry diantar</h5>
                </div>
            </div>
            <hr>
            
            @if($orders->proses > 1)
                @if($payment == NULL)                    
                        <div class="btn-payment text-center">
                            <a class="btn btn-primary" id="btn-pilih" style="background-color: #2b3990;" href="{{ url('/payment') }}">PILIH PEMBAYARAN</a>
                        </div>                    
                @endif
            @endif
            
            @if($payment != NULL)                
                    <div class="btn-payment text-center">
                        <a class="btn btn-primary" id="btn-pilih" style="background-color: #2b3990;" href="{{ url('/detailpayment') }}">DETAIL PEMBAYARAN</a>
                    </div>                
            @endif            

            @if($orders->proses == 1)
                <div class="btn-payment text-center">
                    <a class="btn btn-primary" id="btn-pilih" style="background-color: #2b3990;" href="{{ url('/order') }}">REFRESH</a>
                </div>
            @endif

        </div>
    </div>
@endsection
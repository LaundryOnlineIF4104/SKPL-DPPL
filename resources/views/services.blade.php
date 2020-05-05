@extends('layout.default')

@section('title', 'Tentang Kami | On-Laundry')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/services.css')}}">
@endsection

@section('content')
    <section class="services">
        <div class="container">
            <h1 class="text-center sectiontitle">LAYANAN KAMI</h1>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="serviceBox"><img class="rounded-circle img-fluid border d-block mx-auto" src="images/drycleaning.jpg" width="300px">
                        <h3 class="text-center serviceName" style="color: #2b3990;">REGULAR LAUNDRY</h3>
                        <p class="text-justify">On-Laundry menyediakan jasa cuci laundry menggunakan pewangi dan deterjen yang berkualitas sehingga pakaian menjadi lebih bersih.<br><br><br><br><br></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="serviceBox pink"><img class="rounded-circle img-fluid border d-block mx-auto" src="images/premiumcleaning.jpg" width="300px">
                        <h3 class="text-center serviceName" style="color: #2b3990;">PREMIUM LAUNDRY</h3>
                        <p class="text-justify">On-Laundry menyediakan jasa cuci dengan menggunakan teknologi dry cleaning atau mencuci menggunakan bahan berkualitas sehingga pakaian akan terasa lebih bersih,wangi dan juga lembut.&nbsp;<br></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="serviceBox blue"><img class="rounded-circle img-fluid border d-block mx-auto" src="images/delivery.jpg" width="333px">
                        <h3 class="text-center serviceName" style="color: #2b3990;">DELIVERY</h3>
                        <p class="text-justify">On-laundry menyediakan jasa antar jemput oleh kurir sehingga mempermudah para pelanggan dalam melakukan pencucian.<br><br><br><br><br><br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

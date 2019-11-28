@extends('layout.default')

@section('title', 'Tentang Kami | On-Laundry')

@section('css')    
    <link rel="stylesheet" href="{{ asset('/css/aboutus.css')}}"> 
@endsection

@section('content')
    <div class="container aboutus"><img class="d-block mx-auto logoimg" src="images/Logo On Laundry.png">        
        <p class="text-justify description">Onlaundry adalah penyedia jasa laundry berbasis website yang aman dan terpercaya yang memberikan kenyamanan dan kemudahan kepada pelanggan saat melakukan laundry.<br><br>Situs ini pertama kali dibuat pada pertengahan tahun 2019 oleh mahasiswa
            Telkom University. Pengalaman kurang menyenangkan yang didapat ketika melakukan laundry secara konvensional banyak sekali terjadi dan dirasa kurang praktis hal tersebutlah, yang melatar belakangi visi Onlaundry untuk menyediakan jasa laundry
            secara online yang aman bagi semua orang. <br><br>Dengan bertransaksi dengan Onlaundry, kita turut berperan dalam menciptakan perkembangan bisnis yang semakin maju dan modern.<br><br></p>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-left my-4" style="color: #2b3990;">Our Team</h2>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 text-center"><img class="rounded-circle img-fluid border d-block mx-auto" src="images/PROFILE.png" width="200" height="200">
                <h4 class="m-0" style="color: #212529;">Gabriel Almayda</h4>
                <h5 class="my-1">1301170398</h5>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 text-center"><img class="rounded-circle img-fluid border d-block mx-auto" src="images/PROFILE.png" width="200" height="200">
                <h4 class="m-0" style="color: #2b3990;">Rafie Afif A</h4>
                <h5 class="my-1">1301173341</h5>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 text-center"><img class="rounded-circle img-fluid border d-block mx-auto" src="images/PROFILE.png" width="200" height="200">
                <h4 class="m-0" style="color: #2b3990;">Yulian Andyka</h4>
                <h5 class="my-1">1301173357</h5>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 text-center"><img class="rounded-circle img-fluid border d-block mx-auto" src="images/PROFILE.png" width="200" height="200">
                <h4 class="m-0" style="color: #2b3990;">M.Alkahfi K.A</h4>
                <h5 class="my-1">1301174048</h5>
            </div>
        </div>
    </div>
@endsection
@extends('layout.default')

@section('title', 'On-Laundry')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/home.css')}}"> 
@endsection

@section('content')
  <!-- HEADER -->
	        <section id="header" class="section">
            <div class="container">              
              <div class="row">
                
                <div class="col-sm-6 wow fadeInLeft img-header">
                    <img src="images/Logo On Laundry.png" width="250" height="288" alt=""/>            
                </div>
              
                <div class="col-sm-6 wow fadeInRight header-text">
                <h1><strong>On-Laundry</strong></h1>			 
                  <h3>Jasa Laundry terbaik di Telkom University!</h3>
                  
                  <br />            
                  <br />
                  <a href="{{ url('/order') }}" class="btn btn-primary header-btn btn-lg">Order Now</a>
                </div>
      
              </div>
            </div>
          </section>
           
          <!-- MAIN 1 -->
          <section class="section">
            <div class="container">
              <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                  <h2 class="text-center justify-content-center"><strong>Mengapa On-Laundry?</strong></h2>
                  <p></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="service wow fadeInUp faster">
                    <span class="service-icon">
                      <span class="flaticon-time-and-date"></span>
                    </span>
                    <div class="service-contents">
                      <h3>Layanan 24 Jam</h3>
                      <p>Nikmati pelayanan terbaik dan berkualitas dari On-Laundry setiap saat.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="service wow fadeInUp fast">
                    <span class="service-icon">
                      <span class="flaticon-payment"></span>
                    </span>
                    <div class="service-contents">
                      <h3>Harga Terjangkau</h3>
                      <p>Semua layanan kami mempunyai harga yang tetap dan terjangkau.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="service wow fadeInUp">
                    <span class="service-icon">
                      <span class="flaticon-wallet"></span>
                    </span>
                    <div class="service-contents">
                      <h3>Pembayaran Mudah</h3>
                      <p>Kami menerima pembayaran melalui tunai dan transfer untuk memudahkan pembayaran.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
            
          <!-- MAIN 2 -->
          <section class="section" id="main2">
              <div class="container">
                  <div class="row justify-content-center text-center">
                    <div class="col-7 text-center mb-5">
                      <h2 class="text-center justify-content-center"><strong>Layanan Utama Kami</strong></h2>
                      <p></p>
                    </div>
                  </div>
                  <div class="services-tab wow fadeIn">
                      <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link tab-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                  
                                  <h6>Dry Cleaning</h6>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link tab-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                               aria-selected="false">
                              
                               <h6>Premium Cleaning</h6>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link tab-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                               aria-selected="false">
                               
                               <h6>Delivery</h6>
                              </a>
                          </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <div class="row align-items-center">
                                  <div class="col-lg-5">
                                      <div class="side-text">								
                                          <h3>Dry Cleaning</h3>
                                          <p>On-Laundry menyediakan jasa laundry untuk pakaian sehari-hari.</p>
                                          <ul>
                                              <li>Cuci-Setrika-Lipat</li>
                                              <li>Cuci Satuan</li>
                                              <li>Laundry Sprei dan Sarung Bantal</li>
                                          </ul>
                                          <a href="{{ url('/services') }}" class="btn btn-primary header-btn btn-lg">Learn More</a>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 offset-xl-1">
                                      <div class="tab-img"><strong><img src="images/drycleaning.jpg" width="350" height="234" alt=""/></strong>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="row align-items-center">
                                  <div class="col-lg-5">
                                      <div class="side-text">									
                                          <h3>Premium Cleaning</h3>
                                          <p>On-Laundry melayani service laundry premium untuk jas, gaun, kebaya, sepatu yang diproses secara manual tanpa mesin cuci.</p>
                                          <ul>
                                              <li>Laundry Sepatu</li>
                                              <li>Laundry Jas</li>									
                                              <li>Laundry Gaun</li>
                                          </ul>
                                          <a href="{{ url('/services') }}" class="btn btn-primary header-btn btn-lg">Learn More</a>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 offset-xl-1">
                                      <div class="tab-img offset-xl-0"><img src="images/premiumcleaning.jpg" width="350" height="234" alt=""/>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              <div class="row align-items-center">
                                  <div class="col-lg-5">
                                      <div class="side-text">									
                                          <h3>Delivery</h3>
                                          <p>On-Laundry menyediakan jasa Delivery untuk pengambilan laundry dan pengantaran laundry.</p>
                                          <a href="{{ url('/services') }}" class="btn btn-primary header-btn btn-lg">Learn More</a>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 offset-xl-1">
                                      <div class="tab-img offset-xl-0">
                                          <img src="images/delivery.jpg" width="350" height="234" alt=""/>									
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
@endsection
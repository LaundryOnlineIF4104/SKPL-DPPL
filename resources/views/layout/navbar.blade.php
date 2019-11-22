    <nav class="navbar navbar-light navbar-expand-md border rounded-0">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/services') }}">LAYANAN</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/aboutus') }}">TENTANG KAMI</a></li>
                </ul><a class="navbar-brand text-center ml-auto" href="{{ url('/') }}"><img class="img-fluid nav-logo" src="{{ asset('images/Logo On Laundry.png')}}"></a>
                <ul class="nav navbar-nav ml-auto">
                    @if(Session::get('tipe') == 3)
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/order') }}">ORDER</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/profile') }}">PROFIL</a></li> 
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/logout') }}">LOGOUT</a></li>       
                    @elseif(Session::get('tipe') == 2)                                 
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/orderList') }}">DAFTAR PEMESANAN</a></li> 
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/profile') }}">PROFIL</a></li> 
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/logout') }}">LOGOUT</a></li>
                    @elseif(Session::get('tipe') == 1)
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/salesReport') }}">DATA PENJUALAN</a></li> 
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/profile') }}">PROFIL</a></li> 
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/logout') }}">LOGOUT</a></li>
                    @else
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/login') }}">LOGIN/REGISTER</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
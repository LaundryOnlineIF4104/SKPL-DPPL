@extends('layout.default')

@section('title', 'Edit Pemesanan | On-Laundry')

@section('css')    
    <link rel="stylesheet" href="{{ asset('/css/editOrder.css')}}"> 
@endsection

@section('content')
    <section class="content">
        <div class="container">
            <h1>Edit Pemesanan</h1>
            
            @if(count($errors))
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Ada kesalahan yang terjadi.
                    <br/>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <hr>
            <div class="card" style="width: auto;">
                <div class="card-body">
                    <form method="POST" action="/editOrder/update">
                        @csrf
                        <h5 class="text-muted card-subtitle mb-2">ID Pemesanan</h5><input type="text" style="margin-bottom: 15px;width: 350px;" readonly="" name="id" value="{{$order->id}}" required>
                    <h5 class="text-muted card-subtitle mb-2">Nama Lengkap</h5><input type="text" style="margin-bottom: 15px;width: 350px;" name="nama" value="{{$order->nama}}" required>
                        <h5 class="text-muted card-subtitle mb-2">Alamat</h5><textarea cols="50" rows="5" required="" style="margin-bottom: 15px;" name="alamat">{{$order->alamat}}</textarea>
                        <h5 class="text-muted card-subtitle mb-2">Jenis Laundry</h5>
                        <section style="height: 40px;">
                                <div class="row">
                                        @foreach ($services as $service)
                                            <div class="col">
                                            <div class="custom-control custom-radio"><input @if($order->jenis_laundry == $service->jenis_laundry) checked @endif class="custom-control-input" name="jenislaundry" type="radio" value="{{$service->id}}" id="formCheck-{{$loop->iteration}}" required><label class="custom-control-label" for="formCheck-{{$loop->iteration}}">{{$service->jenis_laundry}}</label></div>
                                            </div>
                                        @endforeach                                                                
                                </div>
                        </section>
                        <h5 class="text-muted card-subtitle mb-2">Parfum</h5>
                        <div class="dropdown" style="margin-bottom: 15px;">
                                <select name="parfum" id="parfum" required>
                                    <option value="X" @if($order->parfum == 'X') selected @endif>Parfum X</option>
                                    <option value="Y" @if($order->parfum == 'Y') selected @endif>Parfum Y</option>
                                    <option value="Z" @if($order->parfum == 'Z') selected @endif>Parfum Z</option>
                                </select>
                        </div>
                        <h5 class="text-muted card-subtitle mb-2">Berat</h5>
                        <div style="margin-bottom: 15px;"><input type="number" name="berat" min="0" required value="{{$order->berat}}" required></div>
                        <h5 class="text-muted card-subtitle mb-2">Proses</h5>
                        <div class="dropdown" style="margin-bottom: 15px;">
                                <select name="proses" id="proses" required>
                                        <option value="1" @if($order->proses == '1') selected @endif>Penjemputan Laundry</option>
                                        <option value="2" @if($order->proses == '2') selected @endif>Penimbangan Laundry</option>
                                        <option value="3" @if($order->proses == '3') selected @endif>Pencucian Laundry</option>
                                        <option value="4" @if($order->proses == '4') selected @endif>Pengantaran Laundry</option>
                                </select>    
                        </div>                                                                                              
                        <hr><button class="btn float-right" id="btn-lanjut" type="submit" style="margin-top: 15px;">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
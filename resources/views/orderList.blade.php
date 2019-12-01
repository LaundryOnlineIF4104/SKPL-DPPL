@extends('layout.default')

@section('title', 'Edit Pemesanan | On-Laundry')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('/css/orderList.css')}}"> 
@endsection

@section('content')
<section class="content">
    <div class="container">

        @if(Session::has('alert-success'))
            <div class="alert alert-success">
                <div>{{Session::get('alert-success')}}</div>
            </div>
        @endif
        
        <h1 style="color: #2b3990;" id="heading">Edit Pemesanan</h1>    
        <div class="table table-responsive">
            <table class="table" id="tabelPemesanan">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">ID Pemesanan</th>
                        <th class="text-center">Nama Lengkap</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Nomor Telepon</th>
                        <th class="text-center">Jenis Laundry</th>
                        <th class="text-center">Parfum</th>
                        <th class="text-center">Berat</th>
                        <th class="text-center">Metode Pembayaran</th>
                        <th class="text-center">Total Harga</th>
                        <th class="text-center">Proses</th>                        
                        <th class="text-center">Status Laundry</th>
                        <th class="text-center">Status Lunas</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $key => $data)
                    <tr>
                        <td class="text-center nomor">{{$loop->iteration}}</td>
                        <td class="text-center">{{$data->id}}</td>
                        <td class="text-center">{{$data->nama}}</td>
                        <td class="text-center">{{$data->alamat}}</td>
                        <td class="text-center">{{$data->notelp}}</td>
                        <td class="text-center">{{$data->jenis_laundry}}</td>
                        <td class="text-center">{{$data->parfum}}</td>
                        <td class="text-center">
                            @if($data->berat == NULL)
                                Belum Ditimbang
                            @elseif($data->berat != NULL)
                                {{$data->berat}}
                            @else
                                Tidak Valid
                            @endif
                        </td>
                        <td class="text-center">
                            @if($data->metode_pembayaran == NULL)
                                Belum Ada
                            @elseif($data->metode_pembayaran != NULL)
                                {{$data->metode_pembayaran}}
                            @else
                                Tidak Valid
                            @endif
                        </td>
                        <td class="text-center">
                            @if($data->total_harga == NULL)
                                Belum Ada
                            @elseif($data->total_harga != NULL)
                               {{$data->total_harga}}
                            @else
                                Tidak Valid
                            @endif    
                        </td>                                                
                        <td class="text-center">
                            @if($data->proses == 1)
                                Penjemputan Laundry
                            @elseif($data->proses == 2)
                                Penimbangan Laundry
                            @elseif($data->proses == 3)
                                Pencucian Laundry
                            @elseif($data->proses == 4)
                                Pengantaran Laundry
                            @else
                                Tidak Valid
                            @endif
                        </td>                    
                        <td class="text-center">
                            @if($data->active == 1)
                                Belum Selesai
                            @elseif($data->active == 0)
                                Selesai
                            @else
                                Tidak Valid
                            @endif
                        </td>
                        <td class="text-center">
                            @if($data->paid == 1)
                                Lunas
                            @elseif($data->paid == 0)
                                Belum Lunas
                            @else
                                Tidak Valid
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                @if($data->active == 1)
                                    <a class="btn btn-primary statusBtn" type="button" style="background-color: #0bea14);color: black;" href="deactivateOrder/{{$data->id}}" onclick="return confirm('Selesaikan Pesanan?')"><i class="fa fa-check" aria-hidden="true"></i></a>
                                @endif
                                <a class="btn btn-primary editBtn" type="button" style="margin-left: 20px;background-color: #e8d900;color: #000000;" href="/editOrder/{{$data->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a class="btn btn-primary deleteBtn" type="button" style="margin-left: 20px;background-color: rgb(215,24,12);color: black;" href="/deleteOrder/{{$data->id}}" onclick="return confirm('Hapus Pesanan?')"><i class="fa fa-trash" aria-hidden="true"></i></a>                                
                                @if($data->paid == 0)
                                    <a class="btn btn-primary paidBtn" type="button" style="margin-left: 20px;background-color: #85bb65;color: black;" href="/paidOrder/{{$data->id}}" onclick="return confirm('Set Pesanan menjadi Lunas?')"><i class="fa fa-money" aria-hidden="true"></i></a>                                
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function(){
        $('#tabelPemesanan').DataTable();
    });    
</script>
@endsection
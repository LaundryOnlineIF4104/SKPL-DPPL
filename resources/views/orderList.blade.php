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
                        <th class="text-center">Jenis Laundry</th>
                        <th class="text-center">Parfum</th>
                        <th class="text-center">Berat</th>
                        <th class="text-center">Proses</th>
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
                        <td class="text-center">{{$data->jenis_laundry}}</td>
                        <td class="text-center">{{$data->parfum}}</td>
                        <td class="text-center">{{$data->berat}}</td>
                        <td class="text-center">{{$data->proses}}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a class="btn btn-primary editBtn" type="button" style="background-color: #0bea14;color: #000000;" href="/editOrder/{{$data->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a class="btn btn-primary deleteBtn" type="button" style="margin-left: 20px;background-color: rgb(215,24,12);color: black;" href="{{ url('/deleteOrder') }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

    $(".editBtn").click(function() {
        var $row = $(this).closest("tr");    // Find the row
        var $tds = $row.find("td");
        $.each($tds, function() {
            var $data = $(this);
            console.log($data.text());
        });    
    });
</script>
@endsection
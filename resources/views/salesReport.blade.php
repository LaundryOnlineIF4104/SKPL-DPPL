@extends('layout.default')

@section('title', 'Laporan Penjualan | On-Laundry')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('/css/salesReport.css')}}"> 
@endsection

@section('content')   
    <div class="container reportContainer">
        @if(Session::has('alert'))
            <div class="alert alert-danger">
                <div>{{Session::get('alert')}}</div>
            </div>
        @endif
        <div style="margin-bottom: 50px;">
            <h1 style="color: #2b3990;">Laporan Penjualan</h1>
            <hr style="color: #2b3990;">
            <form method="POST" action="/postReport">
                @csrf
                <div style="margin-bottom: 5px;">
                    <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-1" name="dateRadio" value="1" required><label class="custom-control-label" for="formCheck-1">Semua</label></div>
                    <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-2" name="dateRadio" value="2"><label class="custom-control-label" for="formCheck-2">Date Range</label></div>
                </div>
                <div class="d-inline-block">
                    <label style="margin-bottom: 0px;">Dari Tanggal</label>
                    <input class="form-control" type="date" id="datepick1" name="dateFrom" style="margin-right: 0px;margin-left: 0px;margin-top: 5px;margin-bottom: 5px;" required>
                    <label style="margin-bottom: 0px;">Sampai</label>
                    <input class="form-control" type="date" id="datepick2" name="dateTo" style="margin-right: 0px;margin-left: 0px;margin-top: 5px;margin-bottom: 5px;" required>
                    <button class="btn btnDate" type="submit" style="margin-top: 5px;">GO</button>
                </div>
            </form>
        </div>
        <div style="margin-bottom: 15px;">
            <div class="table table-responsive">
                <table class="table" id="tabelLaporan">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">ID Pemesanan</th>
                            <th class="text-center">ID Pembayaran</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Berat</th>
                            <th class="text-center">Metode Pembayaran</th>                           
                            <th class="text-center">Total Harga</th> 
                            <th class="text-center">Status</th>                                                     
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach($reports as $key => $data)                       
                        <tr>
                            <td class="text-center nomor">{{$loop->iteration}}</td>
                            <td class="text-center">{{$data->order_id}}</td>
                            <td class="text-center">{{$data->payment_id}}</td>
                            <td class="text-center">{{$data->created_at}}</td>
                            <td class="text-center">{{$data->nama}}</td>
                            <td class="text-center">{{$data->berat}}</td>
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
                            @if($data->paid == 0)
                                <td class="text-center">Belum Lunas</td>   
                            @else
                                <td class="text-center">Lunas</td>                                                    
                            @endif
                        </tr>                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <div class="card-group">
                <div class="card border rounded-0 salecard" style="margin-right: 50px;">
                    <div class="card-body">
                        <h2 class="card-title" style="color: #2b3990;">Total Penjualan</h2>
                    <h2 class="text-center card-title" style="color: #2b3990;">Rp.{{$total_penjualan_bersih}}({{$total_penjualan}})</h2>
                    </div>
                </div>
                <div class="card border rounded-0 salecard" style="margin-left: 50px;">
                    <div class="card-body">
                        <h2 class="card-title" style="color: #2b3990;">Jumlah Penjualan</h2>
                    <h2 class="text-center card-title" style="color: #2b3990;">{{count($reports)}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function(){
        $('#tabelLaporan').DataTable();
    });

    $(function(){
        $("#formCheck-1, #formCheck-2").change(function(){
        $("#datepick1 , #datepick2").attr("disabled",true);
        if($("#formCheck-2").is(":checked")){
            $("#datepick1 , #datepick2").removeAttr("disabled");    
            $("#datepick1 , #datepick2").Attr("required", true);         
        }
        else if($("#formCheck-1").is(":checked")){
            $("#datepick1 , #datepick2").Attr("disabled", true);   
            $("#datepick1 , #datepick2").removeAttr("required");          
        }
        });
    });
</script>
@endsection
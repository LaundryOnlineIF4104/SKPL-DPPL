<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Payment;

class ReportsController extends Controller
{
    public function salesReport(){
        if(Session::get('tipe') == '1'){
            $reports = DB::table('orders')
                ->join('payments', 'orders.id', '=', 'payments.order_id')
                ->select('orders.id AS order_id','payments.id AS payment_id', 'orders.created_at','orders.nama','orders.berat', 'payments.metode_pembayaran', 'payments.total_harga', 'payments.paid')
                ->get(); 
            $total_penjualan_bersih = 0;
            $total_penjualan = 0;
            foreach($reports as $data){
                if($data->paid == '1'){
                    $total_penjualan_bersih += $data->total_harga;                    
                }
                else{
                    $total_penjualan += $data->total_harga;
                }                
            }            
            return view('salesReport', compact('reports', 'total_penjualan', 'total_penjualan_bersih'));
        }
        else{
            return view('index');
        }        
    }

    public function postReport(Request $request){     
        if($request->dateRadio == '1'){
            return $this->salesReport();
        }   
        else{            
            $reports = DB::table('orders')
                ->join('payments', 'orders.id', '=', 'payments.order_id')
                ->select('orders.id AS order_id','payments.id AS payment_id', 'orders.created_at','orders.nama','orders.berat', 'payments.metode_pembayaran', 'payments.total_harga', 'payments.paid')
                ->where('orders.created_at','>=',$request->dateFrom)
                ->where('orders.created_at','<=',$request->dateTo)
                ->get();
            $total_penjualan_bersih = 0;
            $total_penjualan = 0;
            foreach($reports as $data){
                if($data->paid == '1'){
                    $total_penjualan_bersih += $data->total_harga;
                    $total_penjualan += $data->total_harga;
                }
                $total_penjualan += $data->total_harga;
            }
            return view('salesReport', compact('reports', 'total_penjualan', 'total_penjualan_bersih'));
        }                
    }
}

<?php

namespace App\Http\Controllers;

use App\Order;
use App\Payment;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(){     
        $order = Order::select('*')->where('user_id','=', Session::get('id'), 'and', 'active', '=', 1)->first();  
        return view('payment', compact('order'));
    }    

    public function detailpayment(){
        $order = Order::select('*')->where('user_id','=', Session::get('id'), 'and', 'active', '=', 1)->first(); 
        $payments = Payment::select('*')->where('order_id', '=', $order->id)->first();
        return view('paymentDetail', compact('payments', 'order'));
    }

    public function postPayment(Request $request){
        $Payment = new Payment();
        $Payment->order_id = $request->order_id;
        $Payment->metode_pembayaran = $request->metodepembayaran;
        $Payment->total_harga = $request->total_harga;
        $Payment->paid = 0;

        $Payment->save();
        
        $order = Order::select('*')->where('id','=', $Payment->order_id, 'and', 'active', '=', 1)->first(); 
        $payments = Payment::select('*')->where('order_id', '=', $order->id)->first();
        return view('paymentDetail', compact('payments','order'));
    }
}

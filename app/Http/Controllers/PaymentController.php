<?php

namespace App\Http\Controllers;

use App\Order;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(){
        $order = Order::where('user_id', Session::get('id'))->where('active','1')->first();
        if($order){
            $payments = Payment::select('*')->where('order_id', '=', $order->id)->first();
            if($payments->metode_pembayaran){
                return view('paymentDetail', compact('payments','order'));
            }
            else{
                return view('payment', compact('order'));
            }
        }
        else{
            return redirect('/order');
        }

    }

    public function detailpayment(){
        $order = Order::where('user_id', Session::get('id'))->where('active','1')->first();
        if($order){
            $payments = Payment::where('order_id',$order->id)->first();
            $payments->created_at = $payments->created_at->addDay();
            return view('paymentDetail', compact('payments', 'order'));
        }
        else{
            return redirect('/');
        }
    }

    public function postPayment(Request $request){
        $this->validate($request,[
            'order_id' => 'required',
            'metodepembayaran' => 'required',
            'total_harga' => 'required|numeric',
        ],[
            'total_harga.required' => ' Total Harga tidak valid.',
            'total_harga.numeric' => ' Total Harga harus numerik.',
            'metodepembayaran.required' => ' Metode Pembayaran harus diisi.',
            'order_id.required' => ' Order ID tidak valid.',
        ]);
        $Order = Order::where('user_id', Session::get('id'))->where('active','1')->first();
        $Payment = Payment::where('order_id',$Order->id)->first();
        $Payment->order_id = $request->order_id;
        $Payment->metode_pembayaran = $request->metodepembayaran;
        $Payment->total_harga = $request->total_harga;
        $Payment->paid = 0;

        $Payment->save();

        $order = Order::where('id', $Payment->order_id)->where('active', '1')->first();
        $payments = Payment::where('order_id', $order->id)->first();
        return view('paymentDetail', compact('payments','order'));
    }
}

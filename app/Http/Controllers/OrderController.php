<?php

namespace App\Http\Controllers;

use App\Service;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //      
    
    public function order(){        
        if(Session::has('id')){            
            $services = Service::all();
            return view('order', compact('services'));
        }
        else
            return view('login');
    }

    public function postOrder(Request $request){      
        $jenislaundry = Service::select('jenis_laundry')->where('id', '=', $request->jenislaundry)->first()->jenis_laundry;  
        $price = Service::select('price')->where('id', '=', $request->jenislaundry)->first()->price;
        $Order = Order::create([
            'user_id' => Session::get('id'),
            'service_id' => $request->jenislaundry,
            'name' => $request->name,
            'jenis_laundry' => $jenislaundry,
            'parfum' => $request->parfum,
            'price' => $price,
            'notelp' => $request->notelp           
        ]);
        return view('payment');
    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function home(){        
        return view('index');
    }

    public function services(){
        return view('services');
    }

    public function aboutus(){
        return view('aboutus');
    }
}

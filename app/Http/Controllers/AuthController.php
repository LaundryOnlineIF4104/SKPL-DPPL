<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        if(Session::has('id')){
            return view('index');
        }
        else{
            return view('login');
        }
    }

    public function postLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email',$email)->first();
        if($user){
            if(Hash::check($password,$user->password)){
                Session::put('id', $user->id);
                Session::put('name', $user->name);
                Session::put('username', $user->username);
                Session::put('email',$user->email);
                Session::put('notelp',$user->notelp);
                Session::put('alamat',$user->alamat);
                Session::put('tipe', $user->tipe);
                Session::put('login',TRUE);
                return redirect('/');
            }
            else{
                return redirect('login')->with('alert','Password Salah!');                
            }
        }
        else{
            return redirect('login')->with('alert','Email tidak ditemukan');                
        }
    }

    public function postRegister(Request $request){
        
        $this->validate($request,[
            'username' => 'required|min:8|max:20',
            'name' => 'required|min:1|max:20',
            'email' => 'required|email|unique:users',
            'notelp' => 'required|min:11|numeric',
            'password' => 'required|min:8|max:20',
            'confirmpass' => 'required|same:password'
        ],[
            'username.required' => ' Field Username tidak boleh kosong.',
            'username.min' => ' Panjang Username harus 8 karakter atau lebih.',
            'username.max' => ' Panjang Username tidak melebihi 20 karakter.',
            'password.required' => ' Field Password tidak boleh kosong.',
            'password.min' => ' Panjang Password harus 8 karakter atau lebih.',
            'password.max' => ' Panjang Password tidak melebihi 20 karakter.', 
            'confirmpass.required' => ' Field Confirm Password tidak boleh kosong.',
            'confirmpass.same' => ' Confirm Password harus sama dengan Password.',          
            'name.required' => ' Field Nama tidak boleh kosong.',
            'name.min' => ' Panjang Nama harus 1 karakter atau lebih.',
            'name.max' => ' Panjang Nama tidak melebihi 20 karakter.',
            'notelp.required' => ' Field Nomor Telepon tidak boleh kosong.',
            'notelp.numeric' => ' Nomor Telepon harus numerik.',
            'notelp.min' => ' Panjang Nomor Telepon harus 11 karakter atau lebih.',            
            'email.unique' => ' Email sudah terdaftar pada database.'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->notelp = $request->notelp;  
        $user->tipe = 3;   
        
        $user->save();

        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
}

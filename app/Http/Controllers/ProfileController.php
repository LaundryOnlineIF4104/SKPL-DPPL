<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('profile');
    }

    public function editProfile(){
        return view('editprofile');
    }

    public function postEditProfile(Request $request){
        $User = User::where('id', Session::get('id'))->update([
            'name' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp          
        ]);        
        if($request->password){
            $this->validate($request,[
                'password' => 'min:8|max:20',
                'confirmpass' => 'same:password'
            ]);
            $User = User::where('id', Session::get('id'))->update([
                'password' => $request->password
            ]);
        }
        Session::put('name', $request->nama);
        Session::put('email',$request->email);
        Session::put('notelp',$request->notelp);
        Session::put('alamat',$request->alamat);
        return redirect('editprofile')->with('alert-success','Profil Berhasil Diubah');
    }
}

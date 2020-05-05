<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use File;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function editProfile(){
        $User = User::where('id', Session::get('id'))->first();
        return view('editprofile', compact('User'));
    }

    public function postEditProfile(Request $request){
        $this->validate($request, [
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(Session::get('id')),
        ]],[
            'email.required' => 'Email harus diisi.',
            'email.unique' => 'Email sudah digunakan oleh user lain.'
        ]);
        $this->validate($request,[
            'nama' => 'required|min:1|max:20',
            'alamat' => 'required|min:8',
            'notelp' => 'required|numeric|min:10',
        ],[
            'nama.required' => 'Nama harus diisi.',
            'nama.max' => 'Nama tidak lebih dari 20 karakter',
            'nama.min' => 'Nama harus lebih dari 1 karakter',
            'alamat.required' => 'Alamat harus diisi.',
            'alamat.min' => 'Alamat harus lebih dari 8 karakter',
            'notelp.required' => 'Nomor Telepon harus diisi.',
            'notelp.numeric' => 'Nomor Telepon harus numerik.',
            'notelp.min' => 'Nomor Telepon harus lebih dari 10 karakter',
        ]);
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
            ],[
                'password.min' => 'Password harus lebih dari 8 karakter.',
                'password.max' => 'Password tidak lebih dari 20 karakter.',
                'confirmpass.same' => 'Confirm Password harus sama dengan Password'
            ]);
            $User = User::where('id', Session::get('id'))->update([
                'password' => bcrypt($request->password)
            ]);
        }
        if($request->file){
            $this->validate($request,[
                'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
            ]);
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
            $User = User::where('id', Session::get('id'))->first();
            if(File::exists('data_file/'.$User->file)){
                File::delete('data_file/'.$User->file);
            }
            $User = User::where('id', Session::get('id'))->update([
                'file' => $nama_file
            ]);
        }
        Session::put('name', $request->nama);
        Session::put('email',$request->email);
        Session::put('notelp',$request->notelp);
        Session::put('alamat',$request->alamat);
        return redirect('editprofile')->with('alert-success','Profil Berhasil Diubah');
    }
}

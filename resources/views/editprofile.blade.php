@extends('layout.default')

@section('title', 'Edit Profile | On-Laundry')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/editprofile.css')}}"> 
@endsection

@section('content')
    <div class="container profile profile-view" id="profile">
        
            @if(count($errors))
            <div class="row">
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Ada kesalahan yang terjadi.
                    <br/>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            
            @if(Session::has('alert-success'))
            <div class="row">
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            </div>
            @endif        
        
        <form method="POST" action="/editprofile">
            @csrf
            <div class="form-row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div>
                    <input type="file" class="form-control" name="fotoprofil">
                </div>
                <div class="col-md-8">
                    <h1 style="color: #2b3990;">Profil</h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color: #2b3990;">Nama Lengkap</label><input class="form-control" type="text" name="nama" value="{{Session::get('name')}}"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label style="color: #2b3990;">Email</label><input class="form-control" type="text" name="email" inputmode="email" value="{{Session::get('email')}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="color: #2b3990;">Alamat</label><textarea class="form-control" style="height: 125px;" name="alamat">{{Session::get('alamat')}}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label style="color: #2b3990;">Nomor Telepon</label><input class="form-control" type="text" inputmode="numeric" name="notelp" value="{{Session::get('notelp')}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label style="color: #2b3990;">Password </label><input class="form-control" type="password" name="password" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label style="color: #2b3990;">Confirm Password</label><input class="form-control" type="password" name="confirmpass" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right">
                            <input type="submit" name="editprofil" class="btn form-btn" value="SIMPAN">
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
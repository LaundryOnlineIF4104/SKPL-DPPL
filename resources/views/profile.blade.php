@extends('layout.default')

@section('title', 'Profile | On-Laundry')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/profile.css')}}"> 
@endsection

@section('content')
<div class="text-center profile-card" style="margin:15px;background-color:#ffffff;">
    <div>
        <h3>{{Session::get('name')}}</h3>
    </div>
    <div class="row" style="padding:0;padding-bottom:10px;padding-top:20px;">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr></tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>{{Session::get('username')}}</td>
                            <td>{{Session::get('email')}}</td>
                        </tr>
                        <tr>
                            <td>{{Session::get('notelp')}}</td>
                            <td>{{Session::get('alamat')}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col"><button class="btn editBtn" type="submit"><a href="{{ url('/editprofile') }}">EDIT PROFIL</a></button></div>
            </div>
        </div>
    </div>
</div>
@endsection
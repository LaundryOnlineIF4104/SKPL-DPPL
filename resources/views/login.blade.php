<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap"> 
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap/bootstrap.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/default.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css')}}">	

</head>
<body>
	
	<div class="login-page">
	  <div class="form">

		@if(count($errors))
			<div class="alert alert-danger">
				<strong>Oops!</strong> Ada kesalahan yang terjadi.
				<br/>
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		@if(Session::has('alert'))
            <div class="alert alert-danger">
                <div>{{Session::get('alert')}}</div>
            </div>
		@endif
		
        @if(Session::has('alert-success'))
            <div class="alert alert-success">
                <div>{{Session::get('alert-success')}}</div>
            </div>
        @endif
		  
		<form class="register-form" method="POST" action="/register">
		  <h1 class="title register-title">Register</h1>
		  {{ csrf_field() }}
		  <input type="name" name="name" placeholder="Nama Lengkap" required/>
		  <input type="username" name="username" placeholder="Username" required/>
		  <input type="password" name="password" placeholder="Password" required/>  
		  <input type="password" name="confirmpass" placeholder="Confirm Password" required/>	     
		  <input type="email" name="email" placeholder="Email Address" required/>
		  <input type="notelp" name="notelp" placeholder="Nomor Telepon" required/>	  
		  <input type="submit" name="register" class="btn register-btn" value="Register">   
		  <p class="message">Already registered? <a href="#">Sign In</a></p>
		</form>
		  
		<form class="login-form" method="POST" action="/login">
		  <h1 class="title login-title">Login</h1>
		  {{ csrf_field() }}		  
		  <input type="email" name="email" placeholder="Email" required/>
		  <input type="password" name="password" placeholder="Password" required/>
		  <input type="submit" name="login" class="btn login-btn" value="Login">  
		  <p class="message">Not registered? <a href="#">Create an account</a></p>
		</form>
		  
	  </div>
	</div>
				
	<script src="{{ URL::asset('/js/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
	<script src="{{ URL::asset('/js/login.js')}}"></script>

</body>
</html>